@extends('layouts.master-without-nav')

@section('title')
    Select Plan
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary"> Select Plan</h5>
                                            
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <a href="index">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                               <!--  {{ __('Before proceeding, please check your email for a verification code.') }} -->
                                
                               @include('flash-message')

                                <form class="form-horizontal" method="POST" action="{{URL::to('selectPlanSubmit')}}">
                                        @csrf
                                <div class="row">
                                <div class="col-sm-3"></div>
                                    <div class="mb-3 col-sm-6">
                                        
                                        <input checked name="code" type="radio"
                                            class="form-check-input @error('code') is-invalid @enderror"
                                             id="code"
                                             value="49.99"
                                            autocomplete="code" >
                                           <spna> $49.99 month </spna>
                                        @error('code')
                                            <span class="invalid-feedback code-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <div class="p-2">
                                    

                                        <div class="text-center">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit">{{ __('Next') }}</button>
                                        </div>
                                        
                                </div>
                                </form>

                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>© <script>
                                        document.write(new Date().getFullYear())

                                    </script> Dealpipes. Rei Media LLC <i class="mdi mdi-heart text-danger"></i> 
                                </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
