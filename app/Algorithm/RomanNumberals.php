<?php

namespace App\Algorithm;

class RomanNumberals
{
    public function handle($s)
    {
        $letters = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $result = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $current = $letters[$s[$i]];
            $prev    = $letters[$s[$i - 1]];

            $result += $current;

            if ($i > 0 && $current > $prev) {
                $result -= $prev*2;
            }
        }
        return $result;
    }
}
