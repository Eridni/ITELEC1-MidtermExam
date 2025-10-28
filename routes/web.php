<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/gallery', function () {
    return view('gallery');
});