<?php

declare(strict_types=1);

namespace Bot\Providers;

use League\Route\RouteGroup;
use League\Route\RouteCollection;
use FondBot\Controllers\Controller;
use FondBot\Controllers\WebhookController;
use FondBot\Foundation\RouteServiceProvider as BaseRouteServiceProvider;

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
        $routes->map('GET', '/', [Controller::class, 'run']);

        $routes->group('channels', function (RouteGroup $routes) {
            $routes->map('GET', '{name}', [WebhookController::class, 'run']);
            $routes->map('POST', '{name}', [WebhookController::class, 'run']);
        });
    }
}
