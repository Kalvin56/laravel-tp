<?php
    namespace App\Models;

    class Facture{

        private $montant = 0;
    
        public function __construct(){}

        public function addVoiture($voiture){
            $price = $voiture->getPrix();
            $this->montant += $price;
        }

        public function getMontant(){
            return $this->montant;
        }

    }
?>