<?php

namespace App\Algorithm;

class GroupAnagram
{
    /**
     * Group Anagrams - Given an array of strings consisting of lower case English
     * letters, group the anagrams together.
     * You can return the answer in any order.
     * An Anagram is a word or phrase formed by rearranging the
     * letters of a different word or phrase, using all
     * the original letters exactly once.
     *
     * @return array
     */
    public function handle()
    {
        $hashTable = [];
        $array = ['eat', 'tea', 'tan', 'ate', 'nat', 'bat', 'tab'];
        $sortedArray = array_map(function ($arr) {
            $split = str_split($arr);
            sort($split);
            return implode('',$split);
        }, $array);
        $count = count($array);

        for  ($i = 0; $i < $count; $i++) {
            $hashTable[$sortedArray[$i]][] = $array[$i];
        }

        return array_values($hashTable);
    }
}
