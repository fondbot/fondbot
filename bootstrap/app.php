<?php

require __DIR__.'/../vendor/autoload.php';

$container = new League\Container\Container();

$container->share(FondBot\Application\Config::class, function () {
    return new FondBot\Application\Config(
        require __DIR__.'/../config/app.php'
    );
});

$container->addServiceProvider(new App\Providers\CacheServiceProvider);
$container->addServiceProvider(new App\Providers\QueueServiceProvider);
