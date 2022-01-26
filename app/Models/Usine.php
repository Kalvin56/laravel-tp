<?php

namespace App\Models;

class Usine
{
    public function __construct(){}

    public static function fabriquer($name){
        $object = '';
        if($name == 'Renault'){
            $object = new Renault('Scenic', '10 000');
        }else if($name == 'Opel'){
            $object = new Opel('Corsa', '15 000');
        }
        return $object;
    }
}
