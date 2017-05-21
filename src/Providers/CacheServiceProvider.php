<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Cache\Adapter;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use FondBot\Cache\Adapters\FilesystemAdapter;
use FondBot\Cache\CacheServiceProvider as BaseCacheServiceProvider;

class CacheServiceProvider extends BaseCacheServiceProvider
{
    protected $path = 'cache';

    /**
     * Cache adapter.
     *
     * @return Adapter
     */
    public function adapter(): Adapter
    {
        $filesystem = new Filesystem(
            new Local($this->container->get('resources_path').$this->path)
        );

        return new FilesystemAdapter($filesystem);
    }
}
