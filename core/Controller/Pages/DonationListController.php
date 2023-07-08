<?php

namespace App\Controller\Pages;

use App\Utils\View;

class DonationListController extends PageController
{
    /**
     * Método reponsável por retornar o conteúdo (view).
     *
     * @return string Returns the name of the HomeController.
     */
    public static function getViewDonations()
    {
        $db = new \PDO('sqlite:database.sqlite', '', '', [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        ]);

        // Consulta SQL para recuperar as doações
        $sql = "SELECT * FROM donations";
        $stmt = $db->query($sql);

        // Recupera os resultados em um array
        $doacoes = $stmt->fetchAll(\PDO::FETCH_ASSOC);


        //VIEW DA HOME

        $vars = [
            'name' => 'Visualizar doações',
            'doacoes_id' => '3',
            'doacoes_donorId' => '1',
            'doacoes_donatedItemType' => 'Clothing',
            'doacoes_donatedItemReferenceId' => '1',
            'doacoes_donationDate' => '2023-06-01',
            'doacoes_moneyId' => '',
        ];


        $content = View::render('Pages/DonationListVew', $vars);


        //RETORNA A VIEW PAGE, USO DE PARENT POIS ESTÁ ESTENDENDO DA CLASSE PAGE, PODERIA SER SELF.
        return parent::getPage('Visualizar doações', $content);
    }
}
