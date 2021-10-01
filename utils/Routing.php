<?php
namespace Utils;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use App\Controllers\HomeController;
use App\Controllers\UserController;

class Routing{
    public static function start($url){

        $router = new RouteCollector();

        $router->get('/', [HomeController::class, 'index']);
        $router->get('/add', [UserController::class, 'addUsers']);
        $router->post('/addok', [UserController::class, 'addUsers']);
        $router->get('/del', [UserController::class, 'delUsers']);
        $router->get('/edit', [UserController::class, 'editUsers']);
        $router->post('/editok', [UserController::class, 'editUsers']);
        $router->get('user', [UserController::class, 'index']);

        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}

?>