<?php

namespace App\Algorithm;

class Isomorphic
{
    public function handle()
    {
        /**
         * #Rules
         * 1. No two characters may map into the same character
         * 2. Preserve the order of character
         * 3. A character may map to itself
         * 4. String and target must be ascii character
         */

        $string = 'abacus';
        $target = 'rirfgs';

        return $this->optimalSolution($string, $target);

    }

    public function optimalSolution($string, $target)
    {
        if (strlen($string) !== strlen($target)) return false;

        return true;
    }
}
