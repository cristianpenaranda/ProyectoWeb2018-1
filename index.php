<?php

//incluir archivos externos
require_once './controller/controlador.php';
require_once './model/negocio.php';

//activar almacenamiento en el bufer de la página
ob_start();
$controlador = new controlador();
$controlador->generarPlantilla();