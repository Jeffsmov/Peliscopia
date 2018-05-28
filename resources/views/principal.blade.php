<!Doctype html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/principalstyle.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->

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
                <p><a href="/">Link</a></p>
                <p><a href="/">Link</a></p>
                <p><a href="/">Link</a></p>
            </div>

            <div class="col-sm-offset-1 col-sm-6 col-sm-offset-right-1 text-left row"> 

                <div class="col-xs-offset-1 hidden-xl hidden-lg hidden-md hidden-sm"></div>
                {{-- Reviews y comentarios --}}
                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    @php
                    $review = 'Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el que desafía a todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.';
                    for($i=0;$i<1;$i++){
                        @endphp
                        @component('reseñaPreview', [   'peliculaId' => 1,
                                                        'peliculaName' => 'Ready Player One',
                                                        'reviewAutorId' => 2,
                                                        'reviewAutorName' => 'Jeffsmov',
                                                        'review' => $review,
                                                        'reviewFecha' => '2018-04-28',
                                                        'reviewRating' => 10,
                                                        'reviewLikeCounts' => 11,
                                                        'comentarios' => null])
                        @endcomponent
                    @php } @endphp
                </div>
            </div>

            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
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

</body>
</html>