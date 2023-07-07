<?php

namespace App\Model\Entity;

class Donation
{
    /**
     * Classe Donation
     *
     * Representa uma doação feita por um indivíduo ou organização.
     *
     * @property int $id O identificador único da doação.
     * @property string $donatedBy A entidade (indivíduo ou organização) que fez a doação.
     * @property mixed $donatedItem O item doado como parte da doação.
     * @property \DateTime $donationDate A data e hora em que a doação foi feita.
     */

    private $id;
    private $donatedBy;
    private $donatedItem;
    private $donationDate;

    public function __construct($id, $donatedBy, $donatedItem)
    {
        $this->id = $id;
        $this->donatedBy = $donatedBy;
        $this->donatedItem = $donatedItem;
        $this->donationDate = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDonatedBy()
    {
        return $this->donatedBy;
    }

    public function setDonatedBy($donatedBy)
    {
        $this->donatedBy = $donatedBy;
    }

    public function getDonatedItem()
    {
        return $this->donatedItem;
    }

    public function setDonatedItem($donatedItem)
    {
        $this->donatedItem = $donatedItem;
    }

    public function getDonationDate()
    {
        return $this->donationDate;
    }

    public function setDonationDate($donationDate)
    {
        $this->donationDate = $donationDate;
    }
    public function donationSave($formData, $db)
    {
        // Obter os dados do formulário
        $donorType = $formData['donorType'];
        $anonymousName = $formData['anonymousName'];
        $cpf = $formData['cpf'];
        $cpfName = $formData['cpfName'];
        $cnpj = $formData['cnpj'];
        $cnpjName = $formData['cnpjName'];
        $donatedItemType = $formData['donatedItemType'];
        $description = $formData['description'];
        $currency = $formData['currency'];
        $amount = $formData['amount'];
        $brand = $formData['brand'];
        $model = $formData['model'];
        $power = $formData['power'];
        $voltage = $formData['voltage'];
        $needsRepair = $formData['needsRepair'];


        echo "<pre>";
        print_r($formData);
        echo "</pre>";
        exit;

        // Inserir dados no banco de dados
        $db->beginTransaction();
        try {
            // Inserir doador anônimo ou criar um novo doador, se necessário
            if ($donorType === 'anonymous') {
                $stmt = $db->prepare("INSERT INTO donors (donorType) VALUES ('anonymous')");
                $stmt->execute();
                $donorId = $db->lastInsertId();

                // Inserir na tabela anonymous_donors
                $stmt = $db->prepare("INSERT INTO anonymous_donors (id) VALUES (?)");
                $stmt->execute();
            } else if ($donorType === 'cpf') {
                $stmt = $db->prepare("INSERT INTO donors (donorType, donorName) VALUES (?, ?)");
                $stmt->execute([$donorType, $cpfName]);
                $donorId = $db->lastInsertId();

                // Inserir na tabela cpf_donors
                $stmt = $db->prepare("INSERT INTO cpf_donors (id, donorName, cpf) VALUES (?, ?, ?)");
                $stmt->execute([$donorId, $cpfName, $cpf]);
            } else if ($donorType === 'cnpj') {

                $stmt = $db->prepare("INSERT INTO donors (donorType, donorName) VALUES (?, ?)");
                $stmt->execute([$donorType, $cnpjName]);
                $donorId = $db->lastInsertId();

                // Inserir na tabela cnpj_donors
                $stmt = $db->prepare("INSERT INTO cnpj_donors (id, companyName, cnpj) VALUES (?, ?, ?)");
                $stmt->execute([$donorId, $cnpjName, $cnpj]);
            }

            // Inserir item doado, se necessário
            if ($donatedItemType === 'Money') {
                $stmt = $db->prepare("INSERT INTO money (currency, amount) VALUES (?, ?)");
                $stmt->execute([$currency, $amount]);
                $moneyId = $db->lastInsertId();
                $donatedItemReferenceId = '';
            } else {
                $moneyId = '';
            }

            // Inserir doação na tabela donations
            $donationDate = date('Y-m-d');
            $stmt = $db->prepare("INSERT INTO donations (donorId, donatedItemType, donatedItemReferenceId, donationDate, moneyId) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$donorId, $donatedItemType, $donatedItemReferenceId, $donationDate, $moneyId]);

            //Inserir Item - ELETRODOMÉSTICO:

            if ($donorType === 'ApplianceItem') {
                $stmt = $db->prepare("INSERT INTO appliance_items (donorType) VALUES ('anonymous')");
                $stmt->execute();
                $donorId = $db->lastInsertId();

                // Inserir na tabela anonymous_donors
                $stmt = $db->prepare("INSERT INTO anonymous_donors (id) VALUES (?)");
                $stmt->execute();
            } else if ($donorType === '') {
            }




            $db->commit();
            echo "Doação salva com sucesso!";
        } catch (\PDOException $e) {
            $db->rollBack();
            echo "Erro ao salvar a doação: " . $e->getMessage();
        }
    }
}
