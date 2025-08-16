@extends('layouts.dashly1')
@section('title', $title)
@section('content')
    <!-- Title -->
    <h1 class="h2">
        Complete withdrawal request
    </h1>
    @if (session('status'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Error!',
                text: "{{ session('status') }}",
                icon: 'error',
                confirmButtonText: 'Okay'
            })
        </script>
        {{ session()->forget('status') }}
    @endif
    <x-danger-alert />
    <x-success-alert />
     <x-alert />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-md-2">
                            <div class="mb-3">
                                <h5 class="h4">The Tax code is required to enable you to continue with your withdrawal. Please contact any of our online customer care on representative with on livechat or on {{$settings->contact_email}} they will help you with the appropriate code for this transaction.</h5>
                            </div>
                          
                               <form action="{{ route('completewithdrawal') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="">Enter Code 
                                          </label>
                                        <input class="form-control " placeholder="Enter Tax code" type="text"
                                            name="taxcode" step="any" required>
                                    </div>
                                   

                                   
                                            
                                
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type='submit'>Verify Code</button>
                                    </div>
                                </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
