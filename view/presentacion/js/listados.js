$(document).ready(function () {
   $('.fondoTablas article').hide();
   //$('.FormadoPDF').hide();   
   
   //METODOS BUSCAR EN TABLA FUNCIONARIOS
   (function ($) {
        $('#buscarFun').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('#bodyFuncionarios tr').hide();
            $('#bodyFuncionarios tr').filter(function () {
                return rex.test($(this).text());
            }).show();
        })
    }(jQuery));
    
   //METODOS BUSCAR EN TABLA DROGUERIAS
   (function ($) {
        $('#buscarDro').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('#bodyDroguerias tr').hide();
            $('#bodyDroguerias tr').filter(function () {
                return rex.test($(this).text());
            }).show();
        })
    }(jQuery));
    
   //METODOS BUSCAR EN TABLA FORMATOS
   (function ($) {
        $('#buscarFor').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('#bodyFormatos tr').hide();
            $('#bodyFormatos tr').filter(function () {
                return rex.test($(this).text());
            }).show();
        })
    }(jQuery));
    
    //CARGA TABLA DE FUNCIONARIOS
    $("#listarfuncionario").click(function () {
        $('.fondoTablas article').hide();
        $('.fondoTablas #tablaFuncionarios').show();
        $.ajax({

            url: 'view/modulos/ajax.php?listarFuncionario=true',
            dataType: 'text',
            success: function (respuesta) {
                document.getElementById("bodyFuncionarios").innerHTML = respuesta;
                
                
                //VER INFORMACION DEL FUNCIONARIO
                $(".ActionVerFuncionario").bind("click", function () {
                    var datos = {
                        idFuncionario: $(this).attr("id")
                    };
                    $.ajax({
                        url: 'view/modulos/ajax.php',
                        method: 'post',
                        data: datos,
                        dataType: "json",

                        success: function (respuesta)
                        {
                            var cedula = respuesta["respuesta"].toString().split("ª")[0];
                            var nombres = respuesta["respuesta"].toString().split("ª")[1];
                            var apellidos = respuesta["respuesta"].toString().split("ª")[2];
                            var telefono = respuesta["respuesta"].toString().split("ª")[3];
                            var domicilio = respuesta["respuesta"].toString().split("ª")[4];
                            var correo = respuesta["respuesta"].toString().split("ª")[5];
                            $('#ModalCedulaEmpleado').val(cedula);
                            $('#ModalNombresEmpleado').val(nombres);
                            $('#ModalApellidosEmpleado').val(apellidos);
                            $('#ModalTelefonoEmpleado').val(telefono);
                            $('#ModalDomicilioEmpleado').val(domicilio);
                            $('#ModalCorreoEmpleado').val(correo);
                        },
                        error: function (jqXHR, estado, error) {
                            console.log(estado);
                            console.log(error);
                            console.log(jqXHR);
                        }

                    });
                });

                //ELIMINAR FUNCIONARIO
                $(".ActionEliminarFuncionario").bind("click", function () {
                    swal({
                        title: "¿Está seguro de eliminar el funcionario?",
                        text: "",
                        icon: "warning",                        
                        buttons: ["Cancelar", "Aceptar"],
                        dangerMode: true,
                    })
                            .then((willDelete) => {
                                if (willDelete) {
                                    var datos = {
                                        idFuncionarioEliminar: $(this).attr("id")
                                    };
                                    $.ajax({
                                        url: 'view/modulos/ajax.php',
                                        method: 'post',
                                        data: datos,
                                        dataType: "json",

                                        success: function (respuesta)
                                        {
                                            if (respuesta["exito"]) {
                                                exito("Funcionario eliminado", "");
                                                location.reload();
                                            } else if (!respuesta["exito"]) {
                                                respuestaError("Error al eliminar", "");
                                            }
                                        },
                                        error: function (jqXHR, estado, error) {
                                            console.log(estado);
                                            console.log(error);
                                            console.log(jqXHR);
                                        }

                                    });
                                }
                            });
                });
                
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
                console.log(jqXHR);
            },
        });
    });
    
    
    //CARGA TABLA DE DROGUERIAS
    $("#listarDroguerias").click(function () {
        $('.fondoTablas article').hide();
        $('.fondoTablas #tablaDroguerias').show();
        $.ajax({

            url: 'view/modulos/ajax.php?listarDrogueria=true',
            dataType: 'text',
            success: function (respuesta) {
                document.getElementById("bodyDroguerias").innerHTML = respuesta;
                
                
                
                //VER INFORMACION DE LA DROGUERIA
                $(".ActionVerDrogueria").bind("click", function () {
                    var datos = {
                        idDrogueria: $(this).attr("id")
                    };
                    $.ajax({
                        url: 'view/modulos/ajax.php',
                        method: 'post',
                        data: datos,
                        dataType: "json",

                        success: function (respuesta)
                        {
                            var nit = respuesta["respuesta"].toString().split("ª")[0];
                            var nombre = respuesta["respuesta"].toString().split("ª")[1];
                            var telefono = respuesta["respuesta"].toString().split("ª")[2];
                            var direccion = respuesta["respuesta"].toString().split("ª")[3];
                            var encargado = respuesta["respuesta"].toString().split("ª")[4];
                            $('#ModalDrogueriaNit').val(nit);
                            $('#ModalDrogueriaNombre').val(nombre);
                            $('#ModalDrogueriaTelefono').val(telefono);
                            $('#ModalDrogueriaDireccion').val(direccion);
                            $('#ModalDrogueriaEncargado').val(encargado);
                        },
                        error: function (jqXHR, estado, error) {
                            console.log(estado);
                            console.log(error);
                            console.log(jqXHR);
                        }

                    });
                });

                //ELIMINAR DROGUERIA
                $(".ActionEliminarDrogueria").bind("click", function () {
                    swal({
                        title: "¿Está seguro de eliminar la Drogueria?",
                        text: "",
                        icon: "warning",                        
                        buttons: ["Cancelar", "Aceptar"],
                        dangerMode: true,
                    })
                            .then((willDelete) => {
                                if (willDelete) {
                                    var datos = {
                                        idDrogueriaEliminar: $(this).attr("id")
                                    };
                                    $.ajax({
                                        url: 'view/modulos/ajax.php',
                                        method: 'post',
                                        data: datos,
                                        dataType: "json",

                                        success: function (respuesta)
                                        {
                                            if (respuesta["exito"]) {
                                                exito("Droguería eliminada", "");
                                                location.reload();
                                            } else if (!respuesta["exito"]) {
                                                respuestaError("Error al eliminar", "");
                                            }
                                        },
                                        error: function (jqXHR, estado, error) {
                                            console.log(estado);
                                            console.log(error);
                                            console.log(jqXHR);
                                        }

                                    });
                                }
                            });
                });
                
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
                console.log(jqXHR);
            },
        });
    });
    
    
    //CARGA TABLA DE FORMATOS
    $("#listarformatos").click(function () {
        $('.fondoTablas article').hide();
        $('.fondoTablas #tablaFormatos').show();
        $.ajax({
            url: 'view/modulos/ajax.php?listarFormatos=true',
            dataType: 'text',
            success: function (respuesta) {
                document.getElementById("bodyFormatos").innerHTML = respuesta;
                //VER INFORMACION DEL FORMATO
                $(".ActionVerFormato").bind("click", function () {
                    var datos = {
                        idFormatoDPF: $(this).attr("id"),
                        nameFormatoDPF: $(this).attr("name")
                    };
                    $.ajax({
                        url: 'view/modulos/ajax.php',
                        method: 'post',
                        data: datos,
                        dataType: "text",

                        success: function (respuesta)
                        {
                            $('#datePDF').val(respuesta.split("ª")[18].split("-")[0]);
                            $('#timePDF').val(respuesta.split("ª")[18].split("-")[1]);
                            $('#cedulaNitPDF').val(respuesta.split("ª")[3]);
                            $('#nombreestablecimientoPDF').val(respuesta.split("ª")[4]);
                            $('#direccionPDF').val(respuesta.split("ª")[5]);
                            $('#telefonoPDF').val(respuesta.split("ª")[6]);
                            $('#representantePDF').val(respuesta.split("ª")[7]);
                            $('#cedulaFunPDF').val(respuesta.split("ª")[0]);
                            $('#nombrefuncionarioPDF').val((respuesta.split("ª")[1])+" "+(respuesta.split("ª")[2]));
                            $('#calificacion11PDF').val(respuesta.split("ª")[8].split("-")[0]);
                            $('#calificacion12PDF').val(respuesta.split("ª")[8].split("-")[1]);
                            $('#calificacion13PDF').val(respuesta.split("ª")[8].split("-")[2]);
                            $('#calificacion14PDF').val(respuesta.split("ª")[8].split("-")[3]);
                            
                            $('#calificacion21PDF').val(respuesta.split("ª")[9].split("-")[0]);
                            $('#calificacion22PDF').val(respuesta.split("ª")[9].split("-")[1]);
                            $('#calificacion23PDF').val(respuesta.split("ª")[9].split("-")[2]);
                            $('#calificacion24PDF').val(respuesta.split("ª")[9].split("-")[3]);
                            $('#calificacion25PDF').val(respuesta.split("ª")[9].split("-")[4]);
                            $('#calificacion26PDF').val(respuesta.split("ª")[9].split("-")[5]);
                            $('#calificacion27PDF').val(respuesta.split("ª")[9].split("-")[6]);
                            $('#calificacion28PDF').val(respuesta.split("ª")[9].split("-")[7]);
                            
                            $('#calificacion31PDF').val(respuesta.split("ª")[10].split("-")[0]);
                            $('#calificacion32PDF').val(respuesta.split("ª")[10].split("-")[1]);
                            $('#calificacion33PDF').val(respuesta.split("ª")[10].split("-")[2]);
                            $('#calificacion34PDF').val(respuesta.split("ª")[10].split("-")[3]);
                            $('#calificacion35PDF').val(respuesta.split("ª")[10].split("-")[4]);
                            
                            $('#calificacion41PDF').val(respuesta.split("ª")[11].split("-")[0]);
                            $('#calificacion42PDF').val(respuesta.split("ª")[11].split("-")[1]);
                            $('#calificacion43PDF').val(respuesta.split("ª")[11].split("-")[2]);
                            $('#calificacion44PDF').val(respuesta.split("ª")[11].split("-")[3]);
                            $('#calificacion45PDF').val(respuesta.split("ª")[11].split("-")[4]);
                            $('#calificacion46PDF').val(respuesta.split("ª")[11].split("-")[5]);
                            $('#calificacion47PDF').val(respuesta.split("ª")[11].split("-")[6]);
                            
                            $('#calificacion51PDF').val(respuesta.split("ª")[12].split("-")[0]);
                            $('#calificacion52PDF').val(respuesta.split("ª")[12].split("-")[1]);
                            $('#calificacion53PDF').val(respuesta.split("ª")[12].split("-")[2]);
                            $('#calificacion54PDF').val(respuesta.split("ª")[12].split("-")[3]);
                            $('#calificacion55PDF').val(respuesta.split("ª")[12].split("-")[4]);
                            
                            $('#calificacion61PDF').val(respuesta.split("ª")[13].split("-")[0]);
                            $('#calificacion62PDF').val(respuesta.split("ª")[13].split("-")[1]);
                            $('#calificacion63PDF').val(respuesta.split("ª")[13].split("-")[2]);
                            $('#calificacion64PDF').val(respuesta.split("ª")[13].split("-")[3]);
                            $('#calificacion65PDF').val(respuesta.split("ª")[13].split("-")[4]);
                            $('#calificacion66PDF').val(respuesta.split("ª")[13].split("-")[5]);
                            $('#calificacion67PDF').val(respuesta.split("ª")[13].split("-")[6]);
                            
                            $('#calificacion71PDF').val(respuesta.split("ª")[14].split("-")[0]);
                            $('#calificacion72PDF').val(respuesta.split("ª")[14].split("-")[1]);
                            $('#calificacion73PDF').val(respuesta.split("ª")[14].split("-")[2]);
                            $('#calificacion74PDF').val(respuesta.split("ª")[14].split("-")[3]);
                            $('#calificacion75PDF').val(respuesta.split("ª")[14].split("-")[4]);
                            $('#calificacion76PDF').val(respuesta.split("ª")[14].split("-")[5]);
                            $('#calificacion77PDF').val(respuesta.split("ª")[14].split("-")[6]);
                            $('#calificacion78PDF').val(respuesta.split("ª")[14].split("-")[7]);
                            $('#calificacion79PDF').val(respuesta.split("ª")[14].split("-")[8]);
                            $('#calificacion710PDF').val(respuesta.split("ª")[14].split("-")[9]);
                            $('#calificacion711PDF').val(respuesta.split("ª")[14].split("-")[10]);
                            $('#calificacion712PDF').val(respuesta.split("ª")[14].split("-")[11]);
                            $('#calificacion713PDF').val(respuesta.split("ª")[14].split("-")[12]);
                            $('#calificacion714PDF').val(respuesta.split("ª")[14].split("-")[13]);
                            $('#calificacion715PDF').val(respuesta.split("ª")[14].split("-")[14]);
                            $('#calificacion716PDF').val(respuesta.split("ª")[14].split("-")[15]);
                            $('#calificacion717PDF').val(respuesta.split("ª")[14].split("-")[16]);
                            $('#calificacion718PDF').val(respuesta.split("ª")[14].split("-")[17]);
                            $('#calificacion719PDF').val(respuesta.split("ª")[14].split("-")[18]);
                            $('#calificacion720PDF').val(respuesta.split("ª")[14].split("-")[19]);
                            $('#calificacion721PDF').val(respuesta.split("ª")[14].split("-")[20]);
                            $('#calificacion722PDF').val(respuesta.split("ª")[14].split("-")[21]);
                            
                            $('#calificacionObser').val(respuesta.split("ª")[15]);
                            $('#calificacionCal').val(respuesta.split("ª")[16]);
                            $('#calificacionRes').val(respuesta.split("ª")[17]);
                            
                        },
                        error: function (jqXHR, estado, error) {
                            console.log(estado);
                            console.log(error);
                            console.log(jqXHR);
                        }

                    });
                });
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
                console.log(jqXHR);
            },
        });
    });
});