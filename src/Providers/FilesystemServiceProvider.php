<?php

declare(strict_types=1);

namespace Bot\Providers;

use League\Flysystem\AdapterInterface;
use FondBot\Filesystem\FilesystemServiceProvider as BaseFilesystemServiceProvider;

class FilesystemServiceProvider extends BaseFilesystemServiceProvider
{
    /**
     * Filesystem adapters.
     *
     * @return AdapterInterface[]
     */
    public function adapters(): array
    {
        return [
            // 's3' => new AwsS3Adapter($client, 'your-bucket-name', 'optional/path/prefix');
        ];
    }
}
