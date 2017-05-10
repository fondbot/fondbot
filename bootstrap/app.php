<?php

require __DIR__.'/../vendor/autoload.php';

$kernel = FondBot\Application\Factory::create(
    new FondBot\Application\Container(),
    __DIR__.'/..',
    ''
);
