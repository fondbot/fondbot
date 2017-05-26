<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Application\AppServiceProvider as BaseAppServiceProvider;

class AppServiceProvider extends BaseAppServiceProvider
{
    /**
     * Determine environment where application is currently is running on.
     *
     * @return string
     */
    public function environment(): string
    {
        return env('APP_ENV', 'local');
    }

    /**
     * Base path of the application.
     *
     * @return string
     */
    public function basePath(): string
    {
        return __DIR__.'/../..';
    }

    /**
     * Path to the "resources folder".
     *
     * @return string
     */
    public function resourcesPath(): string
    {
        return $this->basePath().'/resources';
    }
}
