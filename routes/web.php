<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $solution = (new \App\Algorithm\Palindrome())->handle();

    return response()->json([
       'data' => $solution,
       'message' => 'Successfully fetched'
    ]);
});
