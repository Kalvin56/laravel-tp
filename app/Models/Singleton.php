<?php

namespace App\Models;

class Singleton 
{
    private $count;

    private static $_instance=NULL;

    public function __construct(){
        $this->count = 0;
    }

    public function getCount(){
        return $this->count;
    }

    public static function getInstance() {
   
        if(is_null(self::$_instance)) {
            self::$_instance = new Singleton();  
        }

        return self::$_instance;
    }

    public function increment(){
        $this->count++;
        return $this->count;
    }
}
