<?php

namespace App\Models;

abstract class Voiture{
    private $name;
    private $prix;

    public function __construct($name, $prix){
        $this->name = $name;
        $this->prix = $prix;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrix()
    {
        return $this->prix;
    }
}

?>