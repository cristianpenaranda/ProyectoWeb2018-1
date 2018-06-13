<?php

class FormatoDTO{
    private $id;
    private $funcionario;
    private $aspecto1;
    private $aspecto2;
    private $aspecto3;
    private $aspecto4;
    private $aspecto5;
    private $aspecto6;
    private $aspecto7;
    private $obser;
    private $calificacion;
    private $resultado;
    private $fecha;
    
    function __construct($id, $funcionario, $aspecto1, $aspecto2, $aspecto3, $aspecto4, $aspecto5, $aspecto6, $aspecto7, $obser, $calificacion, $resultado, $fecha) {
        $this->id = $id;
        $this->funcionario = $funcionario;
        $this->aspecto1 = $aspecto1;
        $this->aspecto2 = $aspecto2;
        $this->aspecto3 = $aspecto3;
        $this->aspecto4 = $aspecto4;
        $this->aspecto5 = $aspecto5;
        $this->aspecto6 = $aspecto6;
        $this->aspecto7 = $aspecto7;
        $this->obser = $obser;
        $this->calificacion = $calificacion;
        $this->resultado = $resultado;
        $this->fecha = $fecha;
    }

    function getId() {
        return $this->id;
    }

    function getFuncionario() {
        return $this->funcionario;
    }

    function getAspecto1() {
        return $this->aspecto1;
    }

    function getAspecto2() {
        return $this->aspecto2;
    }

    function getAspecto3() {
        return $this->aspecto3;
    }

    function getAspecto4() {
        return $this->aspecto4;
    }

    function getAspecto5() {
        return $this->aspecto5;
    }

    function getAspecto6() {
        return $this->aspecto6;
    }

    function getAspecto7() {
        return $this->aspecto7;
    }

    function getObser() {
        return $this->obser;
    }

    function getCalificacion() {
        return $this->calificacion;
    }

    function getResultado() {
        return $this->resultado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFuncionario($funcionario) {
        $this->funcionario = $funcionario;
    }

    function setAspecto1($aspecto1) {
        $this->aspecto1 = $aspecto1;
    }

    function setAspecto2($aspecto2) {
        $this->aspecto2 = $aspecto2;
    }

    function setAspecto3($aspecto3) {
        $this->aspecto3 = $aspecto3;
    }

    function setAspecto4($aspecto4) {
        $this->aspecto4 = $aspecto4;
    }

    function setAspecto5($aspecto5) {
        $this->aspecto5 = $aspecto5;
    }

    function setAspecto6($aspecto6) {
        $this->aspecto6 = $aspecto6;
    }

    function setAspecto7($aspecto7) {
        $this->aspecto7 = $aspecto7;
    }

    function setObser($obser) {
        $this->obser = $obser;
    }

    function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }

    function setResultado($resultado) {
        $this->resultado = $resultado;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


    
}

