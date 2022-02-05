<?php

namespace App\Models;

class ConcessionIterateur{
    private $offset = 0;
    private $collection;

    public function __construct($collection){
        $this->collection = $collection;
    }

    public function current(){
        return $this->collection->getVoitures()[$this->offset];
    }

    public function next(){
        $this->offset++;
    }

    public function hasNext(){
        $length = $this->collection->getNbVoitures();
        $off = $this->offset + 1;
        return $off <= $length;
    }


}

?>