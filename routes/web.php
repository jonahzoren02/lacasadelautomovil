<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/porque-elegirnos', function () {
    return view('porque-elegirnos');
})->name('porque-elegirnos');

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery');
