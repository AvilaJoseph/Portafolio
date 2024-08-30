<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('spanish');
});

Route::get('/ingles', function () {
    return view('ingles');
});
