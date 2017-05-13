<?php

return [

    /*
     * Define channels for bot.
     */
    'telegram' => [
        'driver' => 'telegram',
        'token' => env('TELEGRAM_TOKEN'),
    ],
    'facebook' => [
        'driver' => 'facebook',
        'page_token' => env('FACEBOOK_PAGE_TOKEN'),
        'verify_token' => env('FACEBOOK_VERIFY_TOKEN'),
        'app_secret' => env('FACEBOOK_APP_SECRET'),
    ],

];
