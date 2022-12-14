<?php

namespace App\Algorithm;

class TwoSum
{
    public function handle()
    {
        $array = [1, 2, 3, 4, 5];
        $targetValue = 3;

//        return $this->bruteForceSolution($array, $targetValue);
        return $this->optimalSolution($array, $targetValue);
    }

    public function optimalSolution($array, $targetValue): array
    {
        $hashTable = [];
        for( $i = 0; $i < count($array); $i++) {
            $neededValue = $targetValue - $array[$i];
            if (array_key_exists($neededValue, $hashTable)) {
                return [$i, $hashTable[$neededValue]];
            }else {
                $hashTable[$array[$i]]=$i;
            }
        }

        return[];
    }

    /**
     * @return array|int[]
     */
    protected function bruteForceSolution($array, $tv): array
    {
        $result = [];

        for ($bigI = 0; $bigI < (count($array) - 1); $bigI++) {
            for ($i = 0; $i < (count($array) - 1); $i++) {
                if ($array[$bigI] + $array[$i + 1] === $tv) {
                    return [$bigI, $i + 1];
                }
            }
        }

        return $result;
    }
}
