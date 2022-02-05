<?php

namespace App\Models;

class Opel extends Voiture{

    public function __construct($name, $prix){
        parent::__construct('Opel', $name, $prix);
    }

    public function getOptions(){
        return "Autopilot, Android auto";
    }
}

?>