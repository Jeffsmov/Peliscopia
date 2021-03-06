<!Doctype html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/principalstyle.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

@component('navbar', [  'idUser' => session('id'),
                        'nameUser' => session('name')])
@endcomponent

<!-- Header -->
    <header class="container main-header ">
        <div class="jumbotron">
            <div class="row">
                <img class="img-responsive col-md-2 hidden-xs hidden-sm" src="/img/Logo Peliscopia.png">
                <h3 class="col-md-10">Da tu opinion, se un experto en cine en la comunidad m&aacute;s grande en latinoamerica!</h3>
            </div>
            <div class="row text-center">
                <a class="btn btn-danger pull-right col-md-2 col-xs-offset-right-1 text-center">Crea una reseña</a>
            </div>
        </div>
    </header>
<!-- Fin Header -->

<!-- Content -->
    <div class="container-fluid text-center">    
        <div class="row content">

            <div class="col-sm-2 sidenav">
                <p>Newest movies</p>
                @php
                $sideLinks = App\pelicula::orderBy('fecha', 'desc')->take(5)->get();
                foreach($sideLinks as $sideLink){
                @endphp
                    <p><a href="/movie/{{$sideLink->id}}">{{$sideLink->name}}</a></p>
                @php } @endphp
            </div>

            <div class="col-sm-offset-1 col-sm-6 col-sm-offset-right-1 text-left row"> 

                <div class="col-xs-offset-1 hidden-xl hidden-lg hidden-md hidden-sm"></div>
                {{-- Reviews y comentarios --}}
                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    @php
                    if(isset($reviews) && $reviews!=null){
                    foreach($reviews as $review){
                        @endphp
                        @component('reseñaPreview', [   'pelicula' => App\pelicula::find($review->idPeli),
                                                        'review' => $review,
                                                        'autor' => App\User::find($review->idUser),
                                                        'comentarios' => App\comentario::where('idReview',$review->id)->take(2)->get()])
                        @endcomponent
                    @php } } @endphp
                </div>
            </div>

            <div class="col-sm-offset-0 col-sm-2 hidden-xs sidenav">
                <div class="well">
                    <p>YOUR ADS HERE</p>
                </div>
                <div class="well">
                    <p>ANOTHER ADS</p>
                </div>
            </div>
        </div>
    </div>
<!-- Content -->

<!-- Footer -->
    <footer class="container-fluid footer text-center">
        <span>Peliscopia &copy;</span>
    </footer>
<!-- Footer -->

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/thisReview.js"></script>

</body>
</html>