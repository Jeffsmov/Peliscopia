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


//-- Index-Home --//
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

    Route::get('/principal', function () {
        if (!session()->has('id')) {
            return redirect('/');
        }
        return view('principal');
    });


//-- Perfil - Movie --//
    Route::get('/perfil/{id}', function ($id) {
        if (!session()->has('id')) {
            return redirect('/');
        }
        $user = User::find($id);
        if($user==null)
            return redirect('/');

        return view('perfil',['user' => $user]);
    });

    Route::get('/movie/{id}', function ($id) {
        if (!session()->has('id')) {
            return redirect('/');
        }
        $pelicula = pelicula::find($id);

        return view('movie',['pelicula' => $pelicula]);
    });


//-- Search --//

    Route::get('/search/{page}', function($page, Request $request){
        if (!session()->has('id')) {
            return redirect('/');
        }
        $fecha = ($request->input('fecha')==null) ? '0000-00-00' : $request->input('fecha');
        $categoria = ($request->input('categoria')==null) ? 0 : $request->input('categoria');
        $value = ($request->input('value')==null) ? 0 : $request->input('value');
        $what = $request->input('what');

        $result = ($what==1) ? pelicula::getSearch($page, $categoria, $fecha) : User::where('name', 'like', $value)->skip($page*10)->take(10)->get(['name', 'id']);
        return ($what==1) ? view('searchMovie') : view('searchUser');
    });


//-- Reseñas --//
    Route::get('/reseña', function () {
        if (!session()->has('id')) {
            return redirect('/');
        }
        return view('reseña');
    });

    Route::get('/reseña/{id}', function ($id) {

        //comentario::addComentario($id, session('id'), 'Oh Fuck');

        if (!session()->has('id')) {
            return redirect('/');
        }

        $reseña = review::find($id);
        if($reseña==null)
            return redirect('/');
        
        $pelicula = pelicula::find($reseña->idPeli);
        $autor = User::find($reseña->idUser);
        $comentarios = comentario::where('idReview', $reseña->id)->get();
        return view('reseñaID', ['pelicula' => $pelicula,
                                 'autor' => $autor,
                                 'review' => $reseña,
                                 'comentarios' => $comentarios
                                ]
                   );
    });


//-- Login/Signin/Logout/Config --//
    Route::get('/configuracion', function () {
        if (!session()->has('id')) {
            return redirect('/');
        }
        $countries = pais::all();

        $user = User::find(session('id'));

        return view('configuracion', ['countries' => $countries, 'userMail' => $user->email,
                                        'twitter' => $user->twitter,
                                        'facebook' => $user->facebook,
                                        'bio' => $user->bio]);
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


//-- Action --//

    Route::post('/action/setting', function(Request $request) {
        if (!session()->has('id')) {
            return;
        }

        $name = $request->input('nombre');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $bio = $request->input('bio');
        User::changeInfo(session('id'), $name, $facebook, $twitter, $bio);
        $user = User::where('id', session('id'))->first(['name']);
        session(['name' => $user->name]);

        return redirect('/configuracion');
    });

    Route::post('/action/review', function(Request $request) {
        if (!session()->has('id')) {
            return;
        }
        $title = $request->input('title');
        $review = $request->input('review');
        $score = $request->input('score');

        $idPeli = pelicula::where('name', $title)->first(['id'])->id;
        $idReview = review::addReview(session('id'), $idPeli, $score, $review);

        return redirect("/reseña/$idReview");
    });

    Route::post('/action/setting/img', function(Request $request) {
        if (!session()->has('id')) {
            return;
        }
        if(!$request->img->isValid())
            return 'error';

        $photoName = time().$request->img->getClientOriginalName().'.'.$request->img->getClientOriginalExtension();
        $photoName = $request->img->move(public_path('storage'), $photoName);

        $byteArray = file_get_contents($photoName);
        User::changeImg(session('id'), $byteArray, $request->img->getClientOriginalExtension());

        unlink($photoName);

        return redirect('/configuracion');
    });

    Route::post('/action/comment', function(Request $request) {
        if (session()->has('id')) {
            $content = $request->input('content');
            $review = $request->input('review');
            $id = session('id');

            $com = comentario::addComentario($review, $id, $content);
            $comDate = date('Y-m-d', strtotime($com->created_at));
            return response()->json([
                                'com' => $com,
                                'date' => $comDate,
                                'name' => session('name')
                            ]);
        }
    });


//-- Get Img --//
    Route::get('/pelicula/{whichImg}/{id}', function($whichImg, $id, Response $response){
        $img = null;

        if($whichImg=='portada')    $img = pelicula::getPortada($id);
        if($whichImg=='banner')     $img = pelicula::getBanner($id);

        if(!$img || !$img->img) return redirect('/img/Logo Peliscopia.png');

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