<?php


use \App\Http\Response;
use \App\Controller\Pages\HomeController;
use \App\Controller\Pages\DonationEditController;
use \App\Controller\Pages\DonationListController;
use \App\Controller\Pages\DonateController;


//ROTA HOME GET
$obRouter->get('/', [
    function () {
        return new Response(200, HomeController::getHome());
    }
]);

//ROTA HOME POST
$obRouter->post('/', [
    function () {
        return new Response(200, HomeController::getHome());
    }
]);

// ROTA DE CADASTRO DE DOAÇÕES GET
$obRouter->get('/doar', [
    function () {
        return new Response(200, DonateController::getHome());
    }
]);

// ROTA DE CADASTRO DE DOAÇÕES POST 
$obRouter->post('/doar', [
    function () {
        return new Response(200, DonateController::getHome());
    }
]);

// ROTA DE VISUALIZAÇÃO DE DOAÇÕES GET
$obRouter->get('/visualizar', [
    function () {
        return new Response(200, DonationListController::getHome());
    }
]);

// ROTA DE VISUALIZAÇÃO DE DOAÇÕES POST
$obRouter->post('/visualizar', [
    function () {
        return new Response(200, DonationListController::getHome());
    }
]);

// ROTA DE EDIÇÃO DE DOAÇÕES GET
$obRouter->get('/editar', [
    function () {
        return new Response(200, DonationEditController::getHome());
    }
]);

// ROTA DE EDIÇÃO DE DOAÇÕES POST
$obRouter->post('/editar', [
    function () {
        return new Response(200, DonationEditController::getHome());
    }
]);
