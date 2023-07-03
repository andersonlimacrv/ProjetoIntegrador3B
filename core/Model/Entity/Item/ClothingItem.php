<?php

use App\Model\Entity\Item;

class ClothingItem extends Item
{
    /**
     * Tipo de roupa (exemplo: camiseta, calça, vestido)
     *
     * @var string
     */
    private $type;

    /**
     * Cor da roupa (exemplo: vermelho, azul, preto)
     *
     * @var string
     */
    private $color;

    /**
     * Condição da roupa (exemplo: nova, usada, desgastada)
     *
     * @var string
     */
    private $condition;

    /**
     * Tamanho da roupa (exemplo: P, M, G)
     *
     * @var string
     */
    private $size;

    /**
     * Gênero da roupa (exemplo: masculino, feminino, unissex)
     *
     * @var string
     */
    private $gender;

    /**
     * Faixa etária da roupa (exemplo: infantil, adulto, idoso)
     *
     * @var string
     */
    private $ageRange;

    /**
     * Valor estimado da roupa (exemplo: 50.00, 100.00)
     *
     * @var float
     */
    private $estimatedValue;

    public function __construct($id, $description, $type, $color, $condition, $size, $gender, $ageRange, $estimatedValue)
    {
        parent::__construct($id, $description);
        $this->type = $type;
        $this->color = $color;
        $this->condition = $condition;
        $this->size = $size;
        $this->gender = $gender;
        $this->ageRange = $ageRange;
        $this->estimatedValue = $estimatedValue;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getAgeRange()
    {
        return $this->ageRange;
    }

    public function setAgeRange($ageRange)
    {
        $this->ageRange = $ageRange;
    }

    public function getEstimatedValue()
    {
        return $this->estimatedValue;
    }

    public function setEstimatedValue($estimatedValue)
    {
        $this->estimatedValue = $estimatedValue;
    }
}
