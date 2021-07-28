<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Mail\TestMailHog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function signup(SignupRequest $request){
        
        $validated = $request->validated();

        Session::put('user_info',$request->all());
        
        $mail=Mail::to('softgetix.test@gmail.com')->send(new TestMailHog());
        echo $mail;
        print_r(Session::get('user_info'));
    }
}
