<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/landingstyle.css">
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

    <div class="container">
        <div class="publi-perfil">
            <div class="row">
                <img src="img/pelicula.jpg" class="col-md-2 img-responsive" alt="Responsive image">
                
                <h4 class="col-md-10">Ready Player One</h4>
                <h5 class="col-md-1">2018</h5>
                <h5 class="col-md-8">Duracion: 2h 20min </h5>
                <h8 class="col-md-5">Cuando el creador de un mundo de realidad virtual llamado OASIS muere, lanza un video en el desafía    a  todos los usuarios de OASIS a encontrar su Huevo de Pascua, que le dará fortuna al buscador.</h8>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Comenta">
                    <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>

            </div> <br>
            <a href="#modalresena" class="btn btn-primary col-md-2" data-toggle="modal">Ver Reseña</a>
                <a href="#modalmodifi" class="btn btn-warning col-md-2 col-md-offset-1" data-toggle="modal">Modificar Reseña</a>
                <a href="#modaleliminar" class="btn btn-danger col-md-1 col-md-offset-1" data-toggle="modal">Eliminar</a> <br> <br>
            <hr>
        </div>
    </div>

    <!-- Ventana Modal Modificacion de reseña -->
     <div class="modal fade" id="modalmodifi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Modificar Reseña</h2>
                    
                    <div class="modal-body">
                        <form>
                            <img src="img/pelicula.jpg" class="col-md-2 img-responsive" alt="Responsive image">
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


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>