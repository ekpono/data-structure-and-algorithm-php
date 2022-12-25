<?php

namespace App\Algorithm;

class PowerSubset
{
    public $output = [];

    public function handle()
    {
        $nums = [1, 2, 4];

        return $this->powerSet($nums);
    }

    public function powerSet($nums)
    {
        $this->helper($nums,0, []);
        return $this->output;
    }
    public function helper($nums, $i, $subset): void
    {
        if ($i === count($nums)) {
            $this->output[] = array_slice($subset, 0);
            return;
        }
        $this->helper($nums, $i + 1, $subset);
        $subset[] = $nums[$i];
        $this->helper($nums, $i + 1, $subset);
        array_pop($subset);
    }
}
