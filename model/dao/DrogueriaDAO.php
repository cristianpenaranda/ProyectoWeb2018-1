<?php

class DrogueriaDAO{

    //busca la Drogueria
    function buscarDrogueriaDAO($nit){
        $conexion = Conexion::crearConexion();
        $exito = false;
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select nombre from drogueria where nit=?");
            $stm->bindParam(1, $nit, PDO::PARAM_STR);
            $stm->execute();
            $row = $stm->rowCount();
            if ($row>0) {
                $exito=true;
            }
        } catch (Exception $ex) {
            throw new Exception("Error al buscar la drogueria en bd");
        }
        return $exito;
    }
      
    
    //registra la drogueria
    function registrarDrogueriaDAO($drogueria){
        $conexion = Conexion::crearConexion();
        $exito = false;
        try {
            $nit = $drogueria->getNit();
            $nombre = $drogueria->getNombre();
            $telefono = $drogueria->getTelefono();
            $direccion = $drogueria->getDireccion();
            $encargado = $drogueria->getEncargado();
            
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("INSERT INTO  drogueria(nit, nombre, telefono, direccion, encargado) VALUES (?,?,?,?,?)");
            $stm->bindParam(1, $nit, PDO::PARAM_STR);
            $stm->bindParam(2, $nombre, PDO::PARAM_STR);
            $stm->bindParam(3, $telefono, PDO::PARAM_STR);
            $stm->bindParam(4, $direccion, PDO::PARAM_STR);
            $stm->bindParam(5, $encargado, PDO::PARAM_STR);
            $exito = $stm->execute();
        } catch (Exception $ex) {
            throw new Exception("Error al registrar la drogueria");
        }
        return $exito;
    }
    
    
    function listarDrogueriaDAO(){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select nit,nombre,telefono,direccion,encargado from drogueria");
            $stm->execute();
            $cadena ="";
            while($dro = $stm->fetch()){
             $cadena.= '<tr><td>'.$dro['nit'].'</td>'
                        . '<td>'.$dro['nombre'].'</td>'
                        . '<td><button type="button" id="'.$dro['nit'].'" class="ActionVerDrogueria btn btn-outline-secondary ml-2" title="Ver Información" href="#VerInfoDrogueria" data-toggle="modal"><span class="ion-eye"></span></button>'
                        . '<button type="button" id="'.$dro['nit'].'" class="ActionEliminarDrogueria btn btn-outline-danger ml-2" title="Eliminar Drogueria"><span class="ion-close-round"></span></button></td>'
                        . '</tr>';
            }

        } catch (Exception $ex) {
            throw new Exception("Error al listar funcionario");
        }
        return $cadena;
    }
        

    //busca datos de la drogueria
    function buscarDatosDrogueriaUsuario($nit){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select nit,nombre,telefono,direccion,encargado from drogueria where nit=?");
            $stm->bindParam(1, $nit, PDO::PARAM_STR);
            $stm->execute();
            $dro = $stm->fetch();
        } catch (Exception $ex) {
            throw new Exception("Error al buscar datos de la drogueria");
        }
        return $dro;
    }
    
    //ELIMINAR drogueria 
    function eliminarDrogueriaDAO($nit){
        $conexion = Conexion::crearConexion();
        $exito = false;
        try {           
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("DELETE FROM drogueria WHERE nit=?");
            $stm->bindParam(1, $nit, PDO::PARAM_STR);
            $exito = $stm->execute();
        } catch (Exception $ex) {
            throw new Exception("Error al eliminar la drogueria");
        }
        return $exito;
    }
}

