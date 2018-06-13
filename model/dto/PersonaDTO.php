<?php

class PersonaDTO{
    
    private $cedula;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $correo;
    private $direecion;
    private $clave;
    private $tipo;
    
    function __construct($cedula, $nombre, $apellidos, $telefono, $correo, $direecion, $clave, $tipo) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->direccion = $direecion;
        $this->clave = $clave;
        $this->tipo = $tipo;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }
    
    function getApellidos() {
        return $this->apellidos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDireccion() {
        return $this->direccion;
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
    
    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDireccion($direccion) {
        $this->direecion = $direccion;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
}

