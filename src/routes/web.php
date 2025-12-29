<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('products', 'dashboard')
    ->middleware(['auth'])
    ->name('products');

Route::view('cart', 'dashboard')
    ->middleware(['auth'])
    ->name('cart');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
