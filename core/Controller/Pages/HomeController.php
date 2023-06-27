<?php

namespace App\Controller\Pages;

use App\Utils\View;

class HomeController
{
    /**
     * Método reponsável por retornar o conteúdo (view).
     *
     * @return string Returns the name of the HomeController.
     */
    public static function getHome()
    {
        return View::render('Pages/homeView');
    }
}
