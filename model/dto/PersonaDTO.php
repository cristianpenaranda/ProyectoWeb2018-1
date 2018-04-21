<?php

class PersonaDTO{
    
    private $cedula;
    private $nombre;
    private $telefono;
    private $correo;
    private $direecion;
    private $clave;
    private $tipo;
    
    function __construct($cedula, $nombre, $telefono, $correo, $direecion, $clave, $tipo) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->direecion = $direecion;
        $this->clave = $clave;
        $this->tipo = $tipo;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDireecion() {
        return $this->direecion;
    }

    function getClave() {
        return $this->clave;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDireecion($direecion) {
        $this->direecion = $direecion;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
}

