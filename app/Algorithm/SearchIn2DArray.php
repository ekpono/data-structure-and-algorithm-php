<?php

namespace App\Algorithm;

use Illuminate\Support\Facades\Log;

class SearchIn2DArray
{
    /**
     * Write an efficient algorithm that searches for a value target
     * in an m x n integer matrix. This matrix has the following properties:
     * Integers in each row are sorted from left to right.
     * The first integer of each row is greater than the last integer of the previous row.
     * If the value is there in the matrix return true, else false.
     * @return bool
     */
    public function handle()
    {
        $matrix = [
            [1, 5, 7, 11],
            [12,13,17,20],
            [25,26,30,31],
            [32,35,39,43],
            [45,60,62,65]
        ];
        $target = 1;

        $columns = count($matrix[0]);
        $row = count($matrix);

        $top = 0;
        $bottom = $row -1;
        $middle = null;

        while ( $top <= $bottom ) {
            $middle = floor(($top+$bottom)/2);
            if (count($matrix[$middle]) == 0) return false;
            if ($target < $matrix[$middle][0]) {
                $bottom = $middle-1;
            }elseif ($target > $matrix[$middle][$columns-1]) $top = $middle+1;
            else break;
        }

        if ($top > $bottom)return false;
        $left = 0;
        $right = $columns -1;

        while ($left <= $right) {
            $midValue = floor($left + $right / 2);
            if ($target === $matrix[$middle][$midValue]) return true;
            else if ($target < $matrix[$middle][$midValue])$right = $midValue -1;
            else $left = $midValue +1;
        }
        return false;
    }
}
