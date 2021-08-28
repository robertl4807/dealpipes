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
    public function __construct(){
    
    }
    public function signup(SignupRequest $request){

        $validated = $request->validated();

        $post = $request->all();
        //validate for twilio number start
            if(ctype_digit($post['phone'])){
                $post['phone'] =  $post['phonecode'].$post['phone'];
            }
            if(preg_match('/\s/',$post['phone']) && ($post['phone']{0} != "+")){
                    $post['phone'] =  str_replace(' ', '', $post['phonecode'].$post['phone']);
            }
            if($post['phone'][0] == "+"){
                    $post['phone'] =  str_replace(' ', '',$post['phone']);
            }
            if(($post['phone'][0] == 0)){
                $val = substr($post['phone'],1);
                $val =  str_replace(' ', '', $post['phonecode'].$val);
            }
        //validate for twilio number end
        //echo "<pre>";print_r($post);die;
        $post['code'] = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);

        Session::put('user_info',$post);

       // $html = view('emailTemplate.verifyEmail',$post)->render();

         $email=$request->get('email');
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
    public function verifyEmailFrm(Request $request){
         if (Session::has('user_info'))
            return view('auth.verifyEmail');
          else
           return redirect('signup');
    }
    public function verifyEmail(Request $request){

        $validated = $request->validate([
            'code' => 'required',
        ]);

        $user_info = session::get('user_info');

        if($request->input('code') == $user_info['code'])
        {
            // echo "<pre>";print_r($this->CredArr);
            // //print_r($request->input('code'));
            //  die;
            $client = app('twilio');

            $recipients= $user_info['phone'];

            $num= str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
            $message = "Your verification code is: ".$num;
            $sms_send = $client->messages->create($recipients,
                ['from' => config('apikeys.TWILIO_NUMBER'), 'body' => $message] );

            if(isset($sms_send) && !empty($sms_send)){
                $post['phone_code'] = $num;
                         Session::put('user_info1',$post);
                 return  redirect('verifyPhone');
            }
        }else{
              return redirect('verifyEmail')->with('error','verification code is invalid');
        }
    }

    public function verifyPhone(Request $request){
                $user_info = session::get('user_info');
                $user_info1 = session::get('user_info1');

                if(isset($user_info1['phone_code'])&& !empty($user_info1['phone_code'])){
                    return view('auth.verifyPhone');
                }else{
                    return redirect('signup');
                }
    }
    public function verifyPhoneSubmit(Request $request){
                $user_info = session::get('user_info');
                $user_info1 = session::get('user_info1');
                $phone_code = $user_info1['phone_code'];

                if($request->input('code') == $phone_code){
                    return redirect('selectPlan');
                }else{
                    return redirect('verifyPhone')->with('error','verification code is invalid');
                }
    }
    public function selectPlan(Request $request){
                $user_info = session::get('user_info');
                $user_info1 = session::get('user_info1');
                if(isset($user_info) && !empty($user_info))
                return view('auth.selectPlan');
                else
                return redirect('signup');

    }
    public function selectPlanSubmit(Request $request){
                $user_info = session::get('user_info');
                $user_info1 = session::get('user_info1');
                $plan = $request->input('code');
                if(isset($plan) && !empty($plan))
                {
                    echo "<pre>";var_dump($user_info);var_dump($user_info1);
                    echo $plan;
                }else{
                     return redirect('selectPlan')->with('error','Oops error !');
                }
    }
}
