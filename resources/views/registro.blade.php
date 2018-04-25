<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css/registrostyle.css">
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

    
	<div class="container center-block main">
		<header>
			<h1 class="registro-text">Registrate</h1>
			<div class="row">
				<label class="text-center col-sm-12">Es gratis</label>
			</div>
			<br>
		</header>
			<form class="form">

				<div class="row">

					<div class="form-group col-sm-6">
						<label class="control-label">Nombre</label>
						<input type="text" class="form-control" placeholder="Nombre" name="">
					</div>

					<div class="form-group col-sm-6">
						<label class="control-label">Correo</label>
						<input type="email" class="form-control" placeholder="correo@email.com" name="">
					</div>

				</div>

				<div class="row">

					<div class="form-group col-sm-6">
						<label class="control-label">Contraseña</label>
						<input type="password" class="form-control" placeholder="Contraseña" name="">
					</div>

					<div class="form-group col-sm-6">
						<label class="control-label">Confirmar Contraseña</label>
						<input type="password" class="form-control" placeholder="Confirmar Contraseña" name="">
					</div>

				</div>

				<div class="row">

					<div class="form-group col-sm-6">
						<label class="control-label">Fecha de nacimiento</label>
						<input type="date" class="form-control" placeholder="Fecha" name="">
					</div>

				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<div class="pull-right">
							<input type="submit" class="btn btn-aceptar" id="conti" value="Continuar >">
						</div>
					</div>

				</div>



			</form>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>