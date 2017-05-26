<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Cache\Adapter;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use FondBot\Cache\Adapters\FilesystemAdapter;
use FondBot\Cache\CacheServiceProvider as BaseCacheServiceProvider;

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
