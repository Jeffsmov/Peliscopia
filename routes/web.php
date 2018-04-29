<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/reseña', function () {
    return view('reseña');
});



Route::get('/principal_2', function () {
    return view('principal_2');
});

Route::get('/perfil_2', function () {
    return view('perfil_2');
});

Route::get('/principal_3', function () {
    return view('principal_3');
});

Route::get('/perfil_3', function () {
    return view('perfil_3');
});