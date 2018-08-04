<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Events\MessageReceived;
use FondBot\Foundation\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        MessageReceived::class => [
            // 'MyMessageReceivedHandler'
        ],
    ];
}
