{{-- Blade Navbar --}}
    
<!-- Barra Navegacion -->
    <form id="searchForm" class="navbar-form navbar-left pull-left" role="search">
    </form>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/principal"><img class="img-responsive img-logo navbar-left hidden-xs" src="/img/logo[W].png"></a>
                <a href="/principal" class="navbar-brand"><strong>PELISCOPIA</strong></a>

            </div>
            <div class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" placeholder="Search"> 
                    <button class="btn btn-default hidden-xs"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </div>
            <div class="navbar-form navbar-left hidden-xs">
                <select class="form-control dropdown dropdown-toggle">
                    <option value="0">Todas las categorias</option>
                    <option value="1">Accion</option>
                    <option value="2">Comedia</option>
                    <option value="3">Terror</option>
                    <option value="4">Ciencia Ficcion</option>
                    <option value="5">Animacion</option>
                    <option value="6">Drama</option>
                </select>
                <!--
                    <div class="dropdown">
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
                -->
            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">

                    <div class="navbar-form navbar-left hidden-sm hidden-md hidden-lg hidden-xl" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search"> 
                        </div>
                    </div>

                    <li class="hidden-xs"><a href="/perfil/{{$idUser}}" class="img-logo"><img title="{{$nameUser}}" class="img-logo vcenter" src="/user/img/{{$idUser}}"></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/perfil/{{$idUser}}"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;{{$nameUser}}</a></li>

                    <li class="hidden-xs"><a href="/reseña"><span title="Escribe reseña" class="glyphicon glyphicon-pencil"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/reseña"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;Escribe reseña</a></li>

                    <li class="hidden-xs"><a href="/configuracion"><span title="Configuración" class="glyphicon glyphicon-cog"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/configuracion"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Configuración</a></li>
                    <li class="hidden-xs"><a href="/logout"><span title="Cerrar Sesion" class="glyphicon glyphicon-off"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/close"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;Cerrar Sesion</a></li>

                 </ul>
            </div>

        </div>
    </nav>
<!-- Fin Barra Navegacion -->
