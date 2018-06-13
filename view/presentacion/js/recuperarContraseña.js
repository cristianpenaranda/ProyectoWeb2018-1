$(document).ready(function () {
    $("#formRecordar").validate({
        
        rules: {
            recordarUsuario: {required: true, number: true}
        },
        messages:
               {
                    recordarUsuario: {required: "<span style='color:red'> ✘ </span>", number: "<span style='color:red'> ✘ </span>"}
                 
                },
                

        submitHandler: function () {

            var datos = {
                recordarUsuario: $("#recordarUsuario").val()
            };    
            
            $.ajax({
                url: 'view/modulos/ajax.php',
                method: 'post',
                data: datos,
                dataType:"text",
                
                beforeSend: function () {
                    respuestaInfoEspera("Espera un momento, te enviaremos un correo.");
                },
                success: function (respuesta)
                {
                    if (respuesta==="exito") {
                        exito("Exito","Te hemos enviado un correo con tu contraseña");
                    } else{
                        respuestaError("Error al recuperar Contraseña", "¿ Tienes una Cuenta ?");
                    }
                },
                error: function(jqXHR,estado,error){
                    console.log(estado);
                    console.log(error);
                    console.log(jqXHR);
                }
            });
        }
    });

});




