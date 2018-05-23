<!Doctype html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[W].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/principalstyle.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->

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
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" placeholder="Search"> 
                    <button class="btn btn-default hidden-xs"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </div>
            @show
            @section('categorias')
            <div class="navbar-form navbar-left hidden-xs">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categorias
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Accion</a></li>
                      <li><a href="#">Comedia</a></li>
                      <li><a href="#">Terror</a></li>
                      <li><a href="#">Ciencia Ficcion</a></li>
                      <li><a href="#">Animacion</a></li>
                      <li><a href="#">Drama</a></li>
                    </ul>
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
                @section('foto-pelicula')
                <div class="row col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/img/pelicula.jpg">
                    @show
                    <div class="col-md-10 row">
                        <div class="head">
                            <div class="row">
                                @section('nombre-pelicula')
                                <div class="col-md-12"> <a href="/">Ready Player One</a> <a href="/" class="more-reviews">(Más reviews)</a><a href="  "></a> </div>
                                @show
                            </div>
                            
                            <div class="row">
                                @section('datos-usuario')
                                <div class="col-md-12"> <a href="/" class="more-reviews">User</a> <a href="/" class="more-reviews">(Más     reviews)</a> <span class="more-reviews pull-right">2018-04-28</span></div>
                                @show
                            </div>
                        </div>
                        <div class="cont-reseña">
                            <div class="row">
                                @section('rating-usuario')
                                <div class="col-md-12">Rating: 10</div>
                                @show
                            </div>
    
                            <div class="row">
                                @section('reseña-general')
                                <div class="col-md-12">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un  video en el que desafía a todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna    al buscador.</div>
                                @show
                            </div>
                        </div>
                        <br>
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