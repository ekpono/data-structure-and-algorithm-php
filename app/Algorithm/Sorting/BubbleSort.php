<?php

namespace App\Algorithm\Sorting;

class BubbleSort
{
    /**
     * You are given an array of integers.
     * Write a function that will take this array
     * as input and return the sorted array using
     * Bubble sort.
     * @return array
     */
    public function handle()
    {
        $a = [4,3,5,6,2]; //
        $sorted = false;
        $counter = 0;

        while (! $sorted) {
            $sorted = true;
            for ($i = 0; $i < count($a)-1-$counter; $i++) {
                if ($a[$i] > $a[$i + 1]) {
                    $a = $this->swap($a, $i);
                    $sorted = false;
                }
            }
            $counter++;
        }

        return $a;
    }

    public function swap($array, $i)
    {
        $temp = $array[$i];
        $array[$i] = $array[$i + 1];
        $array[$i+1] = $temp;
        return $array;
    }
}
