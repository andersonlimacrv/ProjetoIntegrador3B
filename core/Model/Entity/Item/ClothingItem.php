<?php

use App\Model\Entity\Item;

class ClothingItem extends Item
{
    private $type;
    private $color;
    private $condition;
    private $size;
    private $gender;
    private $ageRange;
    private $estimatedValue;

    public function __construct($id, $name, $description, $type, $color, $condition, $size, $gender, $ageRange, $estimatedValue)
    {
        parent::__construct($id, $name, $description);
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
