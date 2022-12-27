<?php

namespace App\Algorithm;

class SearchRotatedSortedArray
{
    /**
     * You are given an integer array nums sorted in ascending order
     * (with distinct values). Prior to being passed to your
     * function, nums is possibly rotated at an unknown
     * pivot index k (1 <= k < nums.length) such that
     * the resulting array is
     * [nums[k], nums[k+1], ..., nums[n-1], nums[0], nums[1], ..., nums[k-1]] (0-indexed).
     * For example, [0,1,2,4,5,6,7] might be rotated at pivot index 3 and become [4,5,6,7,0,1,2].
     * Given an integer target, return the index of target if it is in the array, else return -1.
     * You must write an algorithm with O(log n) runtime complexity.
     */
    public function handle()
    {
        $array = [ 5, 6, 7, 8, 9, 1, 2, 3, 4 ];
        $target = 1;
        $left = 0;
        $right = count($array) - 1;

        while ( $left <= $right ) {
            $middle = floor(($left+$right) / 2);
            if ( $target === $array[$middle] ) return $middle;
            if ( $array[$left] <= $array[$middle] ) {
                if ($target >= $array[$left] && $target < $array[$middle]) {
                    $right = $middle - 1;
                }else {
                    $left = $middle + 1;
                }
            } else {
                if ($target <= $array[$right] && $target > $array[$middle]) {
                    $left = $middle + 1;
                }else {
                    $right = $middle - 1;
                }
            }
        }
        return -1;
    }
}
