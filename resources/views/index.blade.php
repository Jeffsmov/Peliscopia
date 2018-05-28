<!Doctype html>
<html>
<head>
    <title> Peliscopia </title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/landingstyle.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
@component('navbar_index')
@endcomponent

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
    <div class="container-categorias">

        <div class="row centrado">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>Comparte tus reseñas de peliculas</h1>
                <h3> Podras publicar sobre cualquiera de estos generos y más!</h3>
            </div>
        </div>

        <div class="row">
            <div id="seccion" class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="/img/accion_2.png" width="140px">
                    <h4 id="text-section">Accion</h4>
                </div>
            </div>

            <div class="centrado">
                <div id="seccion" class="col-md-4 col-sm-4">
                    <img class="img-circle" src="/img/comedia.png" width="140px">
                    <h4 id="text-section">Comedia</h4>
                </div>
            </div>
        
            <div class="centrado">
                <div id="seccion" class="col-md-4 col-sm-4">
                    <img class="img-circle" src="/img/terror.png" width="140px">
                    <h4 id="text-section">Terror</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="seccion" class="centrado">
                <div class="col-md-4 col-sm-4">
                    <img class="img-circle" src="/img/cienciaficcion.png" width="140px">
                    <h4 id="text-section">Ciencia Ficcion</h4>
                </div>
            </div>

            <div class="centrado">
                <div id="seccion" class="col-md-4 col-sm-4">
                    <img class="img-circle" src="/img/animacion.png" width="140px">
                    <h4 id="text-section">Animacion</h4>
                </div>
            </div>

            <div class="centrado">
                <div id="seccion" class="col-md-4 col-sm-4">
                    <img class="img-circle" src="/img/drama.jpg" width="140px">
                    <h4 id="text-section">Drama</h4>
                </div>
            </div>
        </div>
    </div>
<!-- Fin Primera seccion -->

<!-- Segunda seccion -->
    <div class="hidden-xs hidden-sm">

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
                          <h2>Star Wars</h2>
                          <img class="img-item" src="/img/1.jpeg" alt="...">
                        </div>
                        <div class="item">
                          <h2>Scott Pilgrim</h2>
                          <img class="img-item" src="/img/4.jpg" alt="...">
                        </div>
                        <div class="item">
                          <h2>My Little Pony</h2>
                          <img class="img-item" src="/img/5.jpg" alt="...">
                        </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
<!-- Fin Segunda seccion -->    

<!-- Footer -->
    <footer class="container-fluid footer text-center">
        <span>Peliscopia &copy;</span>
    </footer>
<!-- Footer -->

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/login.js"></script>

</body>
</html>