<?php

require_once 'Souce.php';


class SouceTypes implements Souce
{
    public array $types = ["cocoa", "blueberry"];
    public string $souce = "";

    public function create(string $userType): SouceTypes//self
    {
        foreach ($this->types as $type) {
            if($type === $userType) {
                if ($type === "cocoa") {
                    return new Cocoa();
                } elseif ($type === "blueberry") {
                    return new Blueberry();
                }
            }
        }
        //return null;
        return new Cocoa();
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