<?php

use Illuminate\Support\Facades\Route;

// views
Route::view('/home', 'frontend.index')->name('home');
Route::view('/about', 'frontend.about')->name('about');
