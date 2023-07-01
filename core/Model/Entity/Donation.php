<?php

namespace App\Model\Entity;

class Donation
{
    private $id;
    private $donateBy;
    private $amount;
    private $item;
    private $donationDate;

    public function __construct($id, $donateBy, $amount, $item)
    {
        $this->id = $id;
        $this->donateBy = $donateBy;
        $this->amount = $amount;
        $this->item = $item;
        $this->donationDate = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDonateBy()
    {
        return $this->donateBy;
    }

    public function setDonateBy($donateBy)
    {
        $this->donateBy = $donateBy;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }

    public function getDonationDate()
    {
        return $this->donationDate;
    }

    public function setDonationDate($donationDate)
    {
        $this->donationDate = $donationDate;
    }
}
