<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;

// Home route - Redirect to Readings Index
Route::get('/', function () {
    return redirect('/index');
});

// Web Routes for Blade Templates
Route::any('/', [ReadingController::class, 'showIndex'])->name('index');
Route::any('/create', [ReadingController::class, 'create'])->name('create');
Route::any('/edit/{reading}', [ReadingController::class, 'edit'])->name('edit');