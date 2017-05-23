<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Application\LogServiceProvider as BaseLogServiceProvider;
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;

class LogServiceProvider extends BaseLogServiceProvider
{
    /**
     * Define handlers.
     *
     * @return HandlerInterface[]
     */
    public function handlers(): array
    {
        return [
            // Write application logs to "/resources/fondbot/logs/app.log"
            new StreamHandler(resources('logs/app.log')),
        ];
    }
}
