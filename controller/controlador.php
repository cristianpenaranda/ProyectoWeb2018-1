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
        
    public function ingresarAdministradorControlador($personaDTO) {
        return $this->negocio->ingresarAdministradorNegocio($personaDTO);
    }
    
    public function ingresarFuncionarioControlador($personaDTO) {
        return $this->negocio->ingresarFuncionarioNegocio($personaDTO);
    }

}