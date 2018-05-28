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
    if (session()->has('id')) {
        return redirect('/principal');
    }

    $wrong = null;
    if(session()->has('wrong')){
        $wrong = session('wrong');
        session()->flush();
    }

    return view('index', ['wrong' => $wrong]);
});

Route::get('/registro', function () {
    if (session()->has('id')) {
        return redirect('/principal');
    }
    $countries = pais::all();
    return view('registro', ['countries' => $countries]);
});

Route::get('/perfil', function () {
    if (!session()->has('id')) {
        return redirect('/');
    }
    return view('perfil');
});

Route::get('/movie', function () {
    if (!session()->has('id')) {
        return redirect('/');
    }
    return view('movie');
});

Route::get('/principal', function () {
    if (!session()->has('id')) {
        return redirect('/');
    }
    return view('principal');
});

Route::get('/reseña', function () {
    if (!session()->has('id')) {
        return redirect('/');
    }
    return view('reseña');
});

Route::get('/reseña/id', function () {
    if (!session()->has('id')) {
        return redirect('/');
    }
    return view('reseñaID');
});

Route::get('/configuracion', function () {
    if (!session()->has('id')) {
        return redirect('/');
    }
    $countries = pais::all();

    $user = User::where('id', session('id'))->first(['email']);

    return view('configuracion', ['countries' => $countries, 'userMail' => $user->email]);
});

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $pass = $request->input('pass');

    $login = User::login($email, $pass);

    if($login!=null){
        session(['id' => $login->id]);
        session(['name' => $login->name]);
        return redirect('/principal');
    }

    session(['wrong' => 1]);
    return redirect('/');
});

Route::post('/signin', function (Request $request){

    $name = $request->input('nombre');
    $email = $request->input('email');
    $pass = $request->input('pass');
    $fechaNacimiento = $request->input('birthdayDate');
    $idPais = $request->input('pais');

    User::signInUser($name, $email, $pass, $fechaNacimiento, $idPais);

    $login = User::login($email, $pass);

    if($login!=null){
        session(['id' => $login->id]);
        session(['name' => $login->name]);
        return redirect('/principal');
    }
});

Route::any('/logout', function (Request $request) {
    session()->flush();
    return redirect('/');
});

Route::post('/action/setting', function(Request $request) {
    $name = $request->input('nombre');
    User::changeName(session('id'), $name);
    $user = User::where('id', session('id'))->first(['name']);
    session(['name' => $user->name]);

    return redirect('/configuracion');
});

Route::post('/action/setting/img', function(Request $request) {
    if(!$request->img->isValid())
        return 'error';

    $photoName = time().$request->img->getClientOriginalName().'.'.$request->img->getClientOriginalExtension();
    $photoName = $request->img->move(public_path('storage'), $photoName);

    $byteArray = file_get_contents($photoName);
    User::changeImg(session('id'), $byteArray, $request->img->getClientOriginalExtension());

    unlink($photoName);

    return redirect('/configuracion');
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

    if(!$img || !$img->img) return redirect('/img/user.ico');

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

