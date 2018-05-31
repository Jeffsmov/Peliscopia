{{-- Blade Navbar --}}
    
<!-- Barra Navegacion -->
<form id="searchForm" action="/search/1" class="navbar-form navbar-left pull-left" role="search" method="get">
</form>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/principal"><img class="img-responsive img-logo navbar-left hidden-xs" src="/img/logo[S].png"></a>
                <a href="/principal" class="navbar-brand"><strong>PELISCOPIA</strong></a>

            </div>
            <div class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" for="searchForm" placeholder="Search"> 
                </div>
            </div>
            <div class="navbar-form navbar-left hidden-xs">
                <select class="form-control dropdown dropdown-toggle hidden-md hidden-sm" for="searchForm">
                    <option value="0">Todas las categorias</option>
                    <option value="1">Accion</option>
                    <option value="2">Comedia</option>
                    <option value="3">Terror</option>
                    <option value="4">Ciencia Ficcion</option>
                    <option value="5">Animacion</option>
                    <option value="6">Drama</option>
                    <option value="7">Usuarios</option>
                </select>
                <input type="date" class="form-control hidden-md hidden-sm" placeholder="Fecha" name="from" for="searchForm">
                <span class="white hidden-md hidden-sm">-</span>
                <input type="date" class="form-control hidden-md hidden-sm" placeholder="Fecha" name="to" for="searchForm">
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
