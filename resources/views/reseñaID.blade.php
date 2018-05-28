<!Doctype html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[W].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/resena.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->

    <link rel="stylesheet" type="text/css" href="/css/principalstyle.css"> 

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
                    <img src="/img/pelicula.jpg" class="img-responsive img-movie" alt="Responsive image">
                </div>
                <div class="col-md-12">
                    <br>
                    <p class="text-center"><strong>Nombre</strong></p>
                    <p class="text-center"><em>M&aacute;s informaci&oacute;n</em></p>
                </div>

                <div class="col-md-12 text-center">
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="/"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="/"><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        <!-- Información de la pelicula -->

        <!-- Reseña -->

            <div class="col-sm-7 text-left"> 

                <div class="col-xs-offset-1 hidden-xl hidden-lg hidden-md hidden-sm"></div>


            <!-- La Reseña -->
                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/img/cavani.png">

                    <div class="col-md-10 row">
                        @section('nombre-usuario')
                        <div class="row">
                            <div class="col-md-12"> <a href="/">Usuario</a> <a href="/" class="more-reviews">(Más reviews)</a> </div>
                        </div>
                        @show
                        @section('fechareseña')
                        <div class="row">
                            <div class="col-md-12"><span class="more-reviews pull-right">2018-04-28</span></div>
                        </div>
                        @show
                        @section(rating-usuario)
                        <div class="row">
                            <div class="col-md-12">Rating: 10</div>
                        </div>
                        @show
                        @section('contenido-reseña')
                        <div class="row">
                            <div class="col-md-12">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el que desafía a todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.</div>
                        </div>
                        @show
                        @section('comentario-reseña')
                        <div class="form-group  has-feedback">
                            <label class="control-label" for="inputSuccess2">Comenta</label>
                            <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                            <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                        @show
                         <div id="comments-container" class="form-group col-md-12 text-right more-reviews">
                            <ul class="comments-list">
                                <li>
                                    <div class="comment-main-level">
                                        <!--Avatar-->
                                        @section('foto-usuario-comentario')
                                       <div class="comment-avatar"><img src="/img/user.ico" alt=""></div> 
                                       @show 
                                       <!--Contenedor comentario--> 
                                       <div class="comment-box">
                                        @section('usuario-comentario')
                                            <div class="comment-head">
                                                <h6 class="comment-name by-autor">Arturo Gonzalez</h6>
                                            </div>
                                            @show
                                            @section('contenido-comentario')
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                            </div> 
                                            @show                                              
                                       </div>                                     
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>  


            <!-- Area de comentarios -->

            <div class="row">
                <div class="col-xs-12">
                    <br>
                </div>
            </div>

                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">

                   <!--  <div class="form-group col-xs-11 form-inline">
                        <input type="text" class="form-control" id="commentBox" placeholder="Comentario..." required="true">
                        <button class="btn btn-default">Submit</button>
                    </div> -->

                </div>

            <!-- Area de comentarios -->


            <!-- Comentarios -->

                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/img/cavani.png">

                    <div class="col-md-10 row">

                        <div class="row">
                            <div class="col-md-12"> <a href="/">Usuario</a> <a href="/" class="more-reviews">(Más reviews)</a> </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12"><span class="more-reviews pull-right">2018-04-28</span></div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">Rating: 10</div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el que desafía a todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.</div>
                        </div>
                        @section('')
                        <div class="form-group  has-feedback">
                            <label class="control-label" for="inputSuccess2">Comenta</label>
                            <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                            <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                        <div id="comments-container" class="form-group col-md-12 text-right more-reviews">
                            <ul class="comments-list">
                                <li>
                                    <div class="comment-main-level">
                                        <!--Avatar-->
                                       <div class="comment-avatar"><img src="/img/user.ico" alt=""></div>  
                                       <!--Contenedor comentario--> 
                                       <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-autor">Arturo Gonzalez</h6>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                            </div>                                               
                                       </div>                                     
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>  

            <!-- Comentarios -->         


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

</body>
</html>