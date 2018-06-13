<div class="container fondoApp">
    <div class="fondoRegistros">
        <h2>Registro de Funcionario</h2>
        <hr>
        <div class="row">
            <div class="col-md-3" style="text-align: center;">
                <img src="https://drive.google.com/uc?export=view&id=1VAVdqLOT3aPd8XqyhcBVkV9TVa3n3A-z" alt="" class="img-rounded img-responsive" style="width: 80%;display: block;margin: auto;"/>
                <a href="#">Editar Foto</a>
            </div>
            <div class="col-md-7">
                <form id="FormRegistroFuncionario" method="POST">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-card" for="registrarDocumento" ></span></div>
                        </div>
                        <input type="number" maxlength="15" class="form-control" name="registrarDocumento" id="registrarDocumento" placeholder="Cédula" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-person" for="registrarNombre"></span></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" name="registrarNombre" id="registrarNombre" placeholder="Nombres" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-person" for="registrarApellido"></span></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" name="registrarApellido" id="registrarApellido" placeholder="Apellidos" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-ios-telephone" for="registrarTelefono"></span></div>
                        </div>
                        <input type="number" maxlength="15" class="form-control" name="registrarTelefono" id="registrarTelefono" placeholder="Teléfono" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-android-mail" for="registrarCorreo"></span></div>
                        </div>
                        <input type="email" maxlength="50" class="form-control email" name="registrarCorreo" id="registrarCorreo" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-location" for="registrarDireccion"></span></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" name="registrarDireccion" id="registrarDireccion" placeholder="Dirección de Residencia" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-locked" for="registrarContraseña"></span></div>
                        </div>
                        <input type="password" maxlength="10" class="form-control" name="registrarContraseña" id="registrarContraseña" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 5%;"><span class="ion-person-add"></span> Registrar</button>                
                </form>
            </div>
        </div>
    </div>
</div>