<?php

include_once '../../model/dto/PersonaDTO.php';
require_once '../../model/dao/PersonaDAO.php';
require_once '../../controller/controlador.php';
require_once '../../model/negocio.php';
require_once '../../model/dto/PersonaDTO.php';
require_once '../../model/Mail/Mail.php';

class Ajax {
    
    //    Metodo que identifica el usuario que se quiere loguear
    public function IngresarUsuarioAjax($usuario, $contraseña, $tipoUsuario) {
        $exito = false;
        try {
            switch ($tipoUsuario) {
                case "1":
                    $exito = $this->ingresarAdministradorAjax($usuario, $contraseña);
                    break;
                case "2":
                    $exito = $this->ingresarFuncionarioAjax($usuario, $contraseña);
                    break;
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "Revise su Usuario y contraseña"));
        }
    }
    
    //   Metodo para loguear al Usuario administrador
    public function ingresarAministradorAjax($usuario, $contraseña) {
        session_start();
        $controlador = new controlador();
        return $controlador->ingresarAdministradorControlador(new PersonaDTO($usuario, null, null, null, null, $contraseña, null));
    }

    //   Metodo para loguear al Usuario funcionario
    public function ingresarFuncionarioAjax($usuario, $contraseña) {
        session_start();
        $controlador = new controlador();
        return $controlador->ingresarFuncionarioControlador(new PersonaDTO($usuario, null, null, null, null, $contraseña, null));
    }
    
}

    //   Se crea una instancia de la clase Ajax, para poder acceder a los metodos que contiene
    $ajax = new Ajax();

    //   Si esta variable es diferente de Null se debe ingresar el usuario
    $ingresarUsuario = isset($_POST["ingresarUsuario"], $_POST["ingresarContraseña"], $_POST["ingresarTipo"]);
    $recordarContraseña = isset($_POST["recordarUsuario"], $_POST["recordarCorreo"], $_POST["recuperarTipo"]);


    if ($ingresarUsuario) {
        $ajax->IngresarUsuarioAjax($_POST["ingresarUsuario"], $_POST["ingresarContraseña"], $_POST["ingresarTipo"]);
    } else if ($recordarContraseña) {
        $ajax->recordarContraseña($_POST["recordarUSuario"], $_POST["recordarCorreo"], $_POST["recuperarTipo"]);
    }
?>