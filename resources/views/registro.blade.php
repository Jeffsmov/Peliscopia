<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">

	<link rel="icon" type="image/png" href="/img/logo[S].png"/>
    
 	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
 	<link rel="stylesheet" type="text/css" href="/css/registrostyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="registro">
        
@component('navbar_index')
@endcomponent
    
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
					<div class="form-group col-sm-6">
						<label class="control-label">Nombre &nbsp;</label><label title="Minimo 5 caracteres"><strong><u>?</u></strong></label>
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="idNombre" required>
					</div>
					<div class="form-group col-sm-6">
						<label class="control-label">Correo</label>
						<input type="email" id="idEmailRegistro" class="form-control" placeholder="correo@email.com" name="email" required>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-6">
						<label class="control-label">Contraseña &nbsp;</label><label title="Minimo 5 caracteres"><strong><u>?</u></strong></label>
						<input type="password" class="form-control" placeholder="Contraseña" id="idPassword" name="pass" required>
					</div>
					<div class="form-group col-sm-6">
						<label class="control-label">Confirmar Contraseña</label>
						<input type="password" class="form-control" placeholder="Confirmar Contraseña" id="idConfirm" name="confirm" required>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-6">
						<label class="control-label">Fecha de nacimiento</label>
						<input type="date" class="form-control" placeholder="Fecha" name="birthdayDate" required>
					</div>
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