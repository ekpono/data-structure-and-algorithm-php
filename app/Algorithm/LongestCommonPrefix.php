<?php

namespace App\Algorithm;

class LongestCommonPrefix
{
    public function handle()
    {
        $contents = ["flower","flow","flight"];
        $result = $contents[0];

        for ( $i = 0; $i < count($contents); $i++ ) {
            $str = $contents[$i];

            while (! str_starts_with($str, $result) ) {
                $result = substr($result, 0, strlen($result) - 1);
            }
        }
        return $result;

    }
}
