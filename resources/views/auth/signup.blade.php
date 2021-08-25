@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('custom-css')
<style type="text/css">
.iti {
    display: block !important; 
}
.phone-error{display: none;}
</style>
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
                                    <form id="form" class="form-horizontal" method="POST" action="{{ route('signup') }}" onsubmit="return process(event)">
                                        @csrf
                                         <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input name="first_name" type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                value="{{ old('first_name') }}"
                                                 id="first_name"
                                                placeholder="Enter First Name" autocomplete="first_name" autofocus>
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
                                                value="{{ old('last_name') }}"
                                                 id="last_name"
                                                placeholder="Enter Last Name" autocomplete="last_name" autofocus>
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
                                                value="{{ old('email') }}" id="username"
                                                placeholder="Enter Email" autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Phone</label>
                                            <input type="hidden" name="phonecode" value=""  class="phonecode">
                                            <input name="phone" type="tel"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                 id="phone"
                                                 value="{{ old('phone') }}"
                                                autocomplete="phone" autofocus>
                                                <span class="invalid-feedback phone-error" role="alert">
                                                </span>
                                            @error('phone')
                                                <span class="invalid-feedback phone-error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Promo Code</label>
                                            <input name="promo_code" type="text"
                                                class="form-control @error('promo_code') is-invalid @enderror"
                                                 id="promo_code"
                                                placeholder="Enter Promo Code" autocomplete="promo_code" autofocus>
                                            @error('promo_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light send_2frm" type="submit">Next</button>
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

@section('custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script type="text/javascript">
const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
  preferredCountries: ["us", "co", "in", "de"],
  nationalMode: true,
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});
var country = phoneInput.getSelectedCountryData().iso2;
if($('#phone').val() !='')
    phoneInput.setCountry(localStorage.getItem("country"));
else
    localStorage.setItem("country", country);

const error = document.querySelector(".phone-error");
function process(event) {
    var country = phoneInput.getSelectedCountryData().iso2;
    localStorage.setItem("country",country);  
    const phoneNumber = phoneInput.getNumber();
    
    error.style.display = "none";

    if (!phoneInput.isValidNumber()) {
        error.style.display = "block";
        error.innerHTML = `Invalid phone number.`;
        error.classList.add("is-invalid");
        return false;
    }else
        return true;
        
}

$(document).ready(function(){
    $(document).on('keyup','#phone',function(){
        var code  = $('.iti__selected-flag').attr('title');
        var arr = code.split('+');
        $('.phonecode').val(arr[1]);
        process();
    })
    $(document).on('click','.send_2frm',function(){
         process();
         var code  = $('.iti__selected-flag').attr('title');
         var arr = code.split('+');
         $('.phonecode').val('+'+arr[1]);
    })
    
})
</script>
@endsection