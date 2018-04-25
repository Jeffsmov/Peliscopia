<!Doctype html>
<html>
 <head>
    <title> Peliscopia </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/landingstyle.css">
</head>
<body>
        
    <!-- Barra Navegacion -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/"><img class="img-responsive img-logo navbar-left" src="img/logo[W].png"></a>

                <a href="/" class="navbar-brand"><strong>PELISCOPIA</strong></a>

            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav">
                    <li><a href="registro">Registrate</a></li>
                    <li><a href="">Iniciar Sesion</a></li>
                 </ul>
            </div>

        </div>
    </nav>
<!-- Fin Barra Navegacion -->

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-sm-offset-7">
                    <h1>Peliscopia: La mejor pagina de reseñas de peliculas</h1>
                </div>
                
            </div>
        </div>
    </header>
<!-- Fin Header -->

<!-- Primera seccion -->
    <div class="container">

        <div class="row centrado">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>Comparte tus reseñas de peliculas</h1>
                <h3> Podras publicar sobre cualquiera de estos generos</h3>
            </div>
        </div>

        <div class="row">
            <div class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="img/accion.png" width="140px">
                    <h4>Accion</h4>
                </div>
            </div>

            <div class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="img/comedia.png" width="140px">
                    <h4>Comedia</h4>
                </div>
            </div>
        
            <div class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="img/terror.png" width="140px">
                    <h4>Terror</h4>
                </div>
            </div>

            <div class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="img/cienciaficcion.png" width="140px">
                    <h4>Ciencia Ficcion</h4>
                </div>
            </div>

            <div class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="img/animacion.png" width="140px">
                    <h4>Animacion</h4>
                </div>
            </div>

            <div class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="img/drama.jpg" width="140px">
                    <h4>Drama</h4>
                </div>
            </div>
        </div>
    <!-- Fin Primera seccion -->


<!-- Segunda seccion -->
        <hr class="container">

        <div class="container">
            <div class="row centrado">
                <div>
                    <h1>Revive los mejores momentos del cine</h1>
                </div>
            </div>

            <div class="row centrado">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner centrado" role="listbox">
                        <div class="item active">
                          <h3>Star Wars</h3>
                          <img src="img/1.jpeg" alt="...">
                        </div>
                        <div class="item">
                          <h3>Scott Pilgrim</h3>
                          <img src="img/4.jpg" alt="...">
                        </div>
                        <div class="item">
                          <h3>My Little Pony</h3>
                          <img src="img/5.jpg" alt="...">
                        </div>
                  </div>
                </div>
            </div>
        </div>
          
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>