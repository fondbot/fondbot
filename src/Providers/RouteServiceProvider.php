<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Application\Controller;
use FondBot\Application\RouteServiceProvider as BaseRouteServiceProvider;
use League\Route\RouteCollection;
use League\Route\RouteGroup;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    /**
     * Define routes.
     *
     * @param RouteCollection $routes
     *
     * @return void
     */
    public function routes(RouteCollection $routes): void
    {
        $routes->map('GET', '/', [Controller::class, 'index']);

        $routes->group('channels', function (RouteGroup $routes) {
            $routes->map('GET', '{name}', [Controller::class, 'webhook']);
            $routes->map('POST', '{name}', [Controller::class, 'webhook']);
        });
    }
}