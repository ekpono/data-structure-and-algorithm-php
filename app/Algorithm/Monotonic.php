<?php

namespace App\Algorithm;

class Monotonic
{
    public function handle()
    {
        // [2, 4, 6, 7, 20 ] Non-decreasing ( Monotonic Increasing )
        // [20, 19, 10, 9 ] Non-increasing ( Monotonic Decreasing )
        $array = [2, 4, 6, 7, 20 ];

        return $this->checkMonotonic($array);
    }

    public function checkMonotonic($array): bool
    {
        $first = $array[0];
        $last = $array[count($array) - 1];
        if ( $first === $last ) {
            for ($i = 0; $i > (count($array) - 1); $i++) {
                if ($array[$i] !== $array[$i + 1]) return false;
            }
        }
        if ( $first > $last ) {
            for ($i = 0; $i > (count($array) - 1); $i++) {
                if ($array[$i] > $array[$i+1]) return false;
            }
        }

        if ( $first < $last ) {
            for ($i = 0; $i < (count($array) - 1); $i++) {
                if ($array[$i] < $array[$i + 1]) return false;
            }
        }
        return true;
    }
}
