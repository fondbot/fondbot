<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Channels\ChannelServiceProvider as BaseChannelServiceProvider;

class ChannelServiceProvider extends BaseChannelServiceProvider
{
    /**
     * Define channels.
     *
     * @return array
     */
    public function channels(): array
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
