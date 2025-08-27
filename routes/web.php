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

Route::get('/read-team-&-hethical-hacking', function () {
    return view('read_team_and_hethical_hacking');
});

Route::get('/alineamiento-legal', function () {
    return view('alineamiento_legal');
});

Route::get('/implementacion-sgsi', function () {
    return view('implementacion_sgsi');
});

Route::get('/analisis_de_riesgos', function () {
    return view('analisis_de_riesgos');
});