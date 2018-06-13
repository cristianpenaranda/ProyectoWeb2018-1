var input = "";

$(document).ready(function () {
    //SELECCIONA LA FECHA DEL SISTEMA
    var fecha = new Date();
    $("#dateInput").val((fecha.getDay() + 3) + "/" + (fecha.getMonth() + 1) + "/" + (fecha.getYear() + 1900));
    $("#timeInput").val(fecha.getHours() + ":" + fecha.getMinutes());

    //OCULTA EL FORMULARIO
    $("#informacionInspeccion").hide();

    //CONSULTAR INPUT QUE SE CLICKEA
    $('#formFormato').on('click', 'input', function () {
        input = $(this).attr('id');
    });

    //BUSCAR DROGUERIA EN FORMATO
    $("#buscarDro").click(function () {
        $("#cardInfoDrogueria").validate({
            rules: {
                cedulaNitInput: {required: true}
            },
            messages:
                    {
                        cedulaNitInput: "<span style='color:red'> ✘ </span>"
                    },

            submitHandler: function (form) {
                var datos = {
                    cedulaNitInput: $("#cedulaNitInput").val()
                };

                $.ajax({
                    url: 'view/modulos/ajax.php',
                    method: 'post',
                    data: datos,
                    dataType: "json",

                    success: function (respuesta)
                    {
                        if (respuesta["respuesta"]) {
                            var nombre = respuesta["respuesta"].toString().split("ª")[1];
                            var telefono = respuesta["respuesta"].toString().split("ª")[2];
                            var direccion = respuesta["respuesta"].toString().split("ª")[3];
                            var encargado = respuesta["respuesta"].toString().split("ª")[4];
                            $('#nombreestablecimientoInput').val(nombre);
                            $('#telefonoInput').val(telefono);
                            $('#direccionInput').val(direccion);
                            $('#representanteInput').val(encargado);
                            if (nombre !== "") {
                                exito("Información de Droguería Cargada", "");
                                $("#informacionInspeccion").show();
                            } else {
                                respuestaError("¡No se encuentra la drogueria!", "Por favor verificar datos o comunicarse con el administrador")
                                $("#informacionInspeccion").hide();
                            }
                        }
                    },
                    error: function (jqXHR, estado, error) {
                        console.log(estado);
                        console.log(error);
                        console.log(jqXHR);
                    },

                });
            }
        });

    });

    
    //FINALIZAR REVISION
    $("#finalizarRevision").click(function () {
        $("#modalFechaHora").val($("#dateInput").val()+" - "+$("#timeInput").val());
        $("#modalDatosDro").val($("#cedulaNitInput").val()+" - "+$("#nombreestablecimientoInput").val());
        $("#modalDatosFun").val($("#cedulaFunInput").val()+" - "+$("#nombrefuncionarioInput").val());
    });
    
    //REGISTRAR REVISION
    $("#finalizarRevision").click(function () {
        $("#formFormato").validate({
            rules: {
                calificacion11Input: {required: true},
                calificacion12Input: {required: true},
                calificacion13Input: {required: true},
                calificacion14Input: {required: true},
                calificacion21Input: {required: true},
                calificacion22Input: {required: true},
                calificacion23Input: {required: true},
                calificacion24Input: {required: true},
                calificacion25Input: {required: true},
                calificacion26Input: {required: true},
                calificacion27Input: {required: true},
                calificacion28Input: {required: true},
                calificacion31Input: {required: true},
                calificacion32Input: {required: true},
                calificacion33Input: {required: true},
                calificacion34Input: {required: true},
                calificacion35Input: {required: true},
                calificacion41Input: {required: true},
                calificacion42Input: {required: true},
                calificacion43Input: {required: true},
                calificacion44Input: {required: true},
                calificacion45Input: {required: true},
                calificacion46Input: {required: true},
                calificacion47Input: {required: true},
                calificacion51Input: {required: true},
                calificacion52Input: {required: true},
                calificacion53Input: {required: true},
                calificacion54Input: {required: true},
                calificacion55Input: {required: true},
                calificacion61Input: {required: true},
                calificacion62Input: {required: true},
                calificacion63Input: {required: true},
                calificacion64Input: {required: true},
                calificacion65Input: {required: true},
                calificacion66Input: {required: true},
                calificacion71Input: {required: true},
                calificacion72Input: {required: true},
                calificacion73Input: {required: true},
                calificacion74Input: {required: true},
                calificacion75Input: {required: true},
                calificacion76Input: {required: true},
                calificacion77Input: {required: true},
                calificacion78Input: {required: true},
                calificacion79Input: {required: true},
                calificacion710Input: {required: true},
                calificacion711Input: {required: true},
                calificacion712Input: {required: true},
                calificacion713Input: {required: true},
                calificacion714Input: {required: true},
                calificacion715Input: {required: true},
                calificacion716Input: {required: true},
                calificacion717Input: {required: true},
                calificacion718Input: {required: true},
                calificacion719Input: {required: true},
                calificacion720Input: {required: true},
                calificacion721Input: {required: true},
                calificacion722Input: {required: true}
            },
            messages:
                    {
                        calificacion11Input: "<span style='color:red'> ✘ </span>",
                        calificacion12Input: "<span style='color:red'> ✘ </span>",
                        calificacion13Input: "<span style='color:red'> ✘ </span>",
                        calificacion14Input: "<span style='color:red'> ✘ </span>",
                        calificacion21Input: "<span style='color:red'> ✘ </span>",
                        calificacion22Input: "<span style='color:red'> ✘ </span>",
                        calificacion23Input: "<span style='color:red'> ✘ </span>",
                        calificacion24Input: "<span style='color:red'> ✘ </span>",
                        calificacion25Input: "<span style='color:red'> ✘ </span>",
                        calificacion26Input: "<span style='color:red'> ✘ </span>",
                        calificacion27Input: "<span style='color:red'> ✘ </span>",
                        calificacion28Input: "<span style='color:red'> ✘ </span>",
                        calificacion31Input: "<span style='color:red'> ✘ </span>",
                        calificacion32Input: "<span style='color:red'> ✘ </span>",
                        calificacion33Input: "<span style='color:red'> ✘ </span>",
                        calificacion34Input: "<span style='color:red'> ✘ </span>",
                        calificacion35Input: "<span style='color:red'> ✘ </span>",
                        calificacion41Input: "<span style='color:red'> ✘ </span>",
                        calificacion42Input: "<span style='color:red'> ✘ </span>",
                        calificacion43Input: "<span style='color:red'> ✘ </span>",
                        calificacion44Input: "<span style='color:red'> ✘ </span>",
                        calificacion45Input: "<span style='color:red'> ✘ </span>",
                        calificacion46Input: "<span style='color:red'> ✘ </span>",
                        calificacion47Input: "<span style='color:red'> ✘ </span>",
                        calificacion51Input: "<span style='color:red'> ✘ </span>",
                        calificacion52Input: "<span style='color:red'> ✘ </span>",
                        calificacion53Input: "<span style='color:red'> ✘ </span>",
                        calificacion54Input: "<span style='color:red'> ✘ </span>",
                        calificacion55Input: "<span style='color:red'> ✘ </span>",
                        calificacion61Input: "<span style='color:red'> ✘ </span>",
                        calificacion62Input: "<span style='color:red'> ✘ </span>",
                        calificacion63Input: "<span style='color:red'> ✘ </span>",
                        calificacion64Input: "<span style='color:red'> ✘ </span>",
                        calificacion65Input: "<span style='color:red'> ✘ </span>",
                        calificacion66Input: "<span style='color:red'> ✘ </span>",
                        calificacion71Input: "<span style='color:red'> ✘ </span>",
                        calificacion72Input: "<span style='color:red'> ✘ </span>",
                        calificacion73Input: "<span style='color:red'> ✘ </span>",
                        calificacion74Input: "<span style='color:red'> ✘ </span>",
                        calificacion75Input: "<span style='color:red'> ✘ </span>",
                        calificacion76Input: "<span style='color:red'> ✘ </span>",
                        calificacion77Input: "<span style='color:red'> ✘ </span>",
                        calificacion78Input: "<span style='color:red'> ✘ </span>",
                        calificacion79Input: "<span style='color:red'> ✘ </span>",
                        calificacion710Input: "<span style='color:red'> ✘ </span>",
                        calificacion711Input: "<span style='color:red'> ✘ </span>",
                        calificacion712Input: "<span style='color:red'> ✘ </span>",
                        calificacion713Input: "<span style='color:red'> ✘ </span>",
                        calificacion714Input: "<span style='color:red'> ✘ </span>",
                        calificacion715Input: "<span style='color:red'> ✘ </span>",
                        calificacion716Input: "<span style='color:red'> ✘ </span>",
                        calificacion717Input: "<span style='color:red'> ✘ </span>",
                        calificacion718Input: "<span style='color:red'> ✘ </span>",
                        calificacion719Input: "<span style='color:red'> ✘ </span>",
                        calificacion720Input: "<span style='color:red'> ✘ </span>",
                        calificacion721Input: "<span style='color:red'> ✘ </span>",
                        calificacion722Input: "<span style='color:red'> ✘ </span>"
                    },

            submitHandler: function (form) {
                var datos = {
                    fecha: ($("#dateInput").val()+"-"+$("#timeInput").val()),
                    drogueria: $("#cedulaNitInput").val(),
                    funcionario: $("#cedulaFunInput").val(),
                    aspecto1 : ($("#calificacion11Input").val()+"-"+$("#calificacion12Input").val()+"-"+$("#calificacion13Input").val()+"-"+$("#calificacion14Input").val()),
                    aspecto2 : ($("#calificacion21Input").val()+"-"+$("#calificacion22Input").val()+"-"+$("#calificacion23Input").val()+"-"+$("#calificacion24Input").val()+"-"+
                                $("#calificacion25Input").val()+"-"+$("#calificacion26Input").val()+"-"+$("#calificacion27Input").val()+"-"+$("#calificacion28Input").val()),
                    aspecto3 : ($("#calificacion31Input").val()+"-"+$("#calificacion32Input").val()+"-"+$("#calificacion33Input").val()+"-"+$("#calificacion34Input").val()+"-"+
                                $("#calificacion35Input").val()),                        
                    aspecto4 : ($("#calificacion41Input").val()+"-"+$("#calificacion42Input").val()+"-"+$("#calificacion43Input").val()+"-"+$("#calificacion44Input").val()+"-"+
                                $("#calificacion45Input").val()+"-"+$("#calificacion46Input").val()+"-"+$("#calificacion47Input").val()),
                    aspecto5 : ($("#calificacion51Input").val()+"-"+$("#calificacion52Input").val()+"-"+$("#calificacion53Input").val()+"-"+$("#calificacion54Input").val()+"-"+
                                $("#calificacion55Input").val()),
                    aspecto6 : ($("#calificacion61Input").val()+"-"+$("#calificacion62Input").val()+"-"+$("#calificacion63Input").val()+"-"+$("#calificacion64Input").val()+"-"+
                                $("#calificacion65Input").val()+"-"+$("#calificacion66Input").val()),
                    aspecto7 : ($("#calificacion71Input").val()+"-"+$("#calificacion72Input").val()+"-"+$("#calificacion73Input").val()+"-"+$("#calificacion74Input").val()+"-"+
                                $("#calificacion75Input").val()+"-"+$("#calificacion76Input").val()+"-"+$("#calificacion77Input").val()+"-"+$("#calificacion78Input").val()+"-"+
                                $("#calificacion79Input").val()+"-"+$("#calificacion710Input").val()+"-"+$("#calificacion711Input").val()+"-"+$("#calificacion712Input").val()+"-"+
                                $("#calificacion713Input").val()+"-"+$("#calificacion714Input").val()+"-"+$("#calificacion715Input").val()+"-"+$("#calificacion716Input").val()+"-"+
                                $("#calificacion717Input").val()+"-"+$("#calificacion718Input").val()+"-"+$("#calificacion719Input").val()+"-"+$("#calificacion720Input").val()+"-"+
                                $("#calificacion721Input").val()+"-"+$("#calificacion722Input").val()),
                    obser : $("#calificacionObser").val()
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
                        if(respuesta["exito"]){
                            exito("¡ Revisión Registrada !","")
                            location.reload();
                        }else{
                            respuestaError("No se pudo registrar la revisión","Verificar datos")
                        }
                    },
                    error: function (jqXHR, estado, error) {
                        console.log(estado);
                        console.log(error);
                        console.log(jqXHR);
                    },

                });
            }
        });
    });
});


//VALIDA EL PUNTAJE DEL REQUERIMIENTO
function validacion() {
    var valor = parseInt($('#' + input).val());

    if (valor > 5 || valor < 1) {
        $('#' + input).val("");
    } else {
        if (valor < 3) {
            $('#' + input).css('border', '2px solid red');
            input = "";
        } else {
            $('#' + input).css('border', '2px solid green');
            input = "";
        }
    }
}