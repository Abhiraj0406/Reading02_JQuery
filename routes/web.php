<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;

Route::get('/', function () {
    return view('welcome');
});

// <-------------------INDEX FOR READ------------------->//
Route::get('/index', [ReadingController::class, 'index'])->name('index');

// <-------------------INDEX FOR CREATE------------------->//
Route::view('/create', [ReadingController::class, 'create'])->name('create');

