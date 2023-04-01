<?php

namespace App\Pancake;

class Pancake
{
    private const PASTA="basic";
//   private static $types = ["coca", "blueberry"];
    private string $size;
    public SouceTypes $souce;

    function __construct(SouceTypes $type, string $size = "medium") {
//      self::PASTA = "advanced";
        $this->souce = $type;
        $this->size = $size;
        //$this->souce = new SouceTypes();
    }

    public function getSouce(): SouceTypes
    {
        return $this->souce;
    }

    public function getPasta(): string {
        return self::PASTA;
    }

//    public static function getTypes(): array {
//        return self::$types;
//    }

    public function getSize(): string {
        return $this->size;
    }

}