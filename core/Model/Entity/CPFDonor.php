<?php

namespace App\Model\Entity;

class CPFDonor
{
    private $id;
    private $cpf;
    private $name;

    public function __construct($id, $cpf, $name)
    {
        $this->id = $id;
        $this->cpf = $cpf;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
