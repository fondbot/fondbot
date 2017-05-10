<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Contracts\Queue;
use FondBot\Queue\SyncQueue;
use League\Container\ServiceProvider\AbstractServiceProvider;

class QueueServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Queue::class,
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register(): void
    {
        $this->getContainer()->share(Queue::class, function () {
            return new SyncQueue();
        });
    }
}
