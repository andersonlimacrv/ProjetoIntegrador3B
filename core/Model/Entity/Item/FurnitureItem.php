<?php

use App\Model\Entity\Item;

class FurnitureItem extends Item
{
    /**
     * @var string Marca do móvel (exemplo: Ikea, Tok&Stok)
     */
    private $brand;

    /**
     * @var string Material do móvel (exemplo: madeira, metal, plástico)
     */
    private $material;

    /**
     * @var string Condição do móvel (exemplo: novo, usado, danificado)
     */
    private $condition;

    /**
     * @var string Dimensões do móvel (exemplo: altura x largura x profundidade)
     */
    private $dimensions;

    /**
     * @var float Peso do móvel (exemplo: em quilogramas)
     */
    private $weight;

    /**
     * @var float Valor estimado do móvel (exemplo: 500.00, 1000.00)
     */
    private $estimatedValue;

    /**
     * @var string $usage Uso específico do móvel (exemplo: banheiro, cozinha, sala, geral)
     */
    private $usage;


    public function __construct($id, $description, $brand, $material, $condition, $dimensions, $weight, $estimatedValue, $usage)
    {
        parent::__construct($id, $description);
        $this->brand = $brand;
        $this->material = $material;
        $this->condition = $condition;
        $this->dimensions = $dimensions;
        $this->weight = $weight;
        $this->estimatedValue = $estimatedValue;
        $this->usage = $usage;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getEstimatedValue()
    {
        return $this->estimatedValue;
    }

    public function setEstimatedValue($estimatedValue)
    {
        $this->estimatedValue = $estimatedValue;
    }
    public function getUsage()
    {
        return $this->usage;
    }

    public function setUsage($usage)
    {
        $this->usage = $usage;
    }
}
