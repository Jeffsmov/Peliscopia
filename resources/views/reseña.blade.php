<!DOCTYPE html>
<html>
<head>
	<title>Reseña</title>
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

    <div class="container" id="titulo">
        <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
            <img class="col-md-2" src="img/Logo Peliscopia.png">
            <h3 class="col-md-10">Da tu opinion, se un experto en cine en la comunidad mas grande</h3>
            <a href="#modal" class="btn btn-danger" data-toggle="modal">Crea tu reseña</a>
        </div>
    </div>    
    <br>
    <br>

    <div class="row">
    	<div class="col-md-3 col-xs-3" id="pelicula">
    		<div class="col-md-12 col-xs-12" align="center">
    			<img src="img/pelicula.jpg" class="img-circle" alt="Responsive image">
    		</div>
    		<div class="col-md-12 col-xs-12">
    			<p class="text-center"><strong>Ready Player One</strong></p>
    			<p class="text-center"><em>(2018)</em></p>
                <p class="text-center"><strong>Tipo: </strong><em>Pelicula</em></p>
                <p class="text-center"><strong>Director: </strong><em>Steven Spieldberg</em></p>
                <p class="text-center"><strong>Reparto: </strong><em>Tye Sheridan, Olivia Cooke, Ben Mendelsohn, Mark Rylance, Simon Pegg, T. J. Miller, Lena Waithe, Win Morisaki, Philip Zhao, Ralph Ineson, Letitia Wright</em></p>
                <p class="text-center"><strong>Premiere: </strong><em>Marzo 2018</em></p>
                <p class="text-center"><strong>Pais: </strong><em>Estados Unidos</em></p>
                <p class="text-center"><strong>Studios: </strong><em>Fox</em></p>
                <p class="text-center"><strong>Genero: </strong><em>Ciencia Ficcion</em></p>
    		</div>

    		<div class="col-md-12 col-xs-12 text-center">
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
        
        <div class="col-md-7 col-md-offset-1 col-xs-7 col-xs-offset-1">
            <div class="container">
                <div class="col-xs-2" align="center" id="foto-user">
                    <img src="img/cavani.png" class="col-md-8" alt="Responsive image">
                </div>
                <div class="col-md-10 col-xs-10">
                    <h4 class="col-md-11">Salvador Alejandro</h4>
                    <h5 class="col-md-2">Septiembre 2018</h5>
                    <h5 class="col-md-8">Comentarios: 20 </h5>
                    <h8 class="col-md-5">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el desafítodos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.</h8>
                </div>
                <div class="form-group col-md-4 col-xs-4">
                    <input type="text" class="form-control" placeholder="Comenta">
                    <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
            </div>
            <hr>   
        </div>

        <div class="col-md-7 col-md-offset-1 col-xs-7 col-xs-offset-1">
            <div class="container">
                <div class="col-xs-2" align="center" id="foto-user">
                    <img src="img/cavani.png" class="col-md-8" alt="Responsive image">
                </div>
                <div class="col-md-10 col-xs-10">
                    <h4 class="col-md-11">Salvador Alejandro</h4>
                    <h5 class="col-md-2">Septiembre 2018</h5>
                    <h5 class="col-md-8">Comentarios: 20 </h5>
                    <h8 class="col-md-5">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el desafítodos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.</h8>
                </div>
                <div class="form-group col-md-4 col-xs-4">
                    <input type="text" class="form-control" placeholder="Comenta">
                    <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
            </div>
            <hr>   
        </div>

    </div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>