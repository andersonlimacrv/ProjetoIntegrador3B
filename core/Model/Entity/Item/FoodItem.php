<?php

use App\Model\Entity\Item;

class FoodItem extends Item
{
    /**
     * @var string $type Tipo da bebida (exemplo: refrigerante, suco, água)
     */
    private $type;

    /**
     * @var float|int $quantity Quantidade da bebida (em litros, mililitros, etc.)
     */
    private $quantity;

    /**
     * @var string $unit Unidade de medida da quantidade da bebida (exemplo: litros, ml)
     */
    private $unit;

    /**
     * @var DateTime|null $expiryDate Data de validade da bebida
     */
    private $expiryDate;

    /**
     * @var string $ingredients Ingredientes da bebida
     */
    private $ingredients;

    /**
     * @var array $allergens Alergenos presentes na bebida
     */
    private $allergens;

    /**
     * @var string $taste Sabor da bebida
     */
    private $taste;

    /**
     * @var bool $isPerishable Indica se a bebida é perecível ou não
     */
    private $isPerishable;


    public function __construct($id, $description, $type, $quantity, $unit, $expiryDate, $ingredients, $allergens, $taste, $isPerishable)
    {
        parent::__construct($id, $description);
        $this->type = $type;
        $this->quantity = $quantity;
        $this->unit = $unit;
        $this->expiryDate = $expiryDate;
        $this->ingredients = $ingredients;
        $this->allergens = $allergens;
        $this->taste = $taste;
        $this->isPerishable = $isPerishable;
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

    public function getAllergens()
    {
        return $this->allergens;
    }

    public function setAllergens($allergens)
    {
        $this->allergens = $allergens;
    }

    public function getTaste()
    {
        return $this->taste;
    }

    public function setTaste($taste)
    {
        $this->taste = $taste;
    }

    public function getIsPerishable()
    {
        return $this->isPerishable;
    }

    public function setIsPerishable($isPerishable)
    {
        $this->isPerishable = $isPerishable;
    }
}
