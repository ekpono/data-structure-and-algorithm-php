<?php

namespace App\Algorithm;

class LongestUniqueCharSubstring
{
    /**
     * Longest Unique char Substring -
     * Given a string s, find the length of the
     * longest substring without repeating characters.
     * @return int|mixed
     */
    public function handle()
    {

        $string = 'snckss';
        $max = 0;
        $start = 0;
        $seen = [];

        for ($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];

            if (array_key_exists($char, $seen)){
                $start = max($start, ($seen[$char]+1));
            }

            $max = max($max, ($i-$start+1));
            $seen[$char]=$i;
        }
        return $max;
    }
}
