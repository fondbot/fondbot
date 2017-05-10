<?php

require __DIR__.'/../vendor/autoload.php';

$container = new FondBot\Application\Container();

$container->addServiceProvider(new App\Providers\CacheServiceProvider());
$container->addServiceProvider(new App\Providers\QueueServiceProvider());

$kernel = FondBot\Application\Factory::create(
    $container,
    __DIR__.'/..',
    ''
);
