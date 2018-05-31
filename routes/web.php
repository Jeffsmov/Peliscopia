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
        $reviews = review::orderBy('created_at', 'desc')->take(5)->get();
        return view('principal', ['reviews' => $reviews]);
    });


//-- Perfil - Movie --//
    Route::get('/perfil/{id}/{page?}', function ($id, $page = 1) {
        if (!session()->has('id')) {
            return redirect('/');
        }
        $user = User::find($id);
        if($user==null)
            return redirect('/');

        $reviews = review::where('idUser', $id)->skip(($page-1)*10)->take(10)->get();
        $count = intval(review::where('idUser', $id)->count()/10) + 1;

        return view('perfil',['user' => $user,
                              'reviews' => $reviews,
                              'page' => $page,
                              'count' => $count]);
    });

    Route::get('/movie/{id}/{page?}', function ($id, $page=1) {
        if (!session()->has('id')) {
            return redirect('/');
        }
        $pelicula = pelicula::find($id);
        if($pelicula==null)
            return redirect('/');

        $reviews = review::where('idPeli', $id)->skip(($page-1)*10)->take(10)->get();
        $count = intval(review::where('idPeli', $id)->count()/10) + 1;

        return view('movie',[ 'pelicula' => $pelicula,
                              'reviews' => $reviews,
                              'page' => $page,
                              'count' => $count]);
    });


//-- Search --//
    Route::get('/search/{page}', function($page, Request $request){
        if (!session()->has('id')) {
            return redirect('/');
        }
        $users = null;
        $peliculas = null;
        $count = 0;

        
        $from = ($request->input('from')==null && $request->input('from')!="" 
            && $request->input('to')==null && $request->input('to')!="") ? '' : $request->input('from');

        $to = ($request->input('from')==null && $request->input('from')!="" 
            && $request->input('to')==null && $request->input('to')!="") ? '' : $request->input('to');

        $value = ($request->input('value')==null) ? "" : $request->input('value');
        $what = $request->input('what');

        if($what==7){
            $users = User::where('name', 'like', '%'.$value.'%')->skip(($page-1)*10)->take(10)->get();
            $count = intval($users->count()/10) + 1;
        }
        else{
            $peliculas = pelicula::getSearch($value, $what, $from, $to, $page);
            $count = intval($peliculas->count()/10) + 1;
        }
        
        return view('busqueda', ['users' => $users,
                                 'peliculas' => $peliculas,
                                 'count' => $count,
                                 'page' => $page,
                                 'value' => $value,
                                 'what' => $what,
                                 'from' => $from,
                                 'to' => $to]);
    });


//-- Reseñas --//
    Route::get('/reseña', function (Request $request) {
        if (!session()->has('id')) {
            return redirect('/');
        }

        return view('reseña');
    });

    Route::get('/reseña/{id}/{page?}', function ($id, $page = 1) {

        //comentario::addComentario($id, session('id'), 'Oh Fuck');

        if (!session()->has('id')) {
            return redirect('/');
        }

        $reseña = review::find($id);
        if($reseña==null)
            return redirect('/');
        
        $pelicula = pelicula::find($reseña->idPeli);
        $autor = User::find($reseña->idUser);
        $comentarios = comentario::where('idReview', $reseña->id)->skip(($page-1)*10)->take(10)->get();
        $count = intval(comentario::where('idReview', $reseña->id)->count()/10) + 1;
        return view('reseñaID', ['pelicula' => $pelicula,
                                 'autor' => $autor,
                                 'review' => $reseña,
                                 'comentarios' => $comentarios,
                                 'page' => $page,
                                 'count' => $count
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

    Route::get('/configuracion/admin', function () {
        if (!session()->has('id')) {
            return redirect('/');
        }
        if(!session('tipo')==1)
            return redirect('/');

        return view('confiAdmin');
    });

    Route::post('/login', function (Request $request) {
        $email = $request->input('email');
        $pass = $request->input('pass');

        $login = User::login($email, $pass);

        if($login!=null){
            session(['id' => $login->id]);
            session(['name' => $login->name]);
            session(['tipo' => $login->tipoUsuario]);
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

        if($idReview==null){
            return redirect("/reseña?er=1");
        }

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

    Route::post('/action/config/admin', function(Request $request) {
        if (!session()->has('id')) {
            return;
        }
        if(!session('tipo')==1)
            return;

        if(!$request->por->isValid())
            return 'error';        
        if(!$request->ban->isValid())
            return 'error';

        $pelicula = pelicula::addPelicula($request->titulo, $request->fecha, $request->des, $request->cat);

        $photoName = time().$request->por->getClientOriginalName().'.'.$request->por->getClientOriginalExtension();
        $photoName = $request->por->move(public_path('storage'), $photoName);
        $byteArray = file_get_contents($photoName);
        pelicula::setPortada($pelicula->id, $byteArray, $request->por->getClientOriginalExtension());
        unlink($photoName);

        $photoName2 = time().$request->ban->getClientOriginalName().'.'.$request->ban->getClientOriginalExtension();
        $photoName2 = $request->ban->move(public_path('storage'), $photoName2);
        $byteArray2 = file_get_contents($photoName2);
        pelicula::setBanner($pelicula->id, $byteArray2, $request->ban->getClientOriginalExtension());
        unlink($photoName2);

        return redirect("/movie/$pelicula->id");
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

    Route::post('/action/like', function(Request $request) {
        if (session()->has('id')) {
            $review = $request->input('review');
            $id = session('id');

            like::addLike($review, $id);
            $yeah = like::countLikes($review);
            return response()->json([
                                'count' => $yeah
                            ]);
        }
    });

    Route::post('/action/fav', function(Request $request) {
        if (session()->has('id')) {
            $idPeli = $request->input('peli');
            $id = session('id');

            favorito::addFavorito($idPeli, $id);
            return 'true';
        }
        return 'false';
    });

    Route::post('/action/score', function(Request $request) {
        if (session()->has('id')) {
            $movie = $request->input('peli');
            $score = $request->input('score');
            $id = session('id');

            score::addScore($movie, $id, $score);
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
