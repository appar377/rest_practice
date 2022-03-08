<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/v1/rest', RestController::class)->only([
    'index', 'store', 'destroy'
]);


Route::get('/hello', function() {
    return response()->json([
        'message' => 'Hello'
    ], 200);
});

