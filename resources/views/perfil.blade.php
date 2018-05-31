<!Doctype html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/perfil.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->    
    
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

        <!-- Perfil del usuario -->

            <div class="col-sm-3 ">
                <div class="col-md-12" align="center">
                    <img src="/user/img/{{$user->id}}" title="{{$user->name}}" class="img-responsive img-perfil" alt="Responsive image">
                </div>
                <div class="col-md-12">
                    <br>
                    <p class="text-center"><strong>{{$user->name}}</strong></p>
                    <p class="text-center"><em>{{$user->bio}}</em></p>
                </div>

                <div class="col-md-12 text-center">
                    <ul class="list-unstyled list-inline">
                        @php
                        if($user->facebook!=null || $user->facebook!=''){
                        @endphp
                        <li>
                            <a href="https://www.facebook.com/{{$user->facebook}}" target="_blank"><i class="fa fa-facebook-square social-icons"></i></a>
                        </li>
                        @php } @endphp
                        @php
                        if($user->twitter!=null || $user->twitter!=''){
                        @endphp
                        <li>
                            <a href="https://twitter.com/{{$user->twitter}}" target="_blank"><i class="fa fa-twitter-square social-icons"></i></a>
                        </li>
                        @php } @endphp
                    </ul>
                </div>
            </div>

        <!-- Perfil de Usuario -->

        <!-- Reseña -->

            <div class="col-sm-7 text-left"> 

                <div class="col-xs-offset-1 hidden-xl hidden-lg hidden-md hidden-sm"></div>


            <!-- Reseñas -->
                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">

                    @php
                    if(isset($reviews) && $reviews!=null){
                    foreach($reviews as $review){
                        @endphp
                        @component('reseñaToMovie', [   'pelicula' => App\pelicula::find($review->idPeli),
                                                        'review' => $review,
                                                        'autor' => $user,
                                                        'comentarios' => App\comentario::where('idReview',$review->id)->take(2)->get()])
                        @endcomponent
                    @php } } @endphp

                </div>    

                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    @php
                    for($i=1;$i<=$count;$i++){
                    @endphp
                    <a href="/perfil/{{$user->id}}/{{$i}}">{{$i}}</a>
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
    <script src="/js/thisReview.js"></script>
    

</body>
</html>