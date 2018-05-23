<!Doctype html>
<html>
<head>
    <title>Nombre</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[W].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/movie.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        
<!-- Barra Navegacion -->
    <form id="searchForm" class="navbar-form navbar-left pull-left" role="search">
    </form>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/principal"><img class="img-responsive img-logo navbar-left hidden-xs" src="/img/logo[W].png"></a>
                <a href="/principal" class="navbar-brand"><strong>PELISCOPIA</strong></a>

            </div>
            @section('buscar')
            <div class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search"> 
                    <button class="btn btn-default hidden-xs"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </div>
            @show

            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">

                    <div class="navbar-form navbar-left hidden-sm hidden-md hidden-lg hidden-xl" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search"> 
                        </div>
                    </div>

                    <li class="hidden-xs"><a href="/perfil" class="img-logo"><img title="Perfil" class="img-logo vcenter" src="/img/drama.jpg"></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/perfil"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Perfil</a></li>

                    <li class="hidden-xs"><a href="/reseña"><span title="Escribe reseña" class="glyphicon glyphicon-pencil"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/reseña"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;Escribe reseña</a></li>

                    <li class="hidden-xs"><a href="/configuracion"><span title="Configuración" class="glyphicon glyphicon-cog"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/configuracion"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Configuración</a></li>
                     @section('cerrarsesion')
                    <li class="hidden-xs"><a href="/close"><span title="Cerrar Sesion" class="glyphicon glyphicon-off"></span></a></li>
                    @show
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/close"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;Cerrar Sesion</a></li>

                 </ul>
            </div>

        </div>
    </nav>
<!-- Fin Barra Navegacion -->

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
                @section('foto-pelicula')
                <div class="col-md-12" align="center">
                    <img src="/img/pelicula.jpg" class="img-responsive img-movie" alt="Responsive image">
                </div>
                @show
                <div class="col-md-12">
                    <br>
                    @section('nombre-pelicula')
                    <p class="text-center"><strong>Nombre</strong></p>
                    @show
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


            <!-- Reseña -->
                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/img/cavani.png">

                    <div class="col-md-10 row">
                         @section('nombre-usuario')
                        <div class="head">
                            <div class="row">
                                <div class="col-md-12"> <a href="/">Usuario</a> <a href="/" class="more-reviews">(Más reviews)</a> </div>
                            </div>
                            @show
                            @section('fechareseña')
                            <div class="row">
                                <div class="col-md-12"><span class="more-reviews pull-right">2018-04-28</span></div>
                            </div>
                            @show
                        </div>
                    
                        <div class="cont-reseña">
                            @section(rating-usuario)
                            <div class="row">
                                <div class="col-md-12">Rating: 10</div>
                            </div>
                            @show
                            @section('contenido-reseña')
                            <div class="row">
                                <div class="col-md-12">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un  video en el que desafía a todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna    al buscador.</div>
                            </div>
                            @show
                        </div>
                        @section('like')
                        <div class="row btnLike">
                            <a href="#" class="like"><img title="Like" class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/img/like-peliscopia.png"></a>
                            <p>10</p>
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