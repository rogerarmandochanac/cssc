<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/nosotros', function () {
    return view('nosotros');
});


Route::get('/diagnostico-360', function () {
    return view('diagnostico');
});