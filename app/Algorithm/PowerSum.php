<?php

namespace App\Algorithm;

class PowerSum
{
    public function handle()
    {

        $array = [1,2,[3,4],[[2]], [[[3]]]];

        return $this->powerSum($array);
    }

    public function powerSum($array, $power=1)
    {
        $sum = 0;

        foreach ($array as $item) {
            if(is_array($item)) {
                $sum += $this->powerSum($item, $power + 1);
            }else {
                $sum += $item;
            }
        }
        return pow($sum, $power);
    }
}
