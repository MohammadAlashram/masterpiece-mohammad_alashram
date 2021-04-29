<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // 'google' => [
    //     'client_id' => '723686535260-uhopifp50cb3s0h8o2oai8vqfh2rnh86.apps.googleusercontent.com',
    //     'client_secret' => 'eFGFVVwVX3IhXICL41_rPnUD',
    //     'redirect' => 'http://localhost:8000/auth/google/callback',
    // ],

    'google' => [
        'client_id' => env('MY_CLIENT_ID', '852118183637-ekf4tecek0cs73aqjq4egbu4ok7t7c5l.apps.googleusercontent.com'),
        'client_secret' => env('MY_CLIENT_SECRET', 'mR-UtzZJwok6pV2LqSlWZz5M'),
        'redirect' => env('MY_CLIENT_REDIRECT', 'http://localhost:8000/auth/google/callback'),
    ],
];
