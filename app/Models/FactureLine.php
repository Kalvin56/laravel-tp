<?php
    namespace App\Models;

    class FactureLine{

        private $voiture;
        private $strategy;
    
        public function __construct($voiture){
            $this->voiture = $voiture;
            if($voiture->getMarque() == 'Opel'){
                $this->strategy = new StrategyA();
            }else if($voiture->getMarque() == 'Renault'){
                $this->strategy = new StrategyB();
            }
        }

        public function getTva(){
            return $this->strategy->getTva();
        }
    }
?>