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
                    <h5><span class="ion-card"></span> '.$user->getCedula().'</h5>
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
<form class="modal fade bd-example-modal-sm modalContraseña" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="formCambiar" method="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Cambiar Contraseña </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group input-group" style="color:black">
                    <div class="input-group-prepend">
                        <span class="input-group-text ion-unlocked" for="cambiarClave1" id="basic-addon1"></span>
                    </div>
                    <input type="text" name="cambiarClave1" class="form-control" placeholder="Contraseña Anterior" id="cambiarClave1" required>
                </div>

                <div class="form-group input-group"  style="color:black">
                    <div class="input-group-prepend">
                        <span class="input-group-text ion-locked" for="cambiarClave2" id="basic-addon1"></span>
                    </div>
                    <input type="text" name="cambiarClave2" class="form-control" placeholder="Contraseña Nueva" id="cambiarClave2" required>
                </div>

            </div>

            <div class="modal-footer" style="display: block;margin: auto;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <span class="ion-close-round"></span></button>
                <button type="submit" class="btn btn-primary">Cambiar <span class="ion-loop"></span></button>
            </div>
        </div>
    </div>
</form>'

    
?>