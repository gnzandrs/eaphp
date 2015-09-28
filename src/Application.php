<?php

namespace EaPHP;

use Illuminate\Contracts\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use EaPHP\Http\Controllers\HomeController;

class Application
{
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function run()
    {
        $router = new Router(
            new Dispatcher($this->container),
            $this->container
        );

        $router->get('/', HomeController::class . '@index');
        $router->get('/elfs', HomeController::class . '@elfs');
        $router->get('/humans', HomeController::class . '@humans');
        $router->get('/orcs', HomeController::class . '@orcs');


        $response = $router->dispatch(Request::capture());

        $response->send();
    }
}