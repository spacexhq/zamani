<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\NewNotification;
use App\Models\Kyc;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class KycController extends Controller
{
    public function kyc()
    {
        $kycs = Kyc::with('user')->latest()->get();
        return view('admin.kyc', compact('kycs'));
    }

    public function processKyc(Request $request)
    {
        // Validate request
        $request->validate([
            'kyc_id' => 'required|exists:kycs,id',
            'action' => 'required|in:Accept,Reject',
            'message' => 'required|string',
            'subject' => 'required|string',
        ]);

        try {
            $application = Kyc::find($request->kyc_id);
            
            if (!$application) {
                return redirect()->route('kyc')->with('error', 'KYC application not found!');
            }

            $user = User::find($application->user_id);
            
            if (!$user) {
                return redirect()->route('kyc')->with('error', 'User not found!');
            }

            if ($request->action == 'Accept') {
                $user->account_verify = 'Verified';
                $user->save();
                
                $application->status = "Verified";
                $application->save();
            } else {
                // Handle file deletion safely
                if ($application->frontimg && Storage::disk('public')->exists($application->frontimg)) {
                    Storage::disk('public')->delete($application->frontimg);
                }
                if ($application->backimg && Storage::disk('public')->exists($application->backimg)) {
                    Storage::disk('public')->delete($application->backimg);
                }
                
                $user->account_verify = 'Rejected';
                $user->save();
                
                $application->delete();
            }

            // Send email notification
            Mail::to($user->email)->send(new NewNotification($request->message, $request->subject, $user->name));
            
            return redirect()->route('kyc')->with('success', 'Action Successful!');
            
        } catch (\Exception $e) {
            return redirect()->route('kyc')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}