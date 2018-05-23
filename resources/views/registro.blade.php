<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
    
 	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
 	<link rel="stylesheet" type="text/css" href="/css/registrostyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="registro">

<!-- Barra Navegacion -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/"><img class="img-responsive img-logo navbar-left hidden-xs" src="/img/logo[W].png"></a>
                <a href="/" class="navbar-brand"><strong>PELISCOPIA</strong></a>

            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav">
                    <li><a href="/registro">Registrate</a></li>
                    <li><a href="#login" data-toggle="modal">Iniciar Sesion</a></li>
                 </ul>
            </div>

        </div>
    </nav>
<!-- Fin Barra Navegacion -->

<!-- Inicio Modal Login -->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title title-login">Login</h4>

                    <div class="modal-body">

                        <!-- Inicio Login -->                  
                        
                        <form action="/login" method="post" id="formLogin">
                            {{ csrf_field() }}
                            @section('login-email')
                            <div class="form-group">
                                <input name="email" type="mail" class="form-control" id="formGroupExampleInput2" placeholder="Correo">
                            </div>
                            @show
                            @section('login-contraseña')
                            <div class="form-group">
                                <input name="pass" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Contraseña">
                            </div>
                            @show
                            <div class="form-group">
                                <button type="submit" class="btn btn-aceptar btn-block" id="btnLogin">Ingresar</button>
                            </div>

                        </form>

                        <!-- Fin Login -->

                    </div>

                </div>              
            </div>          
        </div>
    </div>
<!-- Fin Modal Login -->
    
<!-- Inicio Main -->
	<div class="container center-block main">
		<header>
			<h1 class="registro-text text-center">Registrate</h1>
			<div class="row">
				<label class="text-center col-sm-12">Es gratis</label>
			</div>
			<br>
		</header>
			<form class="form" action="/signin" method="post" id="formRegistro">

				{{ csrf_field() }}

				<div class="row">
                    @section('registro-nombre')
					<div class="form-group col-sm-6">
						<label class="control-label">Nombre &nbsp;</label><label title="Minimo 5 caracteres"><strong><u>?</u></strong></label>
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="idNombre" required>
					</div>
                    @show
                    @section('registro-correo')
					<div class="form-group col-sm-6">
						<label class="control-label">Correo</label>
						<input type="email" id="idEmailRegistro" class="form-control" placeholder="correo@email.com" name="email" required>
					</div>
                    @show
				</div>

				<div class="row">
                    @section('registro-contraseña')
					<div class="form-group col-sm-6">
						<label class="control-label">Contraseña &nbsp;</label><label title="Minimo 5 caracteres"><strong><u>?</u></strong></label>
						<input type="password" class="form-control" placeholder="Contraseña" id="idPassword" name="pass" required>
					</div>
                    @show
                    @section('registro-confirmcontraseña')
					<div class="form-group col-sm-6">
						<label class="control-label">Confirmar Contraseña</label>
						<input type="password" class="form-control" placeholder="Confirmar Contraseña" id="idConfirm" name="confirm" required>
					</div>
                    @show

				</div>

				<div class="row">
                    @section('registro-nacimiento')
					<div class="form-group col-sm-6">
						<label class="control-label">Fecha de nacimiento</label>
						<input type="date" class="form-control" placeholder="Fecha" name="birthdayDate" required>
					</div>
                    @show
                    @section('registro-pais')
                    <div class="form-group col-sm-6">
                        <label class="control-label">Pais</label>
                        <select class="form-control" name="pais">
                            @php

                            foreach ($countries as $contry) {
                                @endphp <option value="{{$contry->id}}">{{$contry->nombre}}</option> @php
                            }
                            @endphp
                        </select> 
                    </div>
                    @show
				</div>

				<div class="row">
                    @section('registrar-btn')
					<div class="form-group col-sm-12">
						<div class="pull-right">
							<button type="button" class="btn btn-aceptar" id="btnRegistro">Continuar ></button>
						</div>
					</div>
                    @show

				</div>
			</form>
	</div>
<!-- Fin Main -->

<!-- Footer -->
    <footer class="container-fluid navbar-fixed-bottom footer text-center">
        <span>Peliscopia &copy;</span>
    </footer>
<!-- Footer -->

	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/login.js"></script>
    <script src="/js/registro.js"></script>

</body>
</html>