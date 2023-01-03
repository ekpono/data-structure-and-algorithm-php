<?php

namespace App\Algorithm;

class FindFirstAndLastPosition
{
    public $range = [-1, -1];
    /**
     * Find First and Last Position of Element in
     * Sorted Array-You are given an array of
     * integers sorted in non-decreasing order,
     * find the starting and ending position of a given
     * target value. If target is not found in the array,
     * return [-1, -1]. You must write an algorithm with O(log n)
     * runtime complexity.
     */
    public function handle()
    {
        $array = [3, 3, 3, 3, 4, 4, 4, 5];
        $target = 3;

        return $this->searchForRangeIterative($array, $target);
    }

    /**
     * @throws \Exception
     */
    public function searchForRangeIterative($array, $target): array
    {
        $leftExtreme = $this->findLeftExtremeIterative($array, $target);
        $rightExtreme = $this->findRightExtremeIterative($array, $target);

        return [$leftExtreme, $rightExtreme];
    }

    public function searchForRangeRecursion($array, $target)
    {
        $this->findLeftExtremeRecursion($array, $target, 0, (count($array) - 1));
        $this->findRightExtremeRecursion($array, $target, 0, (count($array) - 1));
        return $this->range;
    }

    /**
     * @throws \Exception
     */
    private function findLeftExtremeIterative($array, $target)
    {
        $left = 0;
        $right = count($array) - 1;

        while ( $left <= $right ) {
            $middle = floor(($right + $left) / 2);
            if ($target === $array[$middle]) {
                if ($middle == 0 ) return 0;
                if ($target == $array[$middle-1]) {
                    $right = $middle - 1;
                }
                else return $middle;
            }else if ($target < $array[$middle]) {
                $right = $middle -1;
            }else $left = $middle + 1;
        }
        return -1;
    }

    private function findRightExtremeIterative($array, $target)
    {
        $left = 0;
        $right = count($array) - 1;
        while ($left <= $right ) {
            $middle = floor(($left+$right) / 2);

            if ($target == $array[$middle]) {
                if ($middle == count($array)-1) return $middle;
                if ($array[$middle-1] == $target) $left = $middle +1;
                else return $middle;
            }else if ($target < $array[$middle]) {
                $right = $middle-1;
            }else $left = $middle + 1;
        }
        return $middle;
    }

    private function findLeftExtremeRecursion($array, $target, $left, $right)
    {
        if ( $left > $right ) return;

        $middle = floor(($left + $right) / 2);

        if ($middle == 0 ) {
            return $this->range[0] = 0;
        }
        if ($array[$middle-1 ] == $target) {
            if ($array[$middle] == $target) {
                $this->findLeftExtremeRecursion($array, $target, $left, $middle-1);
            }else $this->range[0] = $middle;
        }else if ($target < $array[$middle]) {
            $this->findLeftExtremeRecursion($array, $target, $left, $middle-1);
        }else $this->findLeftExtremeRecursion($array, $target, $middle+1, $right);
    }

    private function findRightExtremeRecursion($array, $target, $left = 0, $right = 0)
    {
        if ( $left > $right ) return;

        $middle = floor(($left+$right) / 2);
        if ($array[$middle] === $target) {
            if ($middle == count($array)-1) $this->range[1] = $middle;
            else if ( $target === $array[$middle+1]){
                $this->findRightExtremeRecursion($array, $target, $this->range, $middle+1, $right);
            }else $this->range[1] = $middle;
        }else if ($target < $array[$middle]) {
            $this->findRightExtremeRecursion($array, $target, $left, $middle -1);
        }else {
            $this->findRightExtremeRecursion($array, $target,$middle -1, $right);
        }
    }
}
