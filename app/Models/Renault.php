<?php

namespace App\Models;

class Renault extends Voiture{

    public function __construct($name, $prix){
        parent::__construct($name, $prix);
    }
}

?>