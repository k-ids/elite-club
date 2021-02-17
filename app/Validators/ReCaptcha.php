<?php
namespace App\Validators;
use GuzzleHttp\Client;
use App\Models\CaptchaSetting;

class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validator)
    {   
        $captch = CaptchaSetting::find(1);
        $client = new Client;
        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' =>
                    [
                        'secret' => $captch->secret_key,
                        'response' => $value
                    ]
            ]
        );
        $body = json_decode((string)$response->getBody());
        return $body->success;
    }
}