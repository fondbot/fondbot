<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Cache\FilesystemCache;
use FondBot\Contracts\Cache;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class CacheServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Cache::class,
    ];

    protected $path = '/resources/fondbot/cache';

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register(): void
    {
        $this->getContainer()->share(Cache::class, function () {
            $filesystem = new Filesystem(
                new Local($this->getContainer()->get('base_path').$this->path)
            );

            return new FilesystemCache($filesystem);
        });
    }
}
