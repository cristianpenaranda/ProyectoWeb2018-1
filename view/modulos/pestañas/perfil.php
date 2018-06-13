<?php
    if (isset($_SESSION["Usuario"])) {
        $user = unserialize($_SESSION['Usuario']);
    }

echo '<div class="container fondoApp">
    <div class="row">
        <div class="col-md-7">
            <div class="well well-sm perfil">
                <h2>Perfil</h2>
                <hr>
                <img src="https://drive.google.com/uc?export=view&id=1VAVdqLOT3aPd8XqyhcBVkV9TVa3n3A-z" alt="" class="img-rounded img-responsive" />
                <div class="info">
                    <h3><span class="ion-person"></span> ' .$user->getNombre().' '.$user->getApellidos().'</h3>
                    <h5 id="UsuarioCambiarContraseña"><span class="ion-card"></span> '.$user->getCedula().'</h5>
                    <span class="ion-location"></span> '.$user->getDireccion().'
                    <p>
                        <span class="ion-email"></span> '.$user->getCorreo().'
                        <br>
                        <span class="ion-android-call"></span> '.$user->getTelefono().'
                        <br>
                        <span class="ion-person-stalker"></span> '.$user->getTipo().'
                    </p>
                </div>
                <button class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-example-modal-sm" id="modal"><span class="ion-loop"></span> Cambiar Contraseña</button>                
            </div>
        </div>
    </div>
</div>

<!--MODAL CAMBIAR CONTRAASEÑA-->
<form class=" modal fade bd-example-modal-sm modalContraseña" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="FormCambiarContraseña" method="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <h5 class="modal-title mt-3 mb-3" id="exampleModalCenterTitle" style="text-align: center;">Cambiar Contraseña </h5>
            <hr style="width:90%;">
            <div class="modal-body">
                <div class="form-group input-group" style="color:black">
                    <div class="input-group-prepend">
                        <span class="input-group-text ion-unlocked" for="AnteriorCambiarContraseña" id="basic-addon1"></span>
                    </div>
                    <input type="password" maxlength="50"  class="form-control" placeholder="Contraseña Anterior" id="AnteriorCambiarContraseña" name="AnteriorCambiarContraseña" required>
                </div>

                <div class="form-group input-group"  style="color:black">
                    <div class="input-group-prepend">
                        <span class="input-group-text ion-locked" for="NuevaCambiarContraseña" id="basic-addon1"></span>
                    </div>
                    <input type="password" maxlength="50"  class="form-control" placeholder="Contraseña Nueva" id="NuevaCambiarContraseña" name="NuevaCambiarContraseña" required>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary ml-5 mr-3" id="botonCambiarContraseña" style="width:50%;">Cambiar <span class="ion-loop"></span></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="ion-close-round"></span> Cerrar</button></div>
                </div>
        </div>
    </div>
</form>'

    
?>