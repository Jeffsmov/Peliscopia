<!DOCTYPE html>
<html>
<head>
    <title>Peliscopia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/landingstyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

 <!-- Barra Navegacion -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="" class="navbar-brand"><strong>PELISCOPIA</strong></a>
                <a href="" class="navbar-brand">Perfil</a>
            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav">
                    <div class="form-group has-success has-feedback">
                      <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Buscar">
                      <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                 </ul>
                 <div class="dropdown col-md-1 col-md-offset-1">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categorias
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Accion</a></li>
                    <li><a href="#">Comedia</a></li>
                    <li><a href="#">Terror</a></li>
                    <li><a href="#">Ciencia Ficcion</a></li>
                    <li><a href="#">Animacion</a></li>
                    <li><a href="#">Drama</a></li>
                </ul>
            </div>
            <div class="dropdown col-md-1 col-md-offset-1">
                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Mas Vistos
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Categorias mas Vistas</li>
                    <li><a href="#">Hoy</a></li>
                    <li><a href="#">Semana</a></li>
                    <li><a href="#">Mes</a></li>
                </ul>
            </div>
                  <a href="" id="fin-ses" class="navbar-brand" align="right">Cerrar Sesion</a>
            </div>
        </div>
    </nav>

<!-- Creacion de reseña -->
     <div class="container">
        <div class="jumbotron col-md-1">
            <img class="col-md-2" src="img/Logo Peliscopia.png">
            <h3 class="col-md-10">Da tu opinion, se un experto en cine en la comunidad mas grande</h3>
            <a href="#modal" class="btn btn-danger" data-toggle="modal">Crea tu reseña</a>
        </div>
    </div>

<!-- Ventana Modal Creacion de reseña -->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Crea tu reseña</h2>
                    
                    <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Pelicula</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Pelicula">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Reseña</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>

                </div>              
            </div>          
        </div>
    </div>

<!-- Reseña -->
    <div class="container">
        <div class="jumbotron col-md-1">
            <img class="col-md-2" src="img/pelicula.jpg">
            <h4 class="col-md-10">Ready Player One</h4>
            <h5 class="col-md-1">2018</h5>
            <h5 class="col-md-8">Duracion: 2h 20min </h5>
            <h8 class="col-md-8">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el que desafía a todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.</h8>
            <div class="form-group col-md-5">
                    <input type="text" class="form-control" placeholder="Comenta">
                    <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
            <a href="#modalresena" class="btn btn-primary" data-toggle="modal">Ver Reseña</a>
        </div>
    </div>

    <!-- Ventana Modal Descripcion completa reseña -->
    <div class="modal fade" id="modalresena">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Reseña</h2>
                    
                    <div class="modal-body">
                        <img class="col-md-5" src="img/pelicula.jpg">
                        <h3 class="col-md-7">Ready Player One</h3>
                        <h5 class="col-md-1">2018</h5>
                        <h5 class="col-md-7">Duracion: 2h 20min </h5>
                        <h5 class="col-md-7">Director: Steven Spieldberg </h5>
                        <h5 class="col-md-7">Reparto: Tye Sheridan, Olivia Cooke, Ben Mendelsohn, Mark Rylance, Simon Pegg, T. J. Miller, Lena Waithe, Win Morisaki, Philip Zhao, Ralph Ineson, Letitia Wright </h5>
                        <h8 class="col-md-11">Estamos en el año 2044 y, como el resto de la humanidad, Wade Watts prefiere mil veces el videojuego de OASIS al cada vez más sombrío mundo real. Se asegura que esconde las diabólicas piezas de un rompecabezas cuya resolución conduce a una fortuna incalculable. Las claves del enigma están basadas en la cultura de finales del siglo XX y, durante años, millones de humanos han intentado dar con ellas, sin éxito. De repente, Wade logra resolver el primer rompecabezas del premio, y, a partir de ese momento, debe competir contra miles de jugadores para conseguir el trofeo. La única forma de sobrevivir es ganar; pero para hacerlo tendrá que abandonar su existencia virtual y enfrentarse a la vida y al amor en el mundo real, del que siempre ha intentado escapar.</h8>
                    </div>

                </div>              
            </div>          
        </div>
    </div>

 <!-- Paginacion -->
    <div class="container-fluid">
        <br>
        <nav>
            <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </nav>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>