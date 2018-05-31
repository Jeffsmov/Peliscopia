<!Doctype html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/configuracion.css"> <!-- AQUI VA UNA VARIABLE PARA EL CSS DE LA PAGINA ES -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

@component('navbar', [  'idUser' => session('id'),
                        'nameUser' => session('name')])
@endcomponent

<!-- Header -->
    <header class="container main-header ">
    </header>
<!-- Fin Header -->

<img id="tempImg" class="hidden" hidden='true' alt="oh">

<!-- Content -->
    <div class="container-fluid text-center main-container">    

        <div class="row">

        <!-- Configuracion -->

            <div class="col-xs-offset-1 col-sm-8 text-left"> 


                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12">

                        <div class="modal-header">
                            <br>
                            <div>
                                <h2 class="modal-title text-center">Agregar Pelicula</h2>
                            </div>
                            <br>
                            <div class="modal-body row">

                                <form action="/action/config/admin" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label" for="titlePeli">Titulo</label>
                                        <input name="titulo" type="text" class="form-control" id="titlePeli" placeholder="Titulo..." required="true">
                                    </div>
                                    <div class="form-group">
										<label class="control-label" for="fechaPeli">Fecha de lanzamientos</label>
										<input type="date" class="form-control" id="fechaPeli" placeholder="Fecha" name="fecha" required>
									</div>
                                    <div class="form-group">
                                        <label class="control-label" for="catPeli">Categoria</label>
                                        <select class="form-control dropdown dropdown-toggle hidden-md hidden-sm" id="catPeli" name="cat">
                                            <option value="1">Accion</option>
                                            <option value="2">Comedia</option>
                                            <option value="3">Terror</option>
                                            <option value="4">Ciencia Ficcion</option>
                                            <option value="5">Animacion</option>
                                            <option value="6">Drama</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="desPeli">Descripci&oacute;n</label>
                                        <input name="des" type="text" class="form-control" id="desPeli" placeholder="Descripci&oacute;n..." required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="porPeli">Portada</label>
                                        <input name="por" type="file" id="porPeli" required="true" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="banPeli">Banner</label>
                                        <input name="ban" type="file" id="banPeli" required="true" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <button class="btn btn-default pull-right">Agregar pelicula</button>
                                    <br>
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
    <script src="/js/config.js"></script>
    <script src="/js/search.js"></script>

</body>
</html>