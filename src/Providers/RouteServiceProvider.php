<?php

declare(strict_types=1);

namespace Bot\Providers;

use FondBot\Foundation\RouteServiceProvider as BaseRouteServiceProvider;
use FondBot\Controllers\Controller;
use FondBot\Controllers\WebhookController;
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
        $routes->map('GET', '/', resolve(Controller::class));

        $routes->group('channels', function (RouteGroup $routes) {
            $routes->map('GET', '{name}', resolve(WebhookController::class));
            $routes->map('POST', '{name}', resolve(WebhookController::class));
        });
    }
}