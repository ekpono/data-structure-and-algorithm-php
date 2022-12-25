<?php

namespace App\Algorithm;

class Palindrome
{
    public function handle()
    {
        $string = 'caacs';

        return $this->optimalSolution($string);
    }

    public function optimalSolution($string)
    {
        $startPointer = 0;
        $lastPointer = strlen($string)-1;

        while ($startPointer <= $lastPointer) {
            if ($string[$startPointer] !== $string[$lastPointer]) return false;
            $startPointer++;
            $lastPointer--;
        }
        return true;
    }

    public function bruteForce($string): bool
    {
        return strcmp($string, strrev($string)) === 0;
    }
}
