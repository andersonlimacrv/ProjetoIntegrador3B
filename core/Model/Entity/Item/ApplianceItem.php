<?php

use App\Model\Entity\Item;

class ApplianceItem extends Item
{
    /**
     * Marca do eletrodoméstico
     *
     * @var string
     */
    private $brand;

    /**
     * Modelo do eletrodoméstico
     *
     * @var string
     */
    private $model;

    /**
     * Potência do eletrodoméstico
     *
     * @var float
     */
    private $power;

    /**
     * Tensão do eletrodoméstico
     *
     * @var int
     */
    private $voltage;

    /**
     * Indica se o eletrodoméstico precisa de reparo
     *
     * @var bool
     */
    private $needsRepair;

    public function __construct($id, $description, $brand, $model, $power, $voltage, $needsRepair)
    {
        parent::__construct($id, $description);
        $this->brand = $brand;
        $this->model = $model;
        $this->power = $power;
        $this->voltage = $voltage;
        $this->needsRepair = $needsRepair;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }

    public function getVoltage()
    {
        return $this->voltage;
    }

    public function setVoltage($voltage)
    {
        $this->voltage = $voltage;
    }

    public function getNeedsRepair()
    {
        return $this->needsRepair;
    }

    public function setNeedsRepair($needsRepair)
    {
        $this->needsRepair = $needsRepair;
    }
}
