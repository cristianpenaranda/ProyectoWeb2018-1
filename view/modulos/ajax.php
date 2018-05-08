<?php

include_once '../../model/dto/PersonaDTO.php';
require_once '../../model/dao/PersonaDAO.php';
require_once '../../controller/controlador.php';
require_once '../../model/negocio.php';
require_once '../../model/mail/Mail.php';
require_once '../../model/conexion.php';

class Ajax {
    
    //    Metodo que identifica el usuario que se quiere loguear
    public function LoguearUsuarioAjax($usuario, $contraseña, $tipoUsuario) {
        $exito = false;
        try {
            $exito = $this->buscarUsuarioAjax($usuario, $contraseña, $tipoUsuario);
            if($exito){
             $controlador = new controlador();
             $nombreLogueado = $controlador->buscarDatosControlador($usuario);
             session_start();
             $user = new PersonaDTO($usuario, $nombreLogueado['nombre'], $nombreLogueado['apellidos'], $nombreLogueado['telefono'], 
                                    $nombreLogueado['correo'], $nombreLogueado['direccion'], null, $tipoUsuario);
             $_SESSION["Usuario"] = serialize($user); 
            }else{

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


    //    Metodo que recuerda al usuario su contraseña
    public function RecordarUsuarioAjax($usuario) {
        $exito=false;
        try{
            $controlador = new controlador();
            $mensaje = $controlador->buscarUsuarioClave($usuario);
            $mail = new Mail();
            $mail->enviarCorreoRecordarContraseña($mensaje['nombre'],$mensaje['apellidos'],$mensaje['correo'],$mensaje['clave'],$mensaje['tipo']);
        }catch(Exception $ex){
            echo 'Algo salió mal';
        }
        if($mail){
            echo 'exito';
        }else{
            echo 'error';
        }

        

    }

    //busca el usuario
    public function buscarUsuarioAjax($usuario, $contraseña, $tipoUsuario) {
        $controlador = new controlador();
        return $controlador->buscarUsuarioControlador($usuario, $contraseña, $tipoUsuario);
    }
    
    
    //    Metodo que registra el usuario 
    public function RegistrarFuncionarioAjax($documento, $nombre, $apellido, $telefono, $correo, $direccion, $contraseña) {
        $exito = false;
        try {
            $controlador = new controlador();
            $buscar = $controlador->verificarUsuarioControlador($documento);

            if($buscar == 0){
                
                $user = new PersonaDTO($documento,$nombre,$apellido,$telefono,$correo,$direccion,$contraseña,"Funcionario");
                $registro = $controlador->registrarFuncionarioControlador($user);
                
                if($registro){
                    $exito = true;
                }
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "Funcionario con esa cédula ya está registrado"));
        }
    }

    public function listarFuncionario(){
        $controlador = new Controlador();
        echo $controlador->listarFuncionario();
    }
    
    
}

    //   Se crea una instancia de la clase Ajax, para poder acceder a los metodos que contiene
    $ajax = new Ajax();

    //   Si esta variable es diferente de Null se debe ingresar el usuario
    $loguear = isset($_POST["ingresarUsuario"],$_POST["ingresarContraseña"],$_POST["ingresarTipo"]);
    $recordar = isset($_POST["recordarUsuario"]);
    $registrar = isset($_POST["registrarDocumento"],$_POST["registrarNombre"],$_POST["registrarApellido"],$_POST["registrarTelefono"],
            $_POST["registrarCorreo"],$_POST["registrarDireccion"],$_POST["registrarContraseña"]);
    $listarFuncionario = isset($_GET["listarFuncionario"]);
    
    if($loguear){
        $ajax->LoguearUsuarioAjax($_POST["ingresarUsuario"],$_POST["ingresarContraseña"],$_POST["ingresarTipo"]);
    }else if($recordar){
        $ajax->RecordarUsuarioAjax($_POST["recordarUsuario"]);
    }else if($registrar){
        $ajax->RegistrarFuncionarioAjax($_POST["registrarDocumento"],$_POST["registrarNombre"],$_POST["registrarApellido"],$_POST["registrarTelefono"],
            $_POST["registrarCorreo"],$_POST["registrarDireccion"],$_POST["registrarContraseña"]);
    }else if($listarFuncionario && $_GET["listarFuncionario"]){
           $ajax->listarFuncionario();
    }

?>