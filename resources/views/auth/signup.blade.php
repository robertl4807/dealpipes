@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
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
                                            <h5 class="text-primary">Welcome !</h5>
                                            <p>Sign up to continue to Dealpipes.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="auth-logo">
                                    <a href="index" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo-light.svg') }}" alt=""
                                                    class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo.svg') }}" alt=""
                                                    class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('signup') }}">
                                        @csrf
                                         <div class="mb-3">
                                            <label for="username" class="form-label">First Name</label>
                                            <input name="first_name" type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                 id="first_name"
                                                placeholder="Enter First Name" autocomplete="email" autofocus>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                         <div class="mb-3">
                                            <label for="username" class="form-label">Last Name</label>
                                            <input name="last_name" type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                 id="last_name"
                                                placeholder="Enter Last Name" autocomplete="email" autofocus>
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input name="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email', 'admin@themesbrand.com') }}" id="username"
                                                placeholder="Enter Email" autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Phone</label>
                                            <input name="phone" type="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                 id="phone"
                                                placeholder="Enter Phone No" autocomplete="phone" autofocus>
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Promo Code</label>
                                            <input name="promo_code" type="text"
                                                class="form-control @error('promo_code') is-invalid @enderror"
                                                 id="promo_code"
                                                placeholder="Enter Promo Code" autocomplete="phone" autofocus>
                                            @error('promo_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Next</button>
                                        </div>

                                        

                                       
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                               
                                <p>© <script>
                                        document.write(new Date().getFullYear())

                                    </script> Dealpipes. Rei Media LLC <i class="mdi mdi-heart text-danger"></i> 
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

    @endsection
