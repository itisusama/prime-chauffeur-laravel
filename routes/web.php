<?php

use Illuminate\Support\Facades\Route;

// views
Route::view('/', 'frontend.index')->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/blog', 'frontend.blog')->name('blog');
