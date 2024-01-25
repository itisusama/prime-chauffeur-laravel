<?php

use Illuminate\Support\Facades\Route;

// views
Route::view('/', 'frontend.index')->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/blog', 'frontend.blog')->name('blog');
Route::view('/singleblog', 'frontend.singleblog')->name('singleblog');
Route::view('/cars', 'frontend.cars')->name('cars');
Route::view('/booking', 'frontend.booking')->name('booking');
// Services Group
Route::group(['prefix' => 'services'], function () {
    Route::view('/airport', 'frontend.airport')->name('airport');
    Route::view('/wedding', 'frontend.wedding')->name('wedding');
    Route::view('/tours', 'frontend.tours')->name('tours');
    Route::view('/events', 'frontend.events')->name('events');
    Route::view('/business', 'frontend.business')->name('business');
});