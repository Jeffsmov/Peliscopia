<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/landingstyle_2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="" class="navbar-brand"><strong>PELISCOPIA</strong></a>
                <a href="" class="navbar-brand">Principal</a>
            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav">
                    <div class="form-group has-success has-feedback">
					  <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Buscar">
					  <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
					  <span id="inputSuccess2Status" class="sr-only">(success)</span>
					</div>
                 </ul>
                 <a href="" id="fin-ses" class="navbar-brand" align="right">Cerrar Sesion</a>
            </div>
        </div>
    </nav>


    <div class="row">
    	<div class="col-md-3">
    		<div class="col-md-12" align="center">
    			<img src="img/cavani.png" class="img-circle" alt="Responsive image">
    		</div>
    		<div class="col-md-12">
    			<p class="text-center"><strong>Nombre</strong></p>
    			<p class="text-center"><em>Titulo del perfil de usuario</em></p>
    		</div>

    		<div class="col-md-12 text-center">
    			<ul class="list-unstyled list-inline list-social-icons">
    				<li>
    					<a href=""><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
    				</li>
    				<li>
    					<a href=""><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>

    <div class="row">
        <div class="publi-perfil">
            <div class="container">
                <img class="col-md-2" src="img/pelicula.jpg">
                <h4 class="col-md-5">Ready Player One</h4>
                <h5 class="col-md-3">2018</h5>
                <h5 class="col-md-7">Duracion: 2h 20min </h5>
                <h8 class="col-md-3">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el desafía    a  todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.</h8>
                <a href="#modalresena" class="btn btn-primary col-md-1" data-toggle="modal">Ver Reseña</a>
                <a href="#modalresena" class="btn btn-danger col-md-1 col-md-offset-5" data-toggle="modal">Eliminar</a>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" placeholder="Comenta">
                    <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
            </div>
            <hr>
        </div>
    </div>


</body>
</html>