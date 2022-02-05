<?php

namespace App\Models;

class Renault extends Voiture{

    private $marque = 'Renault';

    public function __construct($name, $prix){
        parent::__construct($name, $prix);
    }

    public function getMarque(){
        return $this->marque;
    }
}

?>