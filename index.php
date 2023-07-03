<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Http\Response;
use \App\Controller\Pages\HomeController;

define('URL', 'http://localhost/donatetrack/');

$obRouter = new Router(URL);
//Rota Home

$obRouter->get('/', [
    function () {
        return new Response(200, HomeController::getHome());
    }
]);

$obRouter->run()
    ->sendResponse();
