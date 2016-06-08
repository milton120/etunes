<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => 'sandbox19273f57fe524670b7b155223a15583e.mailgun.org',
        'secret' => 'key-f3c35f40b5b4ab45d41ab492c4a79ef7',
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

    'braintree' => [
    'model'  => App\Member::class,
    'environment' => env('sandbox'),
    'merchant_id' => env('6smzp5qtgsdhtbdm'),
    'public_key' => env('jrpscyppy84dvycm'),
    'private_key' => env('9276a445e306b5c2f66c431c920d9c19'),
],

];
