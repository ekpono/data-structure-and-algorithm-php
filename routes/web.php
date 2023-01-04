<?php

use App\Algorithm\LongestUniqueCharSubstring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $solution = (new \App\Algorithm\Sorting\BubbleSort())->handle();

    return response()->json([
       'data' => $solution,
       'message' => 'Successfully fetched'
    ]);
});
