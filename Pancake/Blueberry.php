<?php

require_once 'Souce.php';
require_once 'SouceTypes.php';

class Blueberry extends SouceTypes
{
    public string $souce = "blueberry";

    public function getSouce(): string
    {
        return $this->souce;
    }

}