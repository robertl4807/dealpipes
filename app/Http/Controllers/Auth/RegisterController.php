<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Mail\TestMailHog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function signup(SignupRequest $request){
        
        $validated = $request->validated();
        
        $post = $request->all();
       
        $post['code'] = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);

        Session::put('user_info',$post);

        $html = view('emailTemplate.verifyEmail',$post)->render();
   
        User::create([
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
           // 'password' => Hash::make('123'),
        ]);

        //Mail code goes here


        //End mail code
       return  redirect('verifyEmail');
    }

    public function verifyEmail(Request $request){

        $validated = $request->validate([
            'code' => 'required',
        ]);   

        $user_info = session::get('user_info');
        
    }
}
