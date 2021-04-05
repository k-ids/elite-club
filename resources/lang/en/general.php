<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'sidebar' => [
             
         'label'    =>  [
            'template' => 'FRONTEND SETTINGS',
            'dev-console' => 'DEVELOPER CONSOLE'
         ],

         'main_menu' => [
              'template' => 'Templates',
              'settings' => 'Third Party Settings',
              'pages'    => 'Pages',
              'dev-console' => 'Developer Console'
         ],

         'sub_menu' => [
             'template' => [
                'email'          => 'Email',
                'sms'            => 'SMS',
             ],
             'settings' => [
                'email'          => 'Email',
                'sms'            => 'SMS',
                'g_captcha'      => 'Google Captcha',
                'twilio'         => 'Twilio'
             ],

            
        ],

    ],

    'email-template' => [
        'heading' => 'Create Template',
        
    ],
    'sms-template' => [
        'heading' => 'Create Template',
        
    ],
    'page' => [
        'heading' => 'Create Page',
        
    ],

    'plan' => [
        'heading' => 'Create Plan',
        
    ],

    'artisan' => [
        'heading' => 'Add Artisan Command'
    ],

    'heading' => [
            'twilio' => 'Twilio Settings'
    ],
    
    'form_label' => [
          'googlecaptcha' => [
             'site_key'   => 'Site Key:',
             'secret_key' => 'Secret Key:',
             'enable_disable'   => 'Enable/Disable on Frontend:'
          ],

          'twilio' => [
               'auth_token'   => 'Auth Token:',
               'account_sid'  => 'Account SID:',
               'app_sid'      => 'APP SID:',
               'is_enable'    => 'Enable/Disable:',
               'number'       => 'Twilio Number:'
          ]
    ],

];