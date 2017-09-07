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
        ];
    }
}
