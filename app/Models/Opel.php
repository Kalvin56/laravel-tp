<?php

namespace App\Models;

class Opel extends Voiture{

    public function __construct($name, $prix){
        parent::__construct($name, $prix);
    }
}

?>