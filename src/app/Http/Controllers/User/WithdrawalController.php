<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\User_plans;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\WithdrawalStatus;
use App\Traits\Coinpayment;
use App\Traits\TemplateTrait;
use Session;

class WithdrawalController extends Controller
{
    use Coinpayment, TemplateTrait;
    //
    public function withdrawamount(Request $request)
    {
        $request->session()->put('paymentmethod', $request->method);
        return redirect()->route('withdrawfunds');
    }

    //Return withdrawals route
    public function withdrawfunds()
    {
        $paymethod = session('paymentmethod');
        $checkmethod =  Wdmethod::where('name', $paymethod)->first();
        if ($checkmethod->defaultpay == "yes") {
            $default = true;
        } else {
            $default = false;
        }

        if ($checkmethod->methodtype == "crypto") {
            $methodtype = 'crypto';
        } else {
            $methodtype = 'currency';
        }

        return view("user.withdraw", [
            'title' => 'Complete Withdrawal Request',
            'payment_mode' => $paymethod,
            'default' => $default,
            'methodtype' => $methodtype,
        ]);
    }

    public function getotp()
    {
        $code = $this->RandomStringGenerator(5);

        $user = Auth::user();
        User::where('id', $user->id)->update([
            'withdrawotp' => $code,
        ]);

        $message = "You have initiated a withdrawal request, use the OTP: $code to complete your request.";
        $subject = "OTP Request";
        Mail::bcc($user->email)->send(new NewNotification($message, $subject, $user->name));

        return redirect()->back()
            ->with('success', 'Action Sucessful! OTP have been sent to your email');
    }
    
    
    
    public function taxverification(Request $request){
         
         $data['method'] = $request->method;
         $data['amount'] = $request->amount;
         Session::put('data', $data);
        return redirect()->route('taxverification');
      
    }
    
    
    public function userwithdrawal(Request $request){
        $settings = Settings::where('id', '1')->first();
         if($request->withdrawal_code != Auth::user()->	user_withdrawalcode){
                 return redirect()->back()->with('message', "Withdrawal Code is incorrect!! Please contact $settings->conctact_email for the correct withdrawal code for this transaction");
                
            }else{
                
                 $user = Auth::user();
                 User::where('id', $user->id)->update([
                'withdrawal_code' => 'off'
               
            ]);
                 return redirect()->back()->with('success', "Withdrawal Code is correct, you can now continue with your Withdrawal transaction");
                
            }
            
        
      
    }
    
    
    
    

    public function completewithdrawal(Request $request)
    {
         
         $settings = Settings::where('id', '1')->first();
            if($request->taxcode != Auth::user()->taxcode){
                 return redirect()->back()->with('message', "Code is incorrect!! Please contact $settings->conctact_email for the correct code for this transaction");
                
            }
            
         $data = Session::get('data');
        if (Auth::user()->sendotpemail == "Yes") {
            if ($request->otpcode != Auth::user()->withdrawotp) {
                return redirect()->route('withdrawfunds')->with('message', 'OTP is incorrect, please recheck the code');
            }
        }

        $settings = Settings::where('id', '1')->first();
        if ($settings->enable_kyc == "yes") {
            if (Auth::user()->account_verify != "Verified") {
                return redirect()->back()->with('message', 'Your account must be verified before you can make withdrawal.');
            }
        }

        $method = Wdmethod::where('name',  $data['method'])->first();


            
        if ($method->charges_type == 'percentage') {
            $charges =  $data['amount'] * $method->charges_amount / 100;
        } else {
            $charges = $method->charges_amount;
        }

        $to_withdraw = $data['amount'] + $charges;
        //return if amount is lesser than method minimum withdrawal amount
    
        if (Auth::user()->roi < $to_withdraw) {
            return redirect()->route('withdrawfunds')
                ->with('message', 'Sorry, your account balance is insufficient for this request.');
        }

        if ($data['amount'] < $method->minimum) {
             return redirect()->route('withdrawfunds')
                ->with("message", "Sorry, The minimum amount you can withdraw is $settings->currency$method->minimum, please try another payment method.");
        }

        //get user last investment package
        User_plans::where('user', Auth::user()->id)
            ->where('active', 'yes')
            ->orderBy('activated_at', 'asc')->first();

        //get user
        $user = User::where('id', Auth::user()->id)->first();

        if ( $data['method'] == 'Bitcoin') {
            if (empty($user->btc_address)) {
                return redirect()->route('profile')
                    ->with('message', 'Please Setup your Bitcoin Wallet Address');
            }
            $coin = "BTC";
            $wallet = $user->btc_address;
        } elseif ( $data['method'] == 'Ethereum') {
            if (empty($user->eth_address)) {
                return redirect()->route('profile')
                    ->with('message', 'Please Setup your Ethereum Wallet Address');
            }
            $coin = "ETH";
            $wallet = $user->eth_address;
        } elseif ( $data['method']  == 'Litecoin') {
            if (empty($user->ltc_address)) {
                return redirect()->route('profile')
                    ->with('message', 'Please Setup your Litecoin Wallet Address');
            }
            $coin = "LTC";
            $wallet = $user->ltc_address;
        } elseif ( $data['method']  == 'USDT') {
            if (empty($user->usdt_address)) {
                return redirect()->route('profile')
                    ->with('message', 'Please Setup your USDT Wallet Address');
            }
            $coin = "USDT.TRC20";
            $wallet = $user->usdt_address;
        } elseif ( $data['method']  == 'Bank Transfer') {
            if (empty($user->account_name) or empty($user->bank_name) or empty($user->account_number)) {
                return redirect()->route('profile')
                    ->with('message', 'Please Setup your Bank Account Details');
            }
        }

        $amount = $data['amount'];
        $ui = $user->id;

        if ($settings->deduction_option == "userRequest") {
            //debit user
            User::where('id', $user->id)->update([
                'roi' => $user->roi - $to_withdraw,
                'withdrawotp' => NULL,
            ]);
        }

        if ($settings->withdrawal_option == "auto" and ( $data['method'] == 'Bitcoin' or  $data['method']  == 'Litecoin' or  $data['method']  == 'Ethereum' or  $data['method'] == 'USDT')) {
            return $this->cpwithdraw($amount, $coin, $wallet, $ui, $to_withdraw);
        }

        //save withdrawal info
        $dp = new Withdrawal();
        $dp->amount = $amount;
        $dp->to_deduct = $to_withdraw;
        $dp->payment_mode =$data['method'];
        $dp->status = 'Pending';
        $dp->paydetails = $request->details;
        $dp->user = $user->id;
        $dp->save();

        // send mail to admin
        Mail::to($settings->contact_email)->send(new WithdrawalStatus($dp, $user, 'Withdrawal Request', true));

        //send notification to user
        Mail::to($user->email)->send(new WithdrawalStatus($dp, $user, 'Successful Withdrawal Request'));

        return redirect()->route('withdrawalsdeposits')
            ->with('success', 'Action Sucessful! Please wait while we process your request.');
    }


    // for front end content management
    function RandomStringGenerator($n)
    {
        $generated_string = "";
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $len = strlen($domain);
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, $len - 1);
            $generated_string = $generated_string . $domain[$index];
        }
        // Return the random generated string 
        return $generated_string;
    }
}
