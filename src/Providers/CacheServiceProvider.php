<?php

declare(strict_types=1);

namespace Bot\Providers;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use Psr\SimpleCache\CacheInterface;
use Cache\Adapter\Filesystem\FilesystemCachePool;
use FondBot\Foundation\CacheServiceProvider as BaseCacheServiceProvider;

class CacheServiceProvider extends BaseCacheServiceProvider
{
    /**
     * Cache adapter.
     *
     * @return CacheInterface
     */
    public function adapter(): CacheInterface
    {
        $filesystem = new Filesystem(
            new Local(resources())
        );

        return new FilesystemCachePool($filesystem);
    }
}
