<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;


define('URL', 'http://localhost/donatetrack');


$obRouter = new Router(URL);
include __DIR__ . '/routes/pages.php'; // Controle de Rotas e direcionamento das páginas

// IMPPRIME O RESPONSE DA ROTA
$obRouter->run()->sendResponse();
