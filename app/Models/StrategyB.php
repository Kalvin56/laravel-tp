<?php

namespace App\Models;

class StrategyB implements Strategy
{
    public function getTva(): int
    {
        return 10;
    }
}

?>