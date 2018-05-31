@php
$fav = (App\favorito::where([['idPeli',$pelicula->id], ['idUser', session('id')]])->first()) ? 'red-color' : 'grey-color';
@endphp
<!Doctype html>
<html>
<head>
    <title>Nombre</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/movie.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->
    
    <meta name="page" content="{{$page}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
@component('navbar', [  'idUser' => session('id'),
                        'nameUser' => session('name')])
@endcomponent

<!-- Header -->
    <header class="container main-header ">
        <!-- 
        <div class="jumbotron">
            <div class="row">
                <img class="img-responsive col-md-2 hidden-xs hidden-sm" src="/img/Logo Peliscopia.png">
                <h3 class="col-md-10">Da tu opinion, se un experto en cine en la comunidad m&aacute;s grande en latinoamerica!</h3>
            </div>
            <div class="row">
                <a class="btn btn-danger pull-right col-md-2 col-xs-offset-right-1 text-center">Crea una reseña&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span></a>
            </div>
        </div>
        -->
    </header>
<!-- Fin Header -->

<!-- Content -->
    <div class="container-fluid text-center main-container">    

        <div class="row">

        <!-- Información de la pelicula -->

            <div class="col-sm-3 ">
                <div class="col-md-12" align="center">
                    <img src="/pelicula/portada/{{$pelicula->id}}" class="img-responsive img-movie" alt="Responsive image">
                </div>
                <div class="col-md-12">
                    <br>
                    <p class="text-center"><strong><a href="/movie/{{$pelicula->id}}" class="stronger">{{$pelicula->name}}</a></strong></p>
                    <p class="text-center"><em>{{$pelicula->des}}</em></p>
                </div>

                <div class="col-md-12 text-center">
                    <ul class="list-unstyled list-inline">
                        <input type="hidden" value="{{$pelicula->id}}">
                        <span id="fav" class="glyphicon glyphicon-heart {{$fav}}"></span>
                    </ul>
                </div>                
                <div class="col-md-12 text-center">
                    <label for="reviewScore">Score</label>
                    <input type="hidden" value="{{$pelicula->id}}">
                    <select class="form-control" name="score" id="reviewScore">
                    @php
                        $sco = App\score::where([['idPeli',$pelicula->id], ['idUser', session('id')]])->first();
                        $j = ($sco) ? $sco->score : 0;
                        for ($i=0;$i<=5;$i++) {
                        @endphp 
                            <option value="{{$i}}" {{($j==$i) ? 'selected="selected"' : ''}}>
                                {{($i==0) ? 'Sin calificacion' : $i}}
                            </option> 
                        @php
                        }
                    @endphp
                    </select> 
                </div>                
                <div class="col-md-12 text-center">
                    <br>
                </div>

            </div>

        <!-- Información de la pelicula -->

        <!-- Reseña -->

            <div class="col-sm-7 text-left"> 

                <div class="col-xs-offset-1 hidden-xl hidden-lg hidden-md hidden-sm"></div>
                
            <!-- Reseña -->

                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    @php
                    if(isset($reviews) && $reviews!=null){
                    foreach($reviews as $review){
                        @endphp
                        @component('reseñaFromUser', [  'pelicula' => $pelicula,
                                                        'review' => $review,
                                                        'autor' => App\User::find($review->idUser),
                                                        'comentarios' => App\comentario::where('idReview',$review->id)->take(2)->get()])
                        @endcomponent
                    @php } } @endphp
                </div>            

                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    @php
                    for($i=1;$i<=$count;$i++){
                    @endphp
                    <a href="/movie/{{$pelicula->id}}/{{$i}}">{{$i}}</a>
                    @php } @endphp
                </div>  

            </div>

        <!-- Reseñas -->

        <!-- ADS -->
            <div class="col-sm-offset-0 col-sm-2 hidden-xs sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        <!-- ADS -->

        </div>

        <br>

    </div>
<!-- Content -->

<!-- Footer -->
    <footer class="container-fluid footer text-center navbar-fixed-bottom">
        <span>Peliscopia &copy;</span>
    </footer>
<!-- Footer -->

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/thisReview.js"></script>
    

</body>
</html>