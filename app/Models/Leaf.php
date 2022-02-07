<?php

namespace App\Models;

class Leaf extends Component
{

    private $text = "";
    private $prix = 0;

    public function __construct($text, $prix = 0)
    {
        $this->text = $text;
        $this->prix = $prix;
    }


    public function operation(): string
    {
        return $this->prix."€";
    }
}

?>