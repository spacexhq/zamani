@extends('layouts.dashly1')
@section('title', $title)
@section('content')
    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div class="mb-3 col-md-6 mb-md-0">
            <h1 class="h2">
        Deposit into your account
    </h1>
            </div>
        </div>
    </div>
    <x-danger-alert />
    <x-success-alert />
       <x-success-alert />
    <x-alert />
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="javascript:;" method="post" id="submitpaymentform">
                                @csrf
                                <div class="row" x-data>
                                    <div class="mb-4 col-md-12">
                                        <h5 class="card-title ">Enter Amount</h5>
                                        <input class="form-control " placeholder="Enter Amount"
                                            min="{{ $moresettings->minamt }}" type="number" name="amount" required>
                                    </div>
                                    <div class="mb-4 col-md-12">
                                        <input type="hidden" name="payment_method" id="paymethod">
                                    </div>
                                    <div class="mt-2 mb-1 col-md-12">
                                        <h5 class="card-title ">Choose Payment Method from the list below</h5>
                                    </div>
                                    @forelse ($dmethods as $method)
                                    <div class="col-6 col-xl-3">
                <!-- Card -->
                <a href="" style="cursor: pointer;" data-method="{{ $method->name }}"
                    id="{{ $method->id }}" class="text-decoration-none"
                    onclick="checkpamethd(this.id)">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                
                                <div
                                    class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center  ">
                                     
                                    <input type="radio" id="{{ $method->id }}customCheck1"
                                        readonly style="height:35px; width:35px; vertical-align: middle;">
                               
                                   
                                    @if (!empty($method->img_url))
                                    <img src="{{ $method->img_url }}" alt=""
                                        class="" style="width: 30px;">

                                    @else
                                    <svg width="92px" height="77px" viewBox="0 0 1024 1024" class="icon"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M512 512m-480 0a480 480 0 1 0 960 0 480 480 0 1 0-960 0Z"
                                        fill="#E9E8FF" />
                                    <path
                                        d="M467.2 332.8l230.4-83.2 44.8 83.2zM384 332.8l96-83.2 38.4 51.2-64 32z"
                                        fill="#C6C9FF" />
                                    <path
                                        d="M300.8 755.2c-25.6 0-51.2-25.6-51.2-51.2V384c0-25.6 25.6-51.2 51.2-51.2h428.8c25.6 0 51.2 25.6 51.2 51.2v313.6c0 25.6-25.6 51.2-51.2 51.2l-428.8 6.4z"
                                        fill="#8880FE" />
                                    <path
                                        d="M761.6 608H704c-25.6 0-51.2-19.2-51.2-51.2v-19.2c0-25.6 25.6-51.2 51.2-51.2h57.6c25.6 0 51.2 19.2 51.2 51.2v25.6c0 25.6-19.2 44.8-51.2 44.8z"
                                        fill="#C6C9FF" />
                                </svg>

                                @endif
                                    
                                </label>
                                                                    </div>
                            </div>
                            <!-- Title -->
                            <h3 class="card-title mt-3 mb-0 text-dark"> {{ $method->name }} </h3>
                            <span class="text-muted m-0 p-0">Pay via  {{ $method->name }} </span>
                        </div>
                    </div>
                </a>
            </div>
            @empty
                                        <div class="mb-1 col-md-12">
                                            <p class="">No Payment Method enabled at the moment, please check
                                                back later.</p>
                                        </div>
                                    @endforelse
                                    @if (count($dmethods) > 0)
                                        <div class="mt-2 mb-1 col-md-12">
                                            <input type="submit" class="px-5 btn btn-primary btn-lg"
                                                value="Procced to Payment">
                                        </div>
                                        <input type="hidden" id="lastchosen" value="0">
                                    @endif
                            </form>
                        </div>
                        
                                <div class="card-footer">
                                    <div class="actions d-flex justify-content-between">
                                        <a href="{{ route('accounthistory') }}" class="action-item">
                                            <span class="btn-inner--icon">View deposit history</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        @parent
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap Notify -->
        <script src="{{ asset('dash2/libs/bootstrap-notify/bootstrap-notify.min.js') }} "></script>

        @include('user.script')

    @endsection
@endsection
