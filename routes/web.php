<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;

// Home route - Redirect to Readings Index
Route::get('/', function () {
    return redirect('/index');
});

// Web Routes for Blade Templates
Route::get('/', [ReadingController::class, 'showIndex'])->name('index');
Route::get('/create', [ReadingController::class, 'create'])->name('create');
Route::get('/edit/{reading}', [ReadingController::class, 'edit'])->name('edit');