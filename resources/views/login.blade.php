{{-- Blade Login, for Landing and Sign-In page. I will use it eventually --}}

<!-- Inicio Modal Login -->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title title-login">Login</h4>

                    <div class="modal-body">

                        <!-- Inicio Login -->                  
                        {{ csrf_field() }}

                        <form action="/action.php" method="post" id="formLogin">
                        <div class="form-group">
                            <input name="email" type="mail" class="form-control" id="formGroupExampleInput2" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <input name="pass" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Contraseña">
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