<?php

namespace App\Algorithm;

class NonRepeatingCharacter
{
    public function handle()
    {
        $string = 'a123412a';

        for ($i = 0; $i < strlen($string); $i++) {
            $newString = substr_replace($string, '', $i, 1);
            if ($this->isRepeating($string[$i], $newString)) {
                return $i;
            }
        }
        return null;
    }

    public function isRepeating($unique, $string)
    {
        return ! str_contains($string, $unique);
    }
}
