<?php

require_once 'Souce.php';
require_once 'SouceTypes.php';

class Cocoa extends SouceTypes
{
    public string $souce = "cocoa";

    public function getSouce(): string
    {
        return $this->souce;
    }

}