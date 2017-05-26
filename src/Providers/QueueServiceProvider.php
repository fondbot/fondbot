<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Queue\Adapter;
use FondBot\Queue\Adapters\SyncAdapter;
use FondBot\Queue\QueueServiceProvider as BaseQueueServiceProvider;

class QueueServiceProvider extends BaseQueueServiceProvider
{
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
