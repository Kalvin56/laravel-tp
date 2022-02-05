<?php
    namespace App\Models;

    class Observeur2{

        private $count = 0;
    
        public function __construct(){}

        public function display(){
            echo "Observeur 2 / Notifications reçues : ".$this->count;
        }

        public function update(){
            $this->count++;
        }
    }
?>