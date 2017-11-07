<?php

require __DIR__.'/../vendor/autoload.php';

$app = new FondBot\Framework\Application(
    realpath(__DIR__.'/../')
);

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    FondBot\Framework\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    FondBot\Framework\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    FondBot\Framework\Exceptions\Handler::class
);

return $app;
