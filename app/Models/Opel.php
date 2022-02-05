<?php

namespace App\Models;

class Opel extends Voiture{

    private $marque = 'Opel';

    public function __construct($name, $prix){
        parent::__construct($name, $prix);
    }

    public function getMarque(){
        return $this->marque;
    }
}

?>