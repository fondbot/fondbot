<?php

declare(strict_types=1);

namespace App\Providers;

use FondBot\Application\Config;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ConfigServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Config::class,
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register(): void
    {
        $this->getContainer()->share(Config::class, function () {
            $basePath = $this->getContainer()->get('base_path');

            $channels = require $basePath.'/config/channels.php';
            $intents = require $basePath.'/config/intents.php';

            return new Config([
                'channels' => $channels,
                'intents' => $intents['classes'],
                'fallback_intent' => $intents['fallback_intent'],
            ]);
        });
    }
}