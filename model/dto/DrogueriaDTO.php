<?php

class DrogueriaDTO{
    private $nit;
    private $nombre;
    private $telefono;
    private $direccion;
    private $encargado;
    
    function __construct($nit, $nombre, $telefono, $direccion, $encargado) {
        $this->nit = $nit;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->encargado = $encargado;
    }
    
    function getNit() {
        return $this->nit;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEncargado() {
        return $this->encargado;
    }

    function setNit($nit) {
        $this->nit = $nit;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEncargado($encargado) {
        $this->encargado = $encargado;
    }



}

