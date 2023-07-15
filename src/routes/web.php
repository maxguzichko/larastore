<?php

use Illuminate\Support\Facades\Route;

Route::get('/store', [Maxguzichko\Larastore\Http\Controllers\MainController::class, 'index'])->name('larastore.home');
