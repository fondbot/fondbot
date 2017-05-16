<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Contracts\Queue;
use FondBot\Queue\Adapter;
use FondBot\Queue\Adapters\SyncAdapter;
use FondBot\Queue\QueueServiceProvider as BaseQueueServiceProvider;

class QueueServiceProvider extends BaseQueueServiceProvider
{
    protected $provides = [
        Queue::class,
    ];

    /**
     * Queue adapter.
     *
     * @return Adapter
     */
    public function adapter(): Adapter
    {
        return new SyncAdapter;
    }
}
