<!Doctype html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[W].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/configuracion.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->

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

            <div class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search"> 
                    <button class="btn btn-default hidden-xs"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </div>

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

                    <li class="hidden-xs"><a href="/close"><span title="Cerrar Sesion" class="glyphicon glyphicon-off"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/close"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;Cerrar Sesion</a></li>

                 </ul>
            </div>

        </div>
    </nav>
<!-- Fin Barra Navegacion -->

<!-- Header -->
    <header class="container main-header ">
    </header>
<!-- Fin Header -->

<!-- Content -->
    <div class="container-fluid text-center main-container">    

        <div class="row">

        <!-- Configuracion -->

            <div class="col-xs-offset-1 col-sm-8 text-left"> 


                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12">

                        <div class="modal-header">
                            <br>
                            <h2 class="modal-title text-center">Configurac&iacute;on</h2>
                            <br>
                            <div class="modal-body">

                                <form action="action/setting" method="post">

                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="tituloPelicula">Pelicula</label>
                                        <input type="text" class="form-control" id="tituloPelicula" placeholder="Pelicula" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="resenaValue">Reseña</label>
                                        <textarea class="form-control" rows="5" id="resenaValue" placeholder="Reseña" required="true"></textarea>
                                    </div>

                                    <button class="btn btn-default pull-right">Salvar</button>
                                    
                                </form>

                            </div>

                        </div>              
      
                </div>            

            </div>

        <!-- Configuracion -->

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
    <footer class="container-fluid navbar-fixed-bottom footer text-center">
        <span>Peliscopia &copy;</span>
    </footer>
<!-- Footer -->

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>