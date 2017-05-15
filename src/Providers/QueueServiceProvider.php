<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Queue\Adapter;
use FondBot\Queue\Adapters\SyncAdapter;
use League\Container\ServiceProvider\AbstractServiceProvider;

class QueueServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Adapter::class,
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
        $this->getContainer()->share(Adapter::class, function () {
            return new SyncAdapter;
        });
    }
}
