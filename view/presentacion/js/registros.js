$(document).ready(function () {
    $("#FormRegistroFuncionario").validate({
        rules: {
            registrarDocumento: {required: true, number: true},
            registrarNombre: {required: true},
            registrarApellido: {required: true},
            registrarTelefono: {required: true,number: true},
            registrarCorreo: {required: true},
            registrarDireccion: {required: true},
            registrarContraseña: {required: true}
        },
        messages:
                {
                    registrarDocumento: {required: "<span style='color:red'> ✘ </span>", number: "<span style='color:red'> ✘ </span>"},
                    registrarNombre: "<span style='color:red'> ✘ </span>",
                    registrarApellido: "<span style='color:red'> ✘ </span>",
                    registrarTelefono: "<span style='color:red'> ✘ </span>",
                    registrarCorreo: "<span style='color:red'> ✘ </span>",
                    registrarDireccion: "<span style='color:red'> ✘ </span>",
                    registrarContraseña: "<span style='color:red'> ✘ </span>"
                },
               

        submitHandler: function (form) {

            var datos = {
                registrarDocumento: $("#registrarDocumento").val(),
                registrarNombre: $("#registrarNombre").val(),
                registrarApellido: $("#registrarApellido").val(),
                registrarTelefono: $("#registrarTelefono").val(),
                registrarCorreo: $("#registrarCorreo").val(),
                registrarDireccion: $("#registrarDireccion").val(),
                registrarContraseña: $("#registrarContraseña").val()             
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
                        ingresoExitoso("Registro Exitoso","");
                    } else if (!respuesta["exito"]) {
                        respuestaError("Error al Registrar", "Ya se encuentra registrada esa cédula");
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
    
    $("#FormRegistroDrogueria").validate({
        rules: {
            registrarDrogueriaNit: {required: true},
            registrarDrogueriaNombre: {required: true},
            registrarregistrarDrogueriaTelefonoApellido: {required: true,number: true},
            registrarDrogueriaDireccion: {required: true},
            registrarDrogueriaEncargado: {required: true}
        },
        messages:
                {
                    registrarDrogueriaNit: "<span style='color:red'> ✘ </span>",
                    registrarDrogueriaNombre: "<span style='color:red'> ✘ </span>",
                    registrarDrogueriaTelefono: {required: "<span style='color:red'> ✘ </span>", number: "<span style='color:red'> ✘ </span>"},
                    registrarDrogueriaDireccion: "<span style='color:red'> ✘ </span>",
                    registrarDrogueriaEncargado: "<span style='color:red'> ✘ </span>"
                },
               

        submitHandler: function (form) {

            var datos = {
                registrarDrogueriaNit: $("#registrarDrogueriaNit").val(),
                registrarDrogueriaNombre: $("#registrarDrogueriaNombre").val(),
                registrarDrogueriaTelefono: $("#registrarDrogueriaTelefono").val(),
                registrarDrogueriaDireccion: $("#registrarDrogueriaDireccion").val(),
                registrarDrogueriaEncargado: $("#registrarDrogueriaEncargado").val()         
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
                        ingresoExitoso("Registro Exitoso","");
                    } else if (!respuesta["exito"]) {
                        respuestaError("Error al Registrar", "Ya se encuentra registrada éste nit");
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


