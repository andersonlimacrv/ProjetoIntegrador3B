<?php

namespace App\Controller\Pages;

use App\Utils\View;

class DonationEditController extends PageController
{
    /**
     * Método reponsável por retornar o conteúdo (view).
     *
     * @return string Returns the name of the HomeController.
     */
    public static function getHome()
    {   //VIEW DA HOME
        $content = View::render('Pages/DonationEditView', ['name' => 'Editar doações']);


        //RETORNA A VIEW PAGE, USO DE PARENT POIS ESTÁ ESTENDENDO DA CLASSE PAGE, PODERIA SER SELF.
        return parent::getPage('Controle de Doações', $content);
    }
}
