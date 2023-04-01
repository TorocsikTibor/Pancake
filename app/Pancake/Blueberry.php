<?php

namespace App\Pancake;

class Blueberry extends SouceTypes
{
    public string $souce = "blueberry";

    public function getSouce(): string
    {
        return $this->souce;
    }

}