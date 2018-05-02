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

Route::get('/movie', function () {
    return view('movie');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/reseña', function () {
    return view('reseña');
});

Route::get('/configuracion', function () {
    return view('configuracion');
});

Route::post('/login', function () {
    return redirect('/principal');
});

Route::get('/close', function () {
    return redirect('/');
});

Route::get('/reseña2', function () {
    return view('shit/principal');
});