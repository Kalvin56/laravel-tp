<?php

namespace App\Models;

class ConcessionIterateur{
    private $offset = 0;
    private $concession;

    public function __construct($concession){
        $this->concession = $concession;
    }

    public function next(){
        $this->offset++;
        return $this->concession[$this->offset];
    }

    public function hasNext(){
        $length = $this->concession->getNbVoitures();
        return $this->offset++ > $length;
    }


}

?>