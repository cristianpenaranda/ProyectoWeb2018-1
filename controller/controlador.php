<?php

class controlador{
    private $negocio;
	
    public function __construct(){
	$this->negocio = new negocio();
    }

    public function generarPlantilla(){
	return negocio::generarPlantilla();
    }

    //CARGA ARCHIVO DEL ENLACE
    public function generarVista(){
	$enlace = filter_input(INPUT_GET, "ubicacion");
	if($enlace){
        	$enlace = $this->negocio->generarEnlace($enlace);
	}else {
		$enlace = $this->negocio->generarEnlace("Inicio");
	}
      	include_once $enlace;
    }
      

    //busca el usuario
    public function buscarUsuarioControlador($usuario, $contraseña, $tipoUsuario){
        return $this->negocio->buscarUsuarioNegocio($usuario, $contraseña, $tipoUsuario);
    }
    
    //busca el nombre del usuario
    public function buscarDatosControlador($usuario){
        return $this->negocio->buscarDatosNegocio($usuario);
    }

    public function buscarUsuarioClave($usuario){
        return $this->negocio->recordarClave($usuario);
    }

    public function verificarUsuarioControlador($usuario){
        return $this->negocio->verificarUsuarioNegocio($usuario);
    }
    
    public function registrarFuncionarioControlador($user) {
        return $this->negocio->registrarFuncionarioNegocio($user);
    }

    public function listarFuncionario() {
        return $this->negocio->listarFuncionario();
    }

}