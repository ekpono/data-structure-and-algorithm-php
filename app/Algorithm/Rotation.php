<?php

namespace App\Algorithm;

class Rotation
{
    // Problem
    // Given an array, rotate the array to the right by k steps, where k is non-negative
    public function handle()
    {
        $arr = [1,2,3,4,5]; // [ 5, 4, 3, 1, 2 ]
        $k = 3;

        return iterator_to_array($this->rotate($arr, $k));
    }

    public function rotate(&$array, $step = 1)
    {
            $length = count($array);

            end($array);

            while ($step--)
                prev($array);

            while ($length--) {
                next($array);
                if (key($array) === null)
                    reset($array);

                yield current($array);
            }
    }
}
