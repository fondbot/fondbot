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
            // 'vk' => [
                // 'driver' => 'vk',
                // 'access_token' => env('VK_ACCESS_TOKEN'),
                // 'confirmation_token' => env('VK_CONFIRMATION_TOKEN'),
                // 'secret_key' => env('VK_SECRET_KEY'),
                // 'group_id' => env('VK_GROUP_ID'),
            // ],
            // 'yandex-dialogs' => [
                // 'driver' => 'yandex-dialogs',
            // ],
        ];
    }
}
