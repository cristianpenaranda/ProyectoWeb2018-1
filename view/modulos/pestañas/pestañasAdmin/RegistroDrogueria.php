<div class="container fondoApp">
    <div class="fondoRegistros">
        <h2>Registro de Droguería</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <form id="FormRegistroDrogueria" method="POST">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-card" for="registrarDrogueriaNit" ></span></div>
                        </div>
                        <input type="text" maxlength="15" class="form-control" name="registrarDrogueriaNit" id="registrarDrogueriaNit" placeholder="Nit" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><ion-icon name="thermometer"></ion-icon></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" name="registrarDrogueriaNombre" id="registrarDrogueriaNombre" placeholder="Nombre" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-ios-telephone" for="registrarDrogueriaTelefono"></span></div>
                        </div>
                        <input type="number" maxlength="15" class="form-control" name="registrarDrogueriaTelefono" id="registrarDrogueriaTelefono" placeholder="Teléfono" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-location" for="registrarDrogueriaDireccion"></span></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" name="registrarDrogueriaDireccion" id="registrarDrogueriaDireccion" placeholder="Dirección" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-person" for="registrarDrogueriaEncargado"></span></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" name="registrarDrogueriaEncargado" id="registrarDrogueriaEncargado" placeholder="Nombre del Encargado" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 5%;">Registrar</button>                
                </form>
            </div>
        </div>
    </div>
</div>