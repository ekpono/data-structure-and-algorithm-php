<?php

namespace App\Algorithm;

class Fibonacci
{
    public function handle()
    {
        return $this->fibonacci(40);
    }

    public function fibonacci($number)
    {
        if ( $number < 1 ) {
            return $number;
        }else {
            return $this->fibonacci($number - 1) + $this->fibonacci($number - 2);
        }

    }
}
