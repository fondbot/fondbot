<?php

declare(strict_types=1);

namespace Bot\Providers;

use Monolog\Handler\StreamHandler;
use Monolog\Handler\HandlerInterface;
use Monolog\Formatter\LineFormatter;
use FondBot\Foundation\LogServiceProvider as BaseLogServiceProvider;

class LogServiceProvider extends BaseLogServiceProvider
{
    /**
     * Define handlers.
     *
     * @return HandlerInterface[]
     */
    public function handlers(): array
    {
        $handler = new StreamHandler(resources('logs/app.log'));
        $handler->setFormatter($this->getDefaultForrmater());

        return [
            // Write application logs to "/resources/fondbot/logs/app.log"
            $handler,
        ];
    }

    public function getDefaultForrmater()
    {
        return new LineFormatter(null, null, true, true);
    }
}
