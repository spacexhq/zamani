@section('styles')
    @parent
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@extends('layouts.dashly1')
@section('title', $title)
@section('content')

    <!-- Title -->
    @if(Auth::user()->upgrade==='off' and Auth::user()->withdrawal_code==='off')
    <div class="mb-5">
        <h1 class="h2 m-0">
            Withdraw from your account.
        </h1>
        <p class="m-0">Place a withdrawal request using any of the payment method below.</p>
    </div>
    @elseif( Auth::user()->withdrawal_code==='off' and Auth::user()->upgrade==='on')
    <div class="mb-5">
        <h1 class="h2 m-0">
           Upgrade Required!!!
        </h1>
        <p class="m-0">Please Upgrade your account, your current investment plan does not support this action conact support on more info</p>
    </div>
    @endif

    <x-danger-alert />
    <x-success-alert />
     <x-alert />
      @if(Auth::user()->upgrade==='off' and Auth::user()->withdrawal_code==='on' ) 
      
     
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-md-2">
                            <div class="mb-3">
                                <h5 class="h4">The Withdrwal Code is required to enable you to continue with your withdrawal. Please contact any of our online customer care on representative on livechat or on with {{$settings->contact_email}} they will help you with the appropriate withdrwal code for this transaction.</h5>
                            </div>
                          
                               <form action="{{ route('userwithdrawal') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="">Enter Code 
                                          </label>
                                        <input class="form-control " placeholder="Enter Withdrwal Code" type="text"
                                            name="withdrawal_code" step="any" required>
                                    </div>
                                   

                                   
                                            
                                
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type='submit'>Verify Withdrawal Code</button>
                                    </div>
                                </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
      
      @endif
     
     @if(Auth::user()->upgrade==='off' and Auth::user()->withdrawal_code==='off' ) 
    <div class="row mb-6">
        @forelse ($wmethods as $method)
            <div class="col-xl-4">
                <!-- Card -->
                <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                    <div class="card-body">
                        <h2 class="card-title h4 text-uppercase text-secondary text-center mb-3">{{ $method->name }}</h2>
                        <h3 class="card-text display-3 text-center">
                            {{ $settings->currency }}{{ number_format($method->maximum) }} <span
                                class="fs-3 fw-normal text-secondary">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class="list-unstyled mb-7">
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12"
                                    class="me-2 text-primary">
                                    <path
                                        d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z"
                                        style="fill: currentColor" />
                                </svg>
                                Minimum amount: {{ $settings->currency }}{{ number_format($method->minimum) }}
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12"
                                    class="me-2 text-primary">
                                    <path
                                        d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z"
                                        style="fill: currentColor" />
                                </svg>
                                Charge Type: {{ $method->charges_type }}
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12"
                                    class="me-2 text-primary">
                                    <path
                                        d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z"
                                        style="fill: currentColor" />
                                </svg>
                                Charges Amount:
                                @if ($method->charges_type == 'percentage')
                                    {{ $method->charges_amount }}%
                                @else
                                    {{ $settings->currency }}{{ $method->charges_amount }}
                                @endif
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12"
                                    class="me-2 text-primary">
                                    <path
                                        d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z"
                                        style="fill: currentColor" />
                                </svg>
                                Duration: {{ $method->duration }}
                            </li>
                        </ul>
                        @if ($settings->enable_with == 'false')
                            <button class="btn btn-lg btn-primary w-100" data-bs-toggle="modal"
                                data-bs-target="#withdrawdisabled" type="button">Select this method</button>
                        @else
                            <form action='{{ route('withdrawamount') }}' method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" value="{{ $method->name }}" name="method">
                                    <button class="btn btn-lg btn-primary w-100" type='submit'>
                                        Select this method
                                    </button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <h3>No withdrawal method enabled.</h3>
            </div>
        @endforelse

        <div id="withdrawdisabled" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalCenterTitle">Withdawal is disabled</h3>
                    </div>
                    <div class="modal-footer m-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
@section('scripts')
    @parent
    @if(Auth::user()->upgrade==='on')
    <script>
       
       Swal.fire({
  icon: "warning",
  text: "Please Upgrade your account, your current investment plan does not support this action conact support on more info!!",
 
}); 
       
                          
                               
    </script>
 @endif
@endsection