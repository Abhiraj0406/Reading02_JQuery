<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// <-------------------INDEX FOR <=READ-API=>-------------------> //
Route::get('/indexapi', [ReadingController::class, 'indexApi']);

// <-------------------INDEX FOR <=CREATE-API=>-------------------> //
Route::post('/storedata', [ReadingController::class, 'store'])->name('store');
