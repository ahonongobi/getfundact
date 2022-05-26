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
    'google' => [
        'client_id' => '512700811198-nccfvus15ldkho56jesjg8j2bqq3gp48.apps.googleusercontent.com',
        'client_secret' => 'DS7PDo4K1gUfIphFY2xNDo_n',
        'redirect' => 'https://getfundact.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '775679230442836',
        'client_secret' => 'be50ffbd67663d539df5336188c6c377',
        'redirect' => 'https://getfundact.com/auth/facebook/callback',
    ],


];
