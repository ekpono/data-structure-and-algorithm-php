<?php

namespace App\Algorithm;

class SquareNumbers
{
    public function handle()
    {
        $array = [3,1,2,7 ];
        $result = [];

        foreach ( $array as $key => $i) {
            $result[$key] = pow($i, 2);
        }

        sort($result);
        return $result;
    }
}
