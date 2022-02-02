<?php

namespace App\Models;

class Concession{
    private $voitures = [];
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function addVoiture($voiture){
        $this->voitures[] = $voiture;
    }

    public function getVoitures(){
        return $this->voitures;
    }

    public function getName(){
        return $this->name;
    }

    public function getNbVoitures(){
        return count($this->voitures);
    }

}

?>