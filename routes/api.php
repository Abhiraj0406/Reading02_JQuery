<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;

// API Routes for Readings
Route::get('/indexapi', [ReadingController::class, 'getReadings']);
Route::post('/storeapi', [ReadingController::class, 'storeReading']);
Route::post('/editapi',[ReadingController::class, 'editReading']);
Route::delete('/deleteapi/{id}', [ReadingController::class, 'deleteReading']);
