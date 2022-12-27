<?php

namespace App\Algorithm;

class BinarySearch
{
    /**
     * Binary Search - Given an array of integers which is
     * sorted in ascending order, and a target integer,
     * write a function to search for whether the target
     * integer is there in the given array. If it is there
     * then return its index. Otherwise, return -1.
     * You must write an algorithm with O(log n) runtime complexity.
     */

    public function handle()
    {
        $nums = [ 20, 40, 50, 60, 70, 80, 90, 100 ];
        $target = 50;

        return $this->recursiveSolution($nums, $target);
    }

    protected function recursiveSolution($nums, $target)
    {
        return $this->helper($nums, $target, 0, count($nums));
    }

    public function helper($nums, $target, $left, $right)
    {
        if ( $left > $right ) return -1;
        $middle = floor(($left+$right)/2);
        if ($target === $nums[$middle]) return $middle;
        else if ( $target < $nums[$middle] ) return $this->helper($nums, $target, $left, $middle-1);
        else return $this->helper($nums, $target, $middle + 1, $right);
    }

    /**
     * @param array $nums
     * @param int $target
     * @return float|int
     */
    protected function iterativeSolution(array $nums, int $target): int|float
    {
        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right) {
            $middle = floor($left + $right / 2);
            if ($target === $nums[$middle]) return $middle;
            if ($target < $nums[$middle]) $right = $middle - 1;
            else $left = $middle + 1;
        }

        return -1;
    }
}
