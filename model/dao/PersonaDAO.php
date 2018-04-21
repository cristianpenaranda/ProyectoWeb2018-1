<?php

class PersonaDAO{
    public function IngresarAdministrador($personaDTO) {
        $conexion = Conexion::crearConexion();
        $persona = false;
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select cedula,nombre,telefono,correo,direccion,tipo from persona where cedula=? and clave=? and tipo=?");
            $stm->bindParam(1, $personaDTO->getCedula(), PDO::PARAM_STR);
            $stm->bindParam(2, $personaDTO->getClave(), PDO::PARAM_STR);
            $ok = $stm->execute();
            if ($ok) {
                $persona=$stm->fetch();
            }
        } catch (Exception $ex) {
            throw new Exception("Error al ingresar administrador bd");
        }
        return $persona;
    }
    
    public function IngresarFuncionario($personaDTO) {
        $conexion = Conexion::crearConexion();
        $persona = false;
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select cedula,nombre,telefono,correo,direccion,tipo from persona where cedula=? and clave=? and tipo=?");
            $stm->bindParam(1, $personaDTO->getCedula(), PDO::PARAM_STR);
            $stm->bindParam(2, $personaDTO->getClave(), PDO::PARAM_STR);
            $ok = $stm->execute();
            if ($ok) {
                $persona=$stm->fetch();
            }
        } catch (Exception $ex) {
            throw new Exception("Error al ingresar funcionario bd");
        }
        return $persona;
    }
}

