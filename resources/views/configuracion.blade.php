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
                                <h2 class="modal-title text-center">Configurac&iacute;on</h2>
                            </div>
                            <br>
                            <div class="modal-body row">

                                <form action="/action/setting/img" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label id="cambiarFoto" for="changepic" class="control-label container hidden-sm hidden-xs"> 
                                            <img src="/user/img/{{session('id')}}" data-toggle="tooltip" data-placement="right" title="Cambiar Foto" class="img-responsive rounded img-thumbnail img-medium-logo" alt="{{session('name')}}">
                                        </label>
                                        <input type="file" name="img" id="changepic" class="hidden" data-toggle="tooltip" data-placement="right" title="Cambiar Foto" accept=".png, .jpg, .jpeg">
                                        <label id="cambiarFoto" for="changepic" class="control-label hidden-xl hidden-lg hidden-md"> 
                                            <button class="btn btn-default">Cambiar Foto</button>
                                        </label>
                                    </div>
                                <hr>
                                </form>

                                <form action="/action/setting" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label" for="NombreUser">Nombre</label>
                                        <input name="nombre" type="text" class="form-control" id="NombreUser" value="{{session('name')}}" placeholder="Nombre" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="bio">Bio</label>
                                        <input name="bio" type="text" class="form-control" id="bio" value="{{$bio}}" placeholder="Un poco sobre ti..." required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="face">Facebook</label>
                                        <input name="facebook" type="text" class="form-control" id="face" value="{{$facebook}}" placeholder="facebook.com/">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="twitter">Twitter</label>
                                        <input name="twitter" type="text" class="form-control" id="twitter" value="{{$twitter}}" placeholder="twitter.com/">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="Email">Correo</label>
                                        <input type="text" name="email" class="form-control" id="Email" placeholder="Correo" value="{{$userMail}}" disabled required="true">
                                    </div>

                                    <button class="btn btn-default pull-right">Cambiar informacion</button>

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

</body>
</html>