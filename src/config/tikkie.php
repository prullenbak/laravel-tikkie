<?php

return [
    'key' => env('TIKKIE_KEY'),
    'secret' => env('TIKKIE_SECRET'),
    'testmode' => env('APP_ENV') != 'production',
    'privatekey' => base_path().'/private_rsa.pem'    
];
