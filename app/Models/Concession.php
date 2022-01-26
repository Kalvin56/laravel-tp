<?php

namespace App\Models;

class Concession{
    private $voitures = [];

    public function __construct(){}

    public static function addVoiture($voiture){
        $voitures[] = $voiture;
    }

    public function getVoitures(){
        return $this->voitures;
    }

}

?>