<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('items', App\Http\Controllers\Api\ItemController::class);
Route::apiResource('customers', App\Http\Controllers\Api\CustomerController::class);
