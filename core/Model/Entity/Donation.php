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
        $estimed_value = $formData['estimatedValue'];
        $currency = $formData['currency'];
        $amount = $formData['amount'];
        $brand = $formData['brand'];
        $model = $formData['model'];
        $power = $formData['power'];
        $voltage = $formData['voltage'];
        $needsRepair = $formData['needsRepair'];
        $type = $formData['type'];
        $foodTaste = $formData['taste'];
        $ingredients = $formData['ingredients'];
        $expiryDate = $formData['expiryDate'];
        $unit = $formData['unit'];
        $quantity = $formData['quantity'];
        $foodIsPerishable = $formData['isPerishable'];
        $isAlcoholic = $formData['isAlcoholic'];
        $isCarbonated = $formData['isCarbonated'];
        $clothingColor = $formData['color'];
        $condition = $formData['condition'];
        $clothingSize = $formData['size'];
        $clothingGender = $formData['gender'];
        $clothingAgeRange = $formData['ageRange'];
        $weight = $formData['weight'];
        $usage = $formData['usage'];
        $dimensions = $formData['dimensions'];
        $material = $formData['material'];
        $allergens = $formData['allergens'];



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
            } else if ($donatedItemType === 'ApplianceItem') {
                // Inserir na tabela items
                $stmt = $db->prepare("INSERT INTO items (item_type, description, estimed_value) VALUES (?, ?, ?)");
                $stmt->execute([$donatedItemType, $description, $estimed_value]);
                $item_id = $db->lastInsertId();

                // Inserir appliance_items - ELETRODOMÉSTICO:
                $stmt = $db->prepare("INSERT INTO appliance_items (item_id, brand, model, power, voltage, needsRepair) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$item_id, $brand, $model, $power, $voltage, $needsRepair]);
                $donatedItemReferenceId = $db->lastInsertId();
            } else if ($donatedItemType === 'ClothingItem') {

                // Inserir na tabela items
                $stmt = $db->prepare("INSERT INTO items (item_type, description, estimed_value) VALUES (?, ?, ?)");
                $stmt->execute([$donatedItemType, $description, $estimed_value]);
                $item_id = $db->lastInsertId();
                // Inserir na tabela clothing_items
                $stmt = $db->prepare("INSERT INTO clothing_items (item_id, type, color, condition, size, gender, age_range) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$item_id, $type, $clothingColor, $condition, $clothingSize, $clothingGender, $clothingAgeRange]);
                $donatedItemReferenceId = $db->lastInsertId();
            } else if ($donatedItemType === 'GenericItem') {

                // Inserir na tabela items
                $stmt = $db->prepare("INSERT INTO items (item_type, description, estimed_value) VALUES (?, ?, ?)");
                $stmt->execute([$donatedItemType, $description, $estimed_value]);
                $item_id = $db->lastInsertId();

                //Inserir generic_items - VEICULO:
                $stmt = $db->prepare("INSERT INTO generic_items (item_id, description) VALUES (?, ?)");
                $stmt->execute([$item_id, $description]);
                $donatedItemReferenceId = $db->lastInsertId();
            } else if ($donatedItemType === 'FoodItem') {

                // Inserrir na tabela items
                $stmt = $db->prepare("INSERT INTO items (item_type, description, estimed_value) VALUES (?, ?, ?)");
                $stmt->execute([$donatedItemType, $description, $estimed_value]);
                $item_id = $db->lastInsertId();

                // Inserir na tabela food_items
                $stmt = $db->prepare("INSERT INTO food_items (item_id, type, quantity, unit, expiry_date, ingredients, allergens, taste, is_perishable) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$item_id, $type, $quantity, $unit, $expiryDate, $ingredients, $allergens, $foodTaste, $foodIsPerishable]);
                $donatedItemReferenceId = $db->lastInsertId();
            } else if ($donatedItemType === 'DrinkItem') {

                // Inserir na tabela items
                $stmt = $db->prepare("INSERT INTO items (item_type, description, estimed_value) VALUES (?, ?, ?)");
                $stmt->execute([$donatedItemType, $description, $estimed_value]);
                $item_id = $db->lastInsertId();

                // Inserir na tabela drink_items
                $stmt = $db->prepare("INSERT INTO drink_items (item_id, type, quantity, unit, expiry_date, ingredients, is_carbonated, is_alcoholic) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$item_id, $type, $quantity, $unit, $expiryDate, $ingredients, $isCarbonated, $isAlcoholic]);
                $donatedItemReferenceId = $db->lastInsertId();
            } else if ($donatedItemType === 'FurnitureItem') {

                // Inserir na tabela items
                $stmt = $db->prepare("INSERT INTO items (item_type, description, estimed_value) VALUES (?, ?, ?)");
                $stmt->execute([$donatedItemType, $description, $estimed_value]);
                $item_id = $db->lastInsertId();

                // Inserir na tabela furniture_items
                $stmt = $db->prepare("INSERT INTO furniture_items (item_id, brand, material, condition, dimensions, weight, usage) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$item_id, $brand, $material, $condition, $dimensions, $weight, $usage]);
                $donatedItemReferenceId = $db->lastInsertId();
            } else {
            }

            // Inserir doação na tabela donations
            $donationDate = date('Y-m-d');
            $stmt = $db->prepare("INSERT INTO donations (donorId, donatedItemType, donatedItemReferenceId, donationDate, moneyId) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$donorId, $donatedItemType, $donatedItemReferenceId, $donationDate, $moneyId]);
            $item_id = $db->lastInsertId();


            $db->commit();
            echo "Doação salva com sucesso!";
        } catch (\PDOException $e) {
            $db->rollBack();
            echo "Erro ao salvar a doação: " . $e->getMessage();
        }
    }
}
