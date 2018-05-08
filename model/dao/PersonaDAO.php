<?php

class PersonaDAO{

    //busca el usuario en la bd
    function buscarUsuario($usuario, $contraseña, $tipoUsuario){
        $conexion = Conexion::crearConexion();
        $persona = false;
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select nombre from persona where cedula=? and clave=? and tipo=?");
            $stm->bindParam(1, $usuario, PDO::PARAM_STR);
            $stm->bindParam(2, $contraseña, PDO::PARAM_STR);
            $stm->bindParam(3, $tipoUsuario, PDO::PARAM_STR);
            $stm->execute();
            $row = $stm->rowCount();
            if ($row>0) {
                $persona=true;
            }
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el usuario en bd");
        }
        return $persona;
    }


    //registra el usuario en la bd
    function registrarFuncionarioDAO($user){
        $conexion = Conexion::crearConexion();
        $exito = false;
        try {
            $cedula = $user->getCedula();
            $nombre = $user->getNombre();
            $apellido = $user->getApellidos();
            $telefono = $user->getTelefono();
            $correo = $user->getCorreo();
            $direccion = $user->getDireccion();
            $contraseña = $user->getClave();
            $tipo = $user->getTipo();
            
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("INSERT INTO  persona(cedula, nombre, apellidos, telefono, correo, direccion, clave, tipo) VALUES (?,?,?,?,?,?,?,?)");
            $stm->bindParam(1, $cedula, PDO::PARAM_STR);
            $stm->bindParam(2, $nombre, PDO::PARAM_STR);
            $stm->bindParam(3, $apellido, PDO::PARAM_STR);
            $stm->bindParam(4, $telefono, PDO::PARAM_STR);
            $stm->bindParam(5, $correo, PDO::PARAM_STR);
            $stm->bindParam(6, $direccion, PDO::PARAM_STR);
            $stm->bindParam(7, $contraseña, PDO::PARAM_STR);
            $stm->bindParam(8, $tipo, PDO::PARAM_STR);
            $exito = $stm->execute();
        } catch (Exception $ex) {
            throw new Exception("Error al registrar el usuario en bd");
        }
        return $exito;
    }


    //busca el nombre del usuario en la bd
    function buscarDatosUsuario($usuario){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select nombre,apellidos,cedula,telefono,correo,direccion,tipo from persona where cedula=?");
            $stm->bindParam(1, $usuario, PDO::PARAM_STR);
            $stm->execute();
            $persona = $stm->fetch();
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el usuario en bd");
        }
        return $persona;
    }

    function recordarUsuario($usuario){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select nombre,apellidos,correo,clave,tipo from persona where cedula=?");
            $stm->bindParam(1, $usuario, PDO::PARAM_STR);
            $stm->execute();
            $persona = $stm->fetch();
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el usuario en bd");
        }
        return $persona;
    }
    
    function verificarUsuario($usuario){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select nombre from persona where cedula=?");
            $stm->bindParam(1, $usuario, PDO::PARAM_STR);
            $stm->execute();
            $row = $stm->rowCount();
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el usuario en bd");
        }
        return $row;
    }

    function listarFuncionario(){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select cedula,nombre,apellidos from persona");
            $stm->execute();
            $cadena ="";
            while($personas = $stm->fetch()){
             $cadena.= '<tr><td>'.$personas['cedula'].'</td>'
                        . '<td>'.$personas['nombre'].' '.$personas['apellidos'].'</td>'
                        . '<td><button type="button" class="botones btn btn-outline-secondary ml-2"><span class="ion-eye"></span></button>'
                        . '<button type="button" class="botones btn btn-outline-danger ml-2"><span class="ion-close-round"></span></button></td>'
                        . '</tr>';
            }

        } catch (Exception $ex) {
            throw new Exception("Error al listar funcionario");
        }
        return $cadena;
    }
}

