<?php
if (isset($_SESSION["Usuario"])) {
    header("Location:Perfil");
}
?>

<div class="estiloInicio">
    <br>
    <div class="col-md-5" style="display: block;margin: auto;">
        <form class="login" id="FormLogin" method="POST">
            <img src="https://drive.google.com/uc?export=view&id=1VqeLGaJjen87r1GnOV_VTt9Ds4jHSyf3" style="width: 95%;border: 2px double #007bff;border-radius: 15px 15px 15px 15px;">
            <hr>
            <p>Ingresa tus datos para iniciar sesión</p>
            <div class="col-auto">

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text ion-person" for="ingresarDocumento" id="basic-addon1"></span>
                    </div>
                    <input type="number" name="ingresarUsuario" class="form-control" placeholder="Usuario" id="ingresarUsuario" required>
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text ion-locked" for="ingresarContraseña" id="basic-addon1"></span>
                    </div>
                    <input type="password" name="ingresarContraseña" maxlength="10" class="form-control" placeholder="Contraseña" id="ingresarContraseña" required>
                </div>

                <div class="form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text ion-person-stalker" id="basic-addon1" for="ingresarTipo"></span>       
                        <select id="ingresarTipo" name="ingresarTipo" class="form-control" required> 
                            <option value="">Seleccione tipo de usuario</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Funcionario">Funcionario</option>
                        </select>
                        <label class="bg-danger" id="error-tipoUsuarioI"></label>     
                    </div>
                </div>

                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-primary"><span class="ion-log-in"></span> Ingresar</button>
                </div>

                <div class="form-group">
                    <a  href="" data-toggle="modal" data-target=".bd-example-modal-sm" id="modal"><span class="ion-help-circled"></span> Has olvidado tu contraseña?</a>
                </div>

            </div>
            <br>
        </form>



        <!--MODAL RECUPERAR CONTRAASEÑA-->
        <form class="modal fade bd-example-modal-sm modalContraseña" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="formRecordar" method="POST">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Recordar Contraseña <span class="ion-loop"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group input-group" style="color:black">
                            <div class="input-group-prepend">
                                <span class="input-group-text ion-person" for="recordarUsuario" id="basic-addon1"></span>
                            </div>
                            <input type="number" name="recordarUsuario" class="form-control" placeholder="Usuario" id="recordarUsuario" required>
                        </div>
                    </div>

                    <div class="modal-footer" style="display: block;margin: auto;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <span class="ion-close-round"></span></button>
                        <button type="submit" class="btn btn-primary">Recordar <span class="ion-loop"></span></button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <br>
</div>

