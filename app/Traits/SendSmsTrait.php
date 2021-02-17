<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use App\Models\TwilioSetting;

trait SendSmsTrait {
     
    public function sendSms($number, $message_body) 
    {

        $twilio = TwilioSetting::find(1);

        $client = new Client($twilio->account_sid, $twilio->auth_token);

        try
        {
	            // Use the client to do fun stuff like send text messages!
	            $client->messages->create(
	            // the number you'd like to send the message to
	                '+91'.$number,
	           array(
	                 // A Twilio phone number you purchased at twilio.com/console
	                 'from' => $twilio->twilio_number,
	                 // the body of the text message you'd like to send
	                 'body' => $message_body
	             )
	         );
         }
        catch (Exception $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }
    

}
