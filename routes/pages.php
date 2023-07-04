<?php


use \App\Http\Response;
use \App\Controller\Pages\HomeController;
use \App\Controller\Pages\DonationEditController;
use \App\Controller\Pages\DonationListController;
use \App\Controller\Pages\DonateController;





//ROTA HOME
$obRouter->get('/', [
    function () {
        return new Response(200, HomeController::getHome());
    }
]);

// ROTA DE CADASTRO DE DOAÇÕES
$obRouter->get('/doar', [
    function () {
        return new Response(200, DonateController::getHome());
    }
]);

// ROTA DE CADASTRO DE DOAÇÕES
$obRouter->get('/visualizar', [
    function () {
        return new Response(200, DonationListController::getHome());
    }
]);

// ROTA DE CADASTRO DE DOAÇÕES
$obRouter->get('/editar', [
    function () {
        return new Response(200, DonationEditController::getHome());
    }
]);
