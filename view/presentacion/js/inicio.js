$(document).ready(function () {
    $("#FormLogin").validate({
        rules: {
            ingresarUsuario: {required: true, number: true},
            ingresarContraseña: {required: true},
            ingresarTipo: {
                required: true
            }
        },
        messages:
                {
                    ingresarUsuario: {required: "<span style='color:red'> ✘ </span>", number: "<span style='color:red'> ✘ </span>"},
                    ingresarContraseña: "<span style='color:red'> ✘ </span>",
                    ingresarTipo: {
                    required: "<span style='color:red'> ✘ </span>"
                    }
                },
               

        submitHandler: function (form) {

            var datos = {
                ingresarUsuario: $("#ingresarUsuario").val(),
                ingresarContraseña: $("#ingresarContraseña").val(),
                ingresarTipo: $("select[name=ingresarTipo]").val()             
            };
                                  
            $.ajax({
                url: 'view/modulos/ajax.php',
                method: 'post',
                data: datos,
                dataType: "json",

                beforeSend: function () {
                    respuestaInfoEspera("Espera un momento por favor.");
                },
                success: function (respuesta)
                {
                    if (respuesta["exito"]) {
                        ingresoExitoso("Iniciaste Sesión","Bienvenido a nuestra Aplicación");
                    } else if (!respuesta["exito"]) {
                        respuestaError("Error al Iniciar", "Revisa el Usuario, la Contraseña y el Tipo de Usuario");
                    }

                },
                error: function(jqXHR,estado,error){
                    console.log(estado);
                    console.log(error);
                    console.log(jqXHR);
                },
                
            });
        }
    });

});


