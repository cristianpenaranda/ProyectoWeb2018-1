<?php

include_once '../../model/dto/PersonaDTO.php';
require_once '../../model/dao/PersonaDAO.php';
include_once '../../model/dto/DrogueriaDTO.php';
require_once '../../model/dao/DrogueriaDAO.php';
include_once '../../model/dto/FormatoDTO.php';
require_once '../../model/dao/FormatoDAO.php';
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

    //lista los funcionarios
    public function listarFuncionario(){
        $controlador = new Controlador();
        echo $controlador->listarFuncionario();
    }
    
    //muestra la informacion de cada funcionario en modal
    public function mostrarInfoFuncionarioAjax($usuario) {
        $exito = false;
        $respuesta = "";
        try {
            $controlador = new controlador();
            $consulta = $controlador->buscarDatosControlador($usuario);
            if (isset($consulta)) {
                $exito = true;
                $respuesta = $consulta['cedula'].'ª'.$consulta['nombre'].'ª'.$consulta['apellidos'].'ª'.
                             $consulta['telefono'].'ª'.$consulta['direccion'].'ª'.$consulta['correo'].'ª';
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("respuesta" => $respuesta));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo mostrar la informacion"));
        }
    }
    
    //ELIMINAR FUNCIONARIO
    public function eliminarFuncionarioAjax($usuario) {
        $exito = false;
        try {
            $controlador = new controlador();
            $consulta = $controlador->eliminarFuncionarioControlador($usuario);
            if ($consulta) {
                $exito = true;
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo eliminar empleado"));
        }
    }
    
    //CAMBIAR CONTRASEÑA
    public function cambiarContraseñaAjax($usuario, $anterior, $nueva) {
        $exito = false;
        try {
            $controlador = new controlador();
            $verificar = $controlador->verificarClaveControlador($usuario, $anterior);
            if ($verificar) {
                $controlador->cambiarContraseñaControlador($usuario, $nueva);
                $exito = true;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        if ($exito) {
            echo 'exito';
        } else {
            echo 'no';
        }
    }
    
    
    
    ////////////////////////METODOS DROGUERIA////////////////////////////////////
    //busca la drogueria
    public function buscarDrogueriaAjax($drogueria) {
        $exito = false;
        try {
            $controlador = new controlador();
            $consulta = $controlador->buscarDrogueriaControlador($drogueria);
            if ($consulta) {
                $exito = true;
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se encuentra la drogueria"));
        }
    }
    
    
    //    Metodo que registra la drogueria 
    public function RegistrarDrogueriaAjax($nit, $nombre, $telefono, $direccion, $encargado) {
        $exito = false;
        try {
            $controlador = new controlador();
            $buscar = $controlador->buscarDrogueriaControlador($nit);
            
            if(!$buscar){
                
                $drogueria = new DrogueriaDTO($nit, $nombre, $telefono, $direccion, $encargado);
                $registro = $controlador->registrarDrogueriaControlador($drogueria);
                
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
            echo json_encode(array("exito" => false, "error" => "Drogueria con ese nit ya esta registrado"));
        }
    }

    //lista las droguerias
    public function listarDrogueriaAjax(){
        $controlador = new Controlador();
        echo $controlador->listarDrogueriaControlador();
    }
    
    
    //muestra la informacion de cada drogueria en modal
    public function mostrarInfoDrogueriaAjax($nit) {
        $exito = false;
        $respuesta = "";
        try {
            $controlador = new controlador();
            $consulta = $controlador->buscarDatosDrogueriaControlador($nit);
            if (isset($consulta)) {
                $exito = true;
                $respuesta = $consulta['nit'].'ª'.$consulta['nombre'].'ª'.$consulta['telefono'].'ª'.
                             $consulta['direccion'].'ª'.$consulta['encargado'];
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("respuesta" => $respuesta));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo mostrar la informacion"));
        }
    }
    
    //ELIMINAR DROGUERIA
    public function eliminarDrogueriaAjax($nit) {
        $exito = false;
        try {
            $controlador = new controlador();
            $consulta = $controlador->eliminarDrogueriaControlador($nit);
            if ($consulta) {
                $exito = true;
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo eliminar drogueria"));
        }
    }
    
    
    ////////////////////////METODOS FORMATOS////////////////////////////////////
    public function registroFormatoAjax($fecha,$dro,$fun,$asp1,$asp2,$asp3,$asp4,$asp5,$asp6,$asp7,$obser){
        $exito = false;
        try {
            $controlador = new controlador();
            $cal1 = $asp1[0]+$asp1[2]+$asp1[4]+$asp1[6];
            $cal2 = $asp2[0]+$asp2[2]+$asp2[4]+$asp2[6]+$asp2[8]+$asp2[10]+$asp2[12]+$asp2[14];
            $cal3 = $asp3[0]+$asp3[2]+$asp3[4]+$asp3[6]+$asp3[8];
            $cal4 = $asp4[0]+$asp4[2]+$asp4[4]+$asp4[6]+$asp4[8]+$asp4[10]+$asp4[12];
            $cal5 = $asp5[0]+$asp5[2]+$asp5[4]+$asp5[6]+$asp5[8];
            $cal6 = $asp6[0]+$asp6[2]+$asp6[4]+$asp6[6]+$asp6[8]+$asp6[10];
            $cal7 = $asp7[0]+$asp7[2]+$asp7[4]+$asp7[6]+$asp7[8]+$asp7[10]+$asp7[12]+
                    $asp7[14]+$asp7[16]+$asp7[18]+$asp7[20]+$asp7[22]+$asp7[24]+$asp7[26]+
                    $asp7[28]+$asp7[30]+$asp7[32]+$asp7[34]+$asp7[36]+$asp7[38]+$asp7[40]+
                    $asp7[42];
            $calTotal = (($cal1 + $cal2 + $cal3 + $cal4 + $cal5 + $cal6 + $cal7)/100)*60;
            if($calTotal > 171){
                $res = "Aprobado";
            }else{
                $res = "Negado";
            }            
            $formato = new FormatoDTO(null, $fun, $asp1, $asp2, $asp3, $asp4, $asp5, $asp6, $asp7, $obser, $calTotal, $res, $fecha);
            $registro = $controlador->registroFormatoControlador($formato);
            if ($registro) {
                $buscarUltimo = $controlador->buscarUltimoFormatoControlador();
                $id = $buscarUltimo['id'];
                $ingresar = $controlador->ingresarFormatoDrogueriaControlador($dro,$id);
                if($ingresar){
                    $exito = true;
                }
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo registrar formato"));
        }
    }

    //lista los formatos
    public function listarFormatosAjax(){
        $controlador = new Controlador();
        echo $controlador->listarFormatosControlador();
    }
    
    //visualiza el pdf
    public function formatoPDFAjax($id, $nit) {
        $exito = "false";
        try {
            $controlador = new controlador();
            $consulta = $controlador->formatoPDFControlador($id, $nit);
            if (isset($consulta)) {
                $respuesta = $consulta['cedula'].'ª'.$consulta['nombre'].'ª'.$consulta['apellidos'].'ª'.
                             $consulta['nit'].'ª'.$consulta['nombreDro'].'ª'.$consulta['direccion'].'ª'.$consulta['telefono'].'ª'.$consulta['encargado'].'ª'.
                             $consulta['Aspecto1'].'ª'.$consulta['Aspecto2'].'ª'.$consulta['Aspecto3'].'ª'.$consulta['Aspecto4'].'ª'.$consulta['Aspecto5'].'ª'.$consulta['Aspecto6'].'ª'.$consulta['Aspecto7'].'ª'.$consulta['observaciones'].'ª'.$consulta['calificacion'].'ª'.$consulta['resultado'].'ª'.$consulta['fecha'];
            
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        if ($exito) {
            echo $respuesta;
        } else {
            echo "false";
        }
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
    $mostrarInfoFuncionario = isset($_POST["idFuncionario"]);  
    $eliminarFuncionario = isset($_POST["idFuncionarioEliminar"]);      
    $registrarDrogueria = isset($_POST["registrarDrogueriaNit"],$_POST["registrarDrogueriaNombre"],$_POST["registrarDrogueriaTelefono"],
            $_POST["registrarDrogueriaDireccion"],$_POST["registrarDrogueriaEncargado"]);
    $listarDrogueria = isset($_GET["listarDrogueria"]); 
    $mostrarInfoDrogueria = isset($_POST["idDrogueria"]); 
    $eliminarDrogueria = isset($_POST["idDrogueriaEliminar"]);      
    $cambiarContraseña = isset($_POST["UsuarioCambiarContraseña"],$_POST["AnteriorCambiarContraseña"], $_POST["NuevaCambiarContraseña"]);
    $consultarDrogueria = isset($_POST["cedulaNitInput"]); 
    $registrarRevision = isset($_POST["fecha"],$_POST["drogueria"],$_POST["funcionario"],$_POST["aspecto1"],$_POST["aspecto2"],$_POST["aspecto3"],$_POST["aspecto4"],
            $_POST["aspecto5"],$_POST["aspecto6"],$_POST["aspecto7"],$_POST["obser"]);   
    $listarFormatos = isset($_GET["listarFormatos"]); 
    $formatoPDF = isset($_POST["idFormatoDPF"],$_POST["nameFormatoDPF"]); 
    
    
    if($loguear){
        $ajax->LoguearUsuarioAjax($_POST["ingresarUsuario"],$_POST["ingresarContraseña"],$_POST["ingresarTipo"]);
    }else if($recordar){
        $ajax->RecordarUsuarioAjax($_POST["recordarUsuario"]);
    }else if($registrar){
        $ajax->RegistrarFuncionarioAjax($_POST["registrarDocumento"],$_POST["registrarNombre"],$_POST["registrarApellido"],$_POST["registrarTelefono"],
            $_POST["registrarCorreo"],$_POST["registrarDireccion"],$_POST["registrarContraseña"]);
    }else if($listarFuncionario && $_GET["listarFuncionario"]){
           $ajax->listarFuncionario();
    }else if ($mostrarInfoFuncionario) {
         $ajax->mostrarInfoFuncionarioAjax($_POST["idFuncionario"]);
    }else if ($eliminarFuncionario) {
         $ajax->eliminarFuncionarioAjax($_POST["idFuncionarioEliminar"]);
    }else if ($registrarDrogueria) {
         $ajax->registrarDrogueriaAjax($_POST["registrarDrogueriaNit"],$_POST["registrarDrogueriaNombre"],$_POST["registrarDrogueriaTelefono"],
            $_POST["registrarDrogueriaDireccion"],$_POST["registrarDrogueriaEncargado"]);
    }else if($listarDrogueria && $_GET["listarDrogueria"]){
           $ajax->listarDrogueriaAjax();
    }else if ($mostrarInfoDrogueria) {
         $ajax->mostrarInfoDrogueriaAjax($_POST["idDrogueria"]);
    }else if ($eliminarDrogueria) {
         $ajax->eliminarDrogueriaAjax($_POST["idDrogueriaEliminar"]);
    }else if ($cambiarContraseña) {
        $ajax->cambiarContraseñaAjax($_POST["UsuarioCambiarContraseña"], $_POST["AnteriorCambiarContraseña"], $_POST["NuevaCambiarContraseña"]);
    }else if ($consultarDrogueria) {
        $ajax->mostrarInfoDrogueriaAjax($_POST["cedulaNitInput"]);
    }else if ($registrarRevision) {
        $ajax->registroFormatoAjax($_POST["fecha"],$_POST["drogueria"],$_POST["funcionario"],$_POST["aspecto1"],$_POST["aspecto2"],$_POST["aspecto3"],$_POST["aspecto4"],
            $_POST["aspecto5"],$_POST["aspecto6"],$_POST["aspecto7"],$_POST["obser"]);
    }else if($listarFormatos && $_GET["listarFormatos"]){
           $ajax->listarFormatosAjax();
    }else if ($formatoPDF) {
        $ajax->formatoPDFAjax($_POST["idFormatoDPF"],$_POST["nameFormatoDPF"]);
    }

?>