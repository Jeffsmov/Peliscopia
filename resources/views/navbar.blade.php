{{-- Blade Navbar, for Landing and Sign-In page. I will use it eventually --}}

@if (index === 1)

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

                            <div class="form-group has-feedback">
                                <input name="email" type="mail" class="form-control" id="idEmailLogin" placeholder="Correo" required>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="pass" type="password" class="form-control" id="idPassLogin" placeholder="Contraseña" required>
                            </div>
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

@else
    
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
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search"> 
                    <button class="btn btn-default hidden-xs"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </div>

            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">

                    <div class="navbar-form navbar-left hidden-sm hidden-md hidden-lg hidden-xl" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search"> 
                        </div>
                    </div>

                    <li class="hidden-xs"><a href="/perfil" class="img-logo"><img title="Perfil" class="img-logo vcenter" src="/img/drama.jpg"></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/perfil"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Perfil</a></li>

                    <li class="hidden-xs"><a href="/reseña"><span title="Escribe reseña" class="glyphicon glyphicon-pencil"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/reseña"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;Escribe reseña</a></li>

                    <li class="hidden-xs"><a href="/configuracion"><span title="Configuración" class="glyphicon glyphicon-cog"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/configuracion"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Configuración</a></li>

                    <li class="hidden-xs"><a href="/close"><span title="Cerrar Sesion" class="glyphicon glyphicon-off"></span></a></li>
                    <li class="hidden-sm hidden-md hidden-lg hidden-xl"><a href="/close"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;Cerrar Sesion</a></li>

                 </ul>
            </div>

        </div>
    </nav>
<!-- Fin Barra Navegacion -->

@endif