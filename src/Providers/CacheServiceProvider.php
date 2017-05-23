<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Cache\Adapter;
use FondBot\Cache\Adapters\FilesystemAdapter;
use FondBot\Cache\CacheServiceProvider as BaseCacheServiceProvider;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class CacheServiceProvider extends BaseCacheServiceProvider
{
    /**
     * Cache adapter.
     *
     * @return Adapter
     */
    public function adapter(): Adapter
    {
        $filesystem = new Filesystem(
            new Local(resources('cache'))
        );

        return new FilesystemAdapter($filesystem);
    }
}
