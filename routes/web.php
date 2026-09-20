<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{name?}/{npm?}/{kelas?}', [ProfileController::class, 'profile'])->name('profile');