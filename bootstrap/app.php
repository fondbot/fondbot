<?php

require __DIR__.'/../vendor/autoload.php';

$container = new League\Container\Container;

$kernel = FondBot\Application\Factory::create($container);

$container->addServiceProvider(new App\Providers\AppServiceProvider);
$container->addServiceProvider(new App\Providers\CacheServiceProvider);
$container->addServiceProvider(new App\Providers\ChannelServiceProvider);
$container->addServiceProvider(new App\Providers\FilesystemServiceProvider);
$container->addServiceProvider(new App\Providers\IntentServiceProvider);
$container->addServiceProvider(new App\Providers\LogServiceProvider);
$container->addServiceProvider(new App\Providers\QueueServiceProvider);
