<?php

require __DIR__.'/../vendor/autoload.php';

$container = new League\Container\Container();

$container->addServiceProvider(new App\Providers\ConfigServiceProvider);
$container->addServiceProvider(new App\Providers\CacheServiceProvider);
$container->addServiceProvider(new App\Providers\QueueServiceProvider);
