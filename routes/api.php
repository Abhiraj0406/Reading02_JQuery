<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;

// API Routes for Readings
Route::post('/indexapi', [ReadingController::class, 'getReadings'])->name('indexapi');
Route::post('/storeapi', [ReadingController::class, 'storeReading'])->name('storeapi');
Route::post('/editapi',[ReadingController::class, 'editReading'])->name('editapi');
Route::delete('/deleteapi/{id}', [ReadingController::class, 'deleteReading']);
