<?php

namespace App\Algorithm;

class Rotation
{
    // Problem
    // Given an array, rotate the array to the right by k steps, where k is non-negative
    public function handle()
    {
        $array = [1,2,3,4,5]; // [ 5, 4, 3, 1, 2 ]
        $k = 3;
        if (count($array) < 1) return $array;
        $k = $k % count($array);

        $rs = array_reverse($array);
        $result = array_splice($rs,  0, $k);

        $rser = array_reverse($array);
        $da = array_splice($rser, ($k), (count($array)));

        return array_merge($result, array_reverse($da));
    }
}
