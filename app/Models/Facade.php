<?php
    namespace App\Models;

    class Facade{
    
        public function __construct(){}

        public static function commander(){
            $usine = new Usine();
            $v1 = $usine->fabriquer('Renault');
            $v2 = $usine->fabriquer('Opel');
            $concession = new Concession('Super Concession');
            $concession->addVoiture($v1);
            $concession->addVoiture($v2);
            $facture = new Facture();
            $facture->addVoiture($v1);
            $facture->addVoiture($v2);

            return [$usine, $concession, $facture];
        }
    }
?>