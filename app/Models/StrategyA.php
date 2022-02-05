<?php

namespace App\Models;

class StrategyA implements Strategy
{
    public function getTva(): int
    {
        return 20;
    }
}

?>