{{-- Blade Navbar, for Landing and Sign-In page. --}}

<!-- Barra Navegacion -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/"><img class="img-responsive img-logo navbar-left hidden-xs" src="/img/logo[S].png"></a>
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
