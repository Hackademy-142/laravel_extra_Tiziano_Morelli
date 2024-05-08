<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home')->middleware('auth');

Route::get('/chirp/edit/{chirp}', [PublicController::class, 'edit'])->name('edit')->middleware('auth');

Route::get('/profile/showProfile', [PublicController::class, 'showProfile'])->name('showProfile')->middleware('auth');

