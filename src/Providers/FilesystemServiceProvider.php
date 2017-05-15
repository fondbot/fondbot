<?php

declare(strict_types=1);

namespace App\Providers;

use League\Flysystem\Adapter\Local;
use League\Flysystem\AdapterInterface;
use FondBot\Filesystem\FilesystemServiceProvider as BaseFilesystemServiceProvider;

class FilesystemServiceProvider extends BaseFilesystemServiceProvider
{
    /**
     * Filesystem adapter.
     *
     * @return \League\Flysystem\AdapterInterface
     */
    public function adapter(): AdapterInterface
    {
        return new Local(__DIR__.'/../..');
    }
}
