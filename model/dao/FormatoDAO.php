<?php

class FormatoDAO{
    
    function registroFormatoDAO($formato){
        $conexion = Conexion::crearConexion();
        $exito = false;
        try {
            $fun = $formato->getFuncionario();
            $a1 = $formato->getAspecto1();
            $a2 = $formato->getAspecto2();
            $a3 = $formato->getAspecto3();
            $a4 = $formato->getAspecto4();
            $a5 = $formato->getAspecto5();
            $a6 = $formato->getAspecto6();
            $a7 = $formato->getAspecto7();
            $ob = $formato->getObser();
            $cal = $formato->getCalificacion();
            $rel = $formato->getResultado();
            $fecha = $formato->getFecha();
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("INSERT INTO formato (funcionario,Aspecto1,Aspecto2,Aspecto3,Aspecto4,Aspecto5,Aspecto6,Aspecto7,observaciones,calificacion,resultado,fecha) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
            $stm->bindParam(1, $fun, PDO::PARAM_STR);
            $stm->bindParam(2, $a1, PDO::PARAM_STR);
            $stm->bindParam(3, $a2, PDO::PARAM_STR);
            $stm->bindParam(4, $a3, PDO::PARAM_STR);
            $stm->bindParam(5, $a4, PDO::PARAM_STR);
            $stm->bindParam(6, $a5, PDO::PARAM_STR);
            $stm->bindParam(7, $a6, PDO::PARAM_STR);
            $stm->bindParam(8, $a7, PDO::PARAM_STR);
            $stm->bindParam(9, $ob, PDO::PARAM_STR);
            $stm->bindParam(10, $cal, PDO::PARAM_STR);
            $stm->bindParam(11, $rel, PDO::PARAM_STR);
            $stm->bindParam(12, $fecha, PDO::PARAM_STR);
            $exito = $stm->execute();
        } catch (Exception $ex) {
            throw new Exception("Error al insertar formato en bd");
        }
        return $exito;
    }
    
    
    
    //busca el ultimo formato ingresado 
    function buscarUltimoFormatoDAO(){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("SELECT * FROM formato ORDER BY id DESC LIMIT 1");
            $stm->execute();
            $exito = $stm->fetch();
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el ultimo formato en bd");
        }
        return $exito;
    }
    
    
    //ingresar formato y drogueria a nueva tabla 
    function ingresarFormatoDrogueriaDAO($dro,$id){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("INSERT INTO formato_drogueria (drogueria,formato) VALUES (?,?)");
            $stm->bindParam(1, $dro, PDO::PARAM_STR);
            $stm->bindParam(2, $id, PDO::PARAM_STR);
            $exito = $stm->execute();
        } catch (Exception $ex) {
            throw new Exception("Error al ingresar formato y drogueria a nueva tabla");
        }
        return $exito;
    }
    
    //listar los formatos
    function listarFormatosDAO(){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("SELECT f.id,d.nombre,d.nit,f.fecha,f.resultado FROM drogueria d, formato f INNER JOIN formato_drogueria fd ON fd.formato = f.id WHERE fd.drogueria = d.nit");
            $stm->execute();
            $cadena ="";
            while($for = $stm->fetch()){
             $cadena.= '<tr><td>'.$for['id'].'</td>'
                        .'<td>'.$for['nombre'].'</td>'
                        . '<td>'.$for['fecha'].'</td>'
                        .'<td>'.$for['resultado'].'</td>'
                        . '<td><button type="button" id="'.$for['id'].'" name="'.$for['nit'].'" href="#VerInfoFormato" class="ActionVerFormato btn btn-outline-danger ml-2" title="Abrir PDF" data-toggle="modal"><ion-icon name="download"></ion-icon></button>'
                        . '</tr>';
            }

        } catch (Exception $ex) {
            throw new Exception("Error al listar formatos");
        }
        return $cadena;
    }
    
    
    function formatoPDFDAO($id, $nit){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("SELECT p.cedula,p.nombre,p.apellidos,
                                                d.nit,d.nombre AS nombreDro,d.direccion,d.telefono,d.encargado,
                                                f.Aspecto1,f.Aspecto2,f.Aspecto3,f.Aspecto4,f.Aspecto5,f.Aspecto6,f.Aspecto7,f.observaciones,f.calificacion,f.resultado,f.fecha
                                       FROM persona p, drogueria d, formato f 
                                       INNER JOIN formato_drogueria fd 
                                       ON fd.formato = f.id 
                                       WHERE fd.drogueria = d.nit
                                       AND f.funcionario = p.cedula
                                       AND fd.formato = ?
                                       AND fd.drogueria = ?");
            $stm->bindParam(1, $id, PDO::PARAM_STR);
            $stm->bindParam(2, $nit, PDO::PARAM_STR);
            $stm->execute();
            $cadena = $stm->fetch();
        } catch (Exception $ex) {
            throw new Exception("Error al generar pdf");
        }
        return $cadena;
    }
}

