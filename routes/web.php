<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('spanish');
})->name('Home'); 

Route::get('/ingles', function () {
    return view('ingles');
})->name('ingles'); 