<!DOCTYPE html>
<html>
<head>
	<title>Reseña</title>
	<meta charset="utf-8">

    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/resena.css">
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

        <!-- Reseña -->

            <div class="col-xs-offset-1 col-sm-8 text-left"> 


                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12">

                        <div class="modal-header">
                            <br>
                            <h2 class="modal-title text-center">Crea tu reseña</h2>
                            <br>
                            <div class="modal-body">

                                <form action="action/review" method="post">

                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="tituloPelicula">Pelicula</label>
                                        <input type="text" class="form-control" id="tituloPelicula" placeholder="Pelicula" name="title" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="reviewScore">Score</label>
                                        <select class="form-control" name="score" id="reviewScore">
                                        @php
                                            for ($i=1;$i<=5;$i++) {
                                            @endphp 
                                                <option value="{{$i}}">
                                                    {{$i}}
                                                </option> 
                                            @php
                                            }
                                        @endphp
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label for="resenaValue">Reseña</label>
                                        <textarea class="form-control" rows="5" id="resenaValue" placeholder="Reseña" name="review" required="true"></textarea>
                                    </div>
                                    <button class="btn btn-default pull-right">Submit</button>
                                </form>

                            </div>

                        </div>              
      
                </div>            

            </div>

        <!-- Reseñas -->

        <!-- ADS -->
            <div class="col-sm-offset-1 col-sm-2 hidden-xs sidenav">
                <div class="well">
                    <p>YOUR ADS HERE</p>
                </div>
                <div class="well">
                    <p>ANOTHER ADS</p>
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
    <script src="/js/jquery.autocomplete.js"></script>
    <script src="/js/resena.js"></script>
    <script src="/js/search.js"></script>

</body>
</html>