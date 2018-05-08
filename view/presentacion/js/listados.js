$(document).ready(function () {
   $('.fondoTablas article').hide();
    
    //CARGA TABLA DE FUNCIONARIOS
    $("#listarfuncionario").click(function () {
        $('.fondoTablas article').hide();
        $('.fondoTablas #tablaFuncionarios').show();
        $.ajax({

            url: 'view/modulos/ajax.php?listarFuncionario=true',
            dataType: 'text',
            success: function (respuesta) {
                document.getElementById("bodyFuncionarios").innerHTML = respuesta;
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

            url: 'view/modulos/ajax.php?listarFuncionario=true',
            dataType: 'text',
            success: function (respuesta) {
                document.getElementById("bodyDroguerias").innerHTML = respuesta;
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

            url: 'view/modulos/ajax.php?listarFuncionario=true',
            dataType: 'text',
            success: function (respuesta) {
                document.getElementById("bodyFormatos").innerHTML = respuesta;
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
                console.log(jqXHR);
            },
        });
    });
});