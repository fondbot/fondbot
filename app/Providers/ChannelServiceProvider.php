<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Foundation\Providers\ChannelServiceProvider as ServiceProvider;

class ChannelServiceProvider extends ServiceProvider
{
    /**
     * Define bot channels.
     *
     * @return array
     */
    protected function channels(): array
    {
        return [
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
    }
}
