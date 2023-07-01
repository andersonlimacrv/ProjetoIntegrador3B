<?php

namespace App\Model\Entity;

class Money
{
    private $id;
    private $currency;
    private $amount;

    public function __construct($id, $currency, $amount)
    {
        $this->id = $id;
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
