<?php

return [




/*
-------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
            'domain' => env('MAILGUN_DOMAIN'),
            'secret' => env('MAILGUN_SECRET'),
        ],

    'ses' => [
            'key' => env('SES_KEY'),
            'secret' => env('SES_SECRET'),
            'region' => 'us-east-1',
        ],

    'sparkpost' => [
            'secret' => env('SPARKPOST_SECRET'),
        ],

    'stripe' => [
            'model' => App\User::class,
            'key' => env('STRIPE_KEY'),
            'secret' => env('STRIPE_SECRET'),
        ],

    'facebook' => [
        'client_id' => '1302753823153084',
        'client_secret' => '4ef5495db1b954193879a331e2a3e23d',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],

    'twitter' => [
        'client_id' => '7AoMJWZLr52EXNGMF4ECSdRCH',
        'client_secret' => 'UTfUYHrbJ5evIGMmiPaF9HYQ8kGoN0hx0aaedr7QvAhVRmVuDx',
        'redirect' => 'http://localhost:8000/callback/twitter',
    ],

];
