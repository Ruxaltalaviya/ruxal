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
Route::get('/blog', function () {
    return view('layout.blog');
})->name('blog');

