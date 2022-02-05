<?php
    namespace App\Models;

    class Sujet{

        private $observeurs = [];
    
        public function __construct(){}

        public function notify(){
            echo "Sujet: Notifie les observeurs...\n";
            foreach ($this->observeurs as $observeur) {
                $observeur->update($this);
            }
        }

        public function addObs($obs){
            $this->observeurs[] = $obs;
        }

        public function removeObs($obs){
            foreach ($this->observeurs as $key => $observeur) {
                if(get_class($observeur) == get_class($obs)){
                    echo "Sujet : suppression class : ".get_class($obs);
                    unset($this->observeurs[$key]);
                }
            }
        }

    }
?>