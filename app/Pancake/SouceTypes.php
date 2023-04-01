<?php

namespace App\Pancake;

use Exception;

class SouceTypes implements Souce
{
    public array $types = ["cocoa", "blueberry"];
    public string $souce = "";


    /** @throws Exception  */
    public function create(string $userType): ?SouceTypes//self
    {
        foreach ($this->types as $type) {
            if($type === $userType) {
                if ($type === "cocoa") {
                    return new Cocoa();
                } elseif ($type === "blueberry") {
                    return new Blueberry();
                }
            } else {
                throw new Exception("Unsupported type!");
            }
        }
        return null;
    }

    public function getSouce(): string
    {
        return $this->souce;
    }

    public function make($souce)
    {
        return "fill with " . $souce;
    }

}