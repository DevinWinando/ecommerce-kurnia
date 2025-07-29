<?php

return [

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'pos' => [
        'token' => env('POS_TOKEN', ''),
        'url' => env('POS_URL', 'http://kurnia.test'),
    ],
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],
];
