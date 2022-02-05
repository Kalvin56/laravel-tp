<?php

namespace App\Models;

abstract class Voiture{
    private $name;
    private $prix;
    private $marque;

    public function __construct($marque, $name, $prix){
        $this->marque = $marque;
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

    public function getMarque(){
        return $this->marque;
    }

    public function getClass(): Object{
        return $this;
    }

    public function getText(){
        return $this->getClass()->getOptions();
    }
}

?>