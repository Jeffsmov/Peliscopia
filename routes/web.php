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

use App\User;
use App\pais;
use App\pelicula;
use App\review;
use App\trailer;
use App\comentario;
use App\like;
use App\score;
use App\favorito;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


Route::get('/', function () {
    return view('index');
});

Route::get('/registro', function () {
    $countries = pais::all();
    return view('registro', ['countries' => $countries]);
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

Route::get('/reseña/id', function () {
    return view('reseñaID');
});

Route::get('/configuracion', function () {
    $countries = pais::all();
    return view('configuracion', ['countries' => $countries]);
});

Route::post('/login', function () {
    return redirect('/principal');
});

Route::get('/close', function () {
    return redirect('/');
});

Route::get('/upload', function() {
    return view('upload');
});

Route::get('/pelicula/{whichImg}/{id}', function($whichImg, $id, Response $response){
    $img = null;

    if($whichImg=='portada')    $img = pelicula::getPortada($id);
    if($whichImg=='banner')     $img = pelicula::getBanner($id);

    if(!$img || !$img->img) return;

    $response->header('Content-Type', 'image/'.$img->ext);
    $response->setContent($img->img);
    return $response;
});

Route::get('/user/img/{id}', function($id, Response $response){
    $img = null;
    $img = User::getPerfilImg($id);

    if(!$img || !$img->img) return;

    $response->header('Content-Type', 'image/'.$img->ext);
    $response->setContent($img->img);
    return $response;
});

Route::post('/upload', function(Request $request) {
    if(!$request->img->isValid())
        return 'error';

    $photoName = time().$request->img->getClientOriginalName().'.'.$request->img->getClientOriginalExtension();
    $photoName = $request->img->move(public_path('storage'), $photoName);

    $byteArray = file_get_contents($photoName);
    pelicula::setBanner(1, $byteArray, $request->img->getClientOriginalExtension());

    unlink($photoName);

    return redirect('/pelicula/portada/1');
});



//-- auto-completado --//


    Route::any('/get/paises', function(Request $request){
        $nombre = $request->request->get('query');
        return pais::getPaisesLike($nombre); //response()->json($paises)
    });

    Route::any('/get/peliculas', function(Request $request){
        $nombre = $request->request->get('query');
        return pelicula::getPeliculasLike($nombre);
    });

