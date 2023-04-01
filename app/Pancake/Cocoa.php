<?php

namespace App\Pancake;

class Cocoa extends SouceTypes
{
    public string $souce = "cocoa";

    public function getSouce(): string
    {
        return $this->souce;
    }

}