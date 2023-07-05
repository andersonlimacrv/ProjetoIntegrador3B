<?php

namespace App\Model\Entity;

class Item
{
    private $id;
    private $description;

    public function __construct($id, $description)
    {
        $this->id = $id;
        /**
         * Descrição do item para cimples identificação Ex: Lata de Sardinha, Camiseta Rosa, etc.
         *
         * @var string
         */
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}

class ClothingItem extends Item
{
    // Adicione propriedades e métodos específicos para itens de roupa, se necessário
}

class ApplianceItem extends Item
{
    // Adicione propriedades e métodos específicos para itens de eletrodoméstico, se necessário
}

class FoodItem extends Item
{
    // Adicione propriedades e métodos específicos para itens de alimento, se necessário
}

class GenericItem extends Item
{
    // Adicione propriedades e métodos específicos para itens genéricos, se necessário
}

class DrinkItem extends Item
{
    // Adicione propriedades e métodos específicos para itens de alimento, se necessário
}
