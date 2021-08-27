<?php

namespace App\Support;

class TwilioCredentials
{

    public static function Credentials()
    {
        $CredArr = [
            'TWILIO_AUTH_TOKEN'=>config("devRequest.TWILIO_AUTH_TOKEN"),
            'TWILIO_NUMBER'=>config("devRequest.TWILIO_NUMBER"),'TWILIO_SID'=>config("devRequest.TWILIO_SID")
        ];

        return $CredArr;
    }
}