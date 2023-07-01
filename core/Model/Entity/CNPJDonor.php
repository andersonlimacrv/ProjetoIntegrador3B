<?php

namespace App\Model\Entity;

class CNPJDonor
{
private $id;
private $cnpj;
private $name;

public function __construct($id, $cnpj, $name)
{
$this->id = $id;
$this->cnpj = $cnpj;
$this->name = $name;
}

public function getId()
{
return $this->id;
}

public function getCNPJ()
{
return $this->cnpj;
}

public function setCNPJ($cnpj)
{
$this->cnpj = $cnpj;
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