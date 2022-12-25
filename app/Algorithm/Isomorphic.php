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

        $string = 'aaca';
        $target = 'bbdr';

        return $this->optimalSolution($string, $target);
    }

    public function optimalSolution(string $string, string $target) : array|bool
    {
        if (strlen($string) !== strlen($target)) return false;

        $stringHash = [];
        $targetSet = [];

        for ($i = 0; $i < strlen($string); $i++) {
            if (array_key_exists($string[$i], $stringHash)) {
                if ($stringHash[$string[$i]] === $target[$i]) {
                    continue;
                }else {
                    return false;
                }
            }elseif (array_key_exists($target[$i], $targetSet)){
                if($targetSet[$target[$i]] === $target[$i]) {
                    continue;
                }else {
                    return false;
                }
            }else {
                $stringHash[$string[$i]] = $target[$i];
                $targetSet[$target[$i]] = $string[$i];
            }
        }

        return true;
    }
}
