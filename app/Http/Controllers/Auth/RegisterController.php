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
use Twilio\Rest\Client;

class RegisterController extends Controller
{
    public function signup(SignupRequest $request){
        
        $validated = $request->validated();
        
        $post = $request->all();
       
        $post['code'] = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);

        Session::put('user_info',$post);

       // $html = view('emailTemplate.verifyEmail',$post)->render();
        
         $email='vikas93408@gmail.com';
         $name ='vikas';
         Mail::send('emailTemplate.verifyEmail', $post, function($message) use($email , $name) {
            $message->to($email, $name)->subject('My Testing Mail ');
            //->from( 'vikas93408@gmail.com', 'i am vikas' );
           });

        // User::create([
        //     'first_name'=>$request->get('first_name'),
        //     'last_name'=>$request->get('last_name'),
        //     'email'=>$request->get('email'),
        //    // 'password' => Hash::make('123'),
        // ]);

        //Mail code goes here


        //End mail code
       return  redirect('verifyEmail');
    }

    public function verifyEmail(Request $request){

        $validated = $request->validate([
            'code' => 'required',
        ]);   

        $user_info = session::get('user_info');

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");
            $client = new Client($account_sid, $auth_token);

            $recipients= "+919340813734";
            $num= str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
            $message = "Your verification code is : ".$num;
            $sms_send = $client->messages->create($recipients, 
                ['from' => $twilio_number, 'body' => $message] );

            if(isset($sms_send) && !empty($sms_send)){
                $post['phone_code'] = $num;
                         Session::put('user_info',$post);
                 return  redirect('verifyPhoneForm');
            }
    }

    public function verifyPhoneForm(Request $request){
                $user_info = session::get('user_info');
                if(isset($user_info) && !empty($user_info)){
                    return view('auth.verifyPhone');
                }else{
                    redirect('signup');
                }
    }
    public function verifyPhone(Request $request){
                $user_info = session::get('user_info');
                if(isset($user_info) && !empty($user_info)){
                    echo "<pre>";print_r($user_info);
                }else{
                    redirect('signup');
                }
    }
}
