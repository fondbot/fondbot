<?php

require __DIR__.'/../bootstrap/app.php';

/** @var League\Route\RouteCollection $router */
$router = $kernel->resolve('router');

/** @var Zend\Diactoros\Response\SapiEmitter $emitter */
$emitter = $kernel->resolve('emitter');

$response = $router->dispatch(
    $kernel->resolve('request'),
    $kernel->resolve('response')
);

$emitter->emit($response);
