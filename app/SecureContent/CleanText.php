<?php

namespace App\SecureContent;

class CleanText
{
    public function cleanText(String $input): array|string|null
    {
        return preg_replace("/[^a-z0-9A-Z,@]/","", $input);
    }
}