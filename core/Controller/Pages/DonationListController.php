<?php

namespace App\Controller\Pages;

use App\Utils\View;

class DonationListController extends PageController
{
    /**
     * Método responsável por retornar o conteúdo (view).
     *
     * @return string Retorna o nome do HomeController.
     */
    public static function getViewDonations()
    {
        $db = new \PDO('sqlite:database.sqlite', '', '', [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        ]);

        // Consulta SQL para recuperar a última doação
        $sql = "SELECT * FROM donations ORDER BY id DESC LIMIT 1";
        $stmt = $db->query($sql);

        // Recupera a última doação
        $doacao = $stmt->fetch(\PDO::FETCH_ASSOC);

        // Verifica se há uma doação encontrada
        if (!$doacao) {
            // Caso não haja doação, retorne uma resposta de erro ou faça o tratamento adequado
            return 'Nenhuma doação encontrada.';
        }

        // Verifica se há um moneyId associado à doação
        if (!empty($doacao['moneyId'])) {
            // Consulta SQL para obter o valor do moneyId na tabela money
            $sqlMoney = "SELECT amount FROM money WHERE id = :moneyId";
            $stmtMoney = $db->prepare($sqlMoney);
            $stmtMoney->bindValue(':moneyId', $doacao['moneyId']);
            $stmtMoney->execute();

            // Recupera o valor do moneyId
            $money = $stmtMoney->fetch(\PDO::FETCH_ASSOC);

            // Verifica se há um valor encontrado
            if ($money) {
                // Atribui o valor à variável doacoes_moneyValue
                $doacoes_moneyValue = $money['amount'];
            } else {
                // Caso não haja um valor encontrado, atribui um valor padrão ou faça o tratamento adequado
                $doacoes_moneyValue = 'Valor não disponível';
            }
        } else {
            // Caso não haja moneyId associado à doação, atribui um valor padrão ou faça o tratamento adequado
            $doacoes_moneyValue = 'Sem valor associado';
        }

        // Consulta SQL para obter o somatório dos valores da coluna 'amount' na tabela 'money'
        $sqlTotalAmount = "SELECT SUM(amount) AS totalAmount FROM money";
        $stmtTotalAmount = $db->query($sqlTotalAmount);
        $totalAmount = $stmtTotalAmount->fetch(\PDO::FETCH_ASSOC)['totalAmount'];

        // Consulta SQL para obter o somatório dos valores da coluna 'estimed_value' na tabela 'items'
        $sqlTotalAmountEstimated = "SELECT SUM(estimed_value) AS totalAmountEstimed, GROUP_CONCAT(description) AS descriptions FROM items";
        $stmtTotalAmountEstimated = $db->query($sqlTotalAmountEstimated);
        $totalAmountEstimatedResult = $stmtTotalAmountEstimated->fetch(\PDO::FETCH_ASSOC);
        $totalAmountEstimed = $totalAmountEstimatedResult['totalAmountEstimed'];
        $descriptions = $totalAmountEstimatedResult['descriptions'];

        // Extrair a última descrição
        $descriptionArray = explode(',', $descriptions);
        $lastDescription = end($descriptionArray);


        // Consulta SQL para obter o nome do doador
        $sqlDonorName = "SELECT donorName FROM donors WHERE id = :donorId";
        $stmtDonorName = $db->prepare($sqlDonorName);
        $stmtDonorName->bindValue(':donorId', $doacao['donorId']);
        $stmtDonorName->execute();

        // Recupera o nome do doador
        $donorName = $stmtDonorName->fetch(\PDO::FETCH_ASSOC);
        $doacoes_donorName = $donorName ? $donorName['donorName'] : 'Nome do doador não disponível';

        if ($doacao['donatedItemType'] == 'ApplianceItem') {
            $name_item = 'Eletrodoméstico';
        }
        if ($doacao['donatedItemType'] == 'ClothingItem') {
            $name_item = 'Roupas';
        }
        if ($doacao['donatedItemType'] == 'GenericItem') {
            $name_item = 'Outros';
        }
        if ($doacao['donatedItemType'] == 'FoodItem') {
            $name_item = 'Alimentação';
        }
        if ($doacao['donatedItemType'] == 'DrinkItem') {
            $name_item = 'Bebidas';
        }
        if ($doacao['donatedItemType'] == 'FurnitureItem') {
            $name_item = "Móvel";
        }
        if ($doacao['donatedItemType'] == 'Money') {
            $name_item = 'Valor Monetário';
        }

        // Criação das variáveis
        $vars = [
            'name' => 'Visualizar doação',
            'doacoes_id' => $doacao['id'],
            'doacoes_donorId' => $doacao['donorId'],
            'doacoes_donatedItemType' => $name_item,
            'doacoes_donatedItemReferenceId' => $doacao['donatedItemReferenceId'],
            'doacoes_donationDate' => $doacao['donationDate'],
            'doacoes_moneyId' => $doacao['moneyId'],
            'doacoes_moneyValue' => $doacoes_moneyValue,
            'doacoes_donatedName' => $doacoes_donorName,
            'total_doacoes_dinheiro' => $totalAmount,
            'total_doacoes_estimado' => $totalAmountEstimed,
            'descricao_item' => $descriptions,
            'ultimo_item' => $lastDescription,
        ];

        $content = View::render('Pages/DonationListVew', $vars);

        return parent::getPage('Visualizar doação', $content);
    }
}