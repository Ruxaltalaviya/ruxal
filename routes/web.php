<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.home');
})->name('home');
Route::get('/about', function () {
    return view('layout.about');
})->name('about');
Route::get('/contact', function () {
    return view('layout.contact');
})->name('contact');
Route::get('/event', function () {
    return view('layout.event');
})->name('event');
Route::get('/store', function () {
    return view('layout.store');
})->name('store');

