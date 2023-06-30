<?php

namespace App\Controller\Pages;

use App\Utils\View;

class PageController
{
    /**
     * Renderiza o header
     *
     * @return string local/name
     */
    private static function getHeader()
    {
        return View::render('Pages/header');
    }
    /**
     * Retrieves the header view.
     *
     * @return string Renderiza o  footer 
     */
    private static function getFooter()
    {
        return View::render('Pages/footer');
    }
    /**
     * Método reponsável por retornar o conteúdo (view), page como página renérica
     *
     * @return string Returns the name of the HomeController.
     */
    public static function getPage($title, $content)
    {
        return View::render('Pages/pageView', [
            'title' => $title,
            'header' => self::getHeader(),
            'footer' => self::getFooter(),
            'content' => $content,
        ]);
    }
}
