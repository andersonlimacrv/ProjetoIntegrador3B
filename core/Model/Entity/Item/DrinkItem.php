<?php

use App\Model\Entity\Item;

class DrinkItem extends Item
{
    /**
     * Tipo da bebida (ex: refrigerante, suco, água)
     *
     * @var string
     */
    private $type;

    /**
     * Quantidade da bebida
     *
     * @var float
     */
    private $quantity;

    /**
     * Unidade de medida da quantidade (ex: ml, l, oz)
     *
     * @var string
     */
    private $unit;

    /**
     * Data de validade da bebida
     *
     * @var DateTime
     */
    private $expiryDate;

    /**
     * Ingredientes da bebida
     *
     * @var array
     */
    private $ingredients;

    /**
     * Indica se a bebida é carbonatada (gaseificada)
     *
     * @var bool
     */
    private $isCarbonated;

    /**
     * Indica se a bebida é alcoólica
     *
     * @var bool
     */
    private $isAlcoholic;

    public function __construct($id, $name, $description, $type, $quantity, $unit, $expiryDate, $ingredients, $isCarbonated, $isAlcoholic)
    {
        parent::__construct($id, $name, $description);
        $this->type = $type;
        $this->quantity = $quantity;
        $this->unit = $unit;
        $this->expiryDate = $expiryDate;
        $this->ingredients = $ingredients;
        $this->isCarbonated = $isCarbonated;
        $this->isAlcoholic = $isAlcoholic;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function isCarbonated()
    {
        return $this->isCarbonated;
    }

    public function setCarbonated($isCarbonated)
    {
        $this->isCarbonated = $isCarbonated;
    }

    public function isAlcoholic()
    {
        return $this->isAlcoholic;
    }

    public function setAlcoholic($isAlcoholic)
    {
        $this->isAlcoholic = $isAlcoholic;
    }
}
