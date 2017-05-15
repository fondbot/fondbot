<?php

require __DIR__.'/../vendor/autoload.php';

$container = new League\Container\Container;

$container->addServiceProvider(new App\Providers\AppServiceProvider);
$container->addServiceProvider(new App\Providers\CacheServiceProvider);
$container->addServiceProvider(new App\Providers\ChannelServiceProvider);
$container->addServiceProvider(new App\Providers\FilesystemServiceProvider);
$container->addServiceProvider(new App\Providers\IntentServiceProvider);
$container->addServiceProvider(new App\Providers\QueueServiceProvider);
