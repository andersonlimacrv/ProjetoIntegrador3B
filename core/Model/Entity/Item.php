<?php

namespace App\Model\Entity;

namespace App\Model\Entity;

class Item
{
    private $id;
    private $name;
    private $description;

    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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