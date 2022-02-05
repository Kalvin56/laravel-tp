<?php
    namespace App\Models;

    interface Strategy
    {
        public function getTva(): int;
    }

?>