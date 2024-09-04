<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('spanish');
})->name('Home'); 

Route::get('/ingles', function () {
    return view('ingles');
})->name('ingles'); 

Route::get('/login', function () {
    return view('login');
})->name('login'); 

Route::get('/register', function () {
    return view('register');
})->name('register'); 