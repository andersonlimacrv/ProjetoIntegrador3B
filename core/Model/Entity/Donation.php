<?php

namespace App\Model\Entity;

class Donation
{
    /**
     * Classe Donation
     *
     * Representa uma doação feita por um indivíduo ou organização.
     *
     * @property int $id O identificador único da doação.
     * @property string $donatedBy A entidade (indivíduo ou organização) que fez a doação.
     * @property mixed $donatedItem O item doado como parte da doação.
     * @property \DateTime $donationDate A data e hora em que a doação foi feita.
     */

    private $id;
    private $donatedBy;
    private $donatedItem;
    private $donationDate;

    public function __construct($id, $donatedBy, $donatedItem)
    {
        $this->id = $id;
        $this->donatedBy = $donatedBy;
        $this->donatedItem = $donatedItem;
        $this->donationDate = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDonatedBy()
    {
        return $this->donatedBy;
    }

    public function setDonatedBy($donatedBy)
    {
        $this->donatedBy = $donatedBy;
    }

    public function getDonatedItem()
    {
        return $this->donatedItem;
    }

    public function setDonatedItem($donatedItem)
    {
        $this->donatedItem = $donatedItem;
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
