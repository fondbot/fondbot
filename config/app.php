<?php

return [

    /*
     * Application environment.
     *
     * Determine environment where application is currently is running on.
     */
    'env' => env('APP_ENV', 'local'),

    /*
     * Define channels for bot.
     */
    'channels' => [

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

    ],

    /**
     * Here you define all intents that should be enabled.
     */
    'intents' => [
        App\ExampleIntent::class,
    ],

    /**
     * If message does not match any intents, this intent will run.
     */
    'fallback_intent' => FondBot\Conversation\FallbackIntent::class,

];
