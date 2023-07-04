<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;


define('URL', 'http://localhost/donatetrack');

// Define o valor padrão das variáveis
View::init([
    'URL' => URL,
]);

// Inicia o Router
$obRouter = new Router(URL);

// Controle de Rotas e direcionamento das páginas
include __DIR__ . '/routes/pages.php';

// IMPPRIME O RESPONSE DA ROTA
$obRouter->run()->sendResponse();
