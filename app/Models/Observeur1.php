<?php
    namespace App\Models;

    class Observeur1{

        private $count = 0;
    
        public function __construct(){}

        public function display(){
            echo "Observeur 1 / Notifications reçues : ".$this->count;
        }

        public function update(){
            $this->count++;
        }
    }
?>