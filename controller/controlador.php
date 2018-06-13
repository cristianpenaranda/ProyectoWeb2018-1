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
    
    public function EliminarFuncionarioControlador($usuario){
        return $this->negocio->EliminarFuncionarioNegocio($usuario);
    }
    
    public function verificarClaveControlador($usuario, $anterior){
        return $this->negocio->verificarClaveNegocio($usuario, $anterior);
    }
    
    public function cambiarContraseñaControlador($usuario, $nueva){
        return $this->negocio->cambiarContraseñaNegocio($usuario, $nueva);
    }
    
    
    
    //busca la drogueria
    public function buscarDrogueriaControlador($nit){
        return $this->negocio->buscarDrogueriaNegocio($nit);
    }    
    
    //registra la drogueria
    public function registrarDrogueriaControlador($drogueria){
        return $this->negocio->registrarDrogueriaNegocio($drogueria);
    }

    public function listarDrogueriaControlador() {
        return $this->negocio->listarDrogueriaNegocio();
    }
    
    //busca el nombre de ña drgoueria
    public function buscarDatosDrogueriaControlador($nit){
        return $this->negocio->buscarDatosDrogueriaNegocio($nit);
    }
    
    public function EliminarDrogueriaControlador($nit){
        return $this->negocio->EliminarDrogueriaNegocio($nit);
    }
    
    
    //registra el formato    
    public function registroFormatoControlador($formato){
        return $this->negocio->registroFormatoNegocio($formato);
    }
    
    //busca el ultimo formato ingresado    
    public function buscarUltimoFormatoControlador(){
        return $this->negocio->buscarUltimoFormatoNegocio();
    }
    
    //ingresar formato y drogueria a nueva tabla    
    public function ingresarFormatoDrogueriaControlador($dro,$id){
        return $this->negocio->ingresarFormatoDrogueriaNegocio($dro,$id);
    }
    
    public function listarFormatosControlador() {
        return $this->negocio->listarFormatosNegocio();
    }
    
    public function formatoPDFControlador($id, $nit){
        return $this->negocio->formatoPDFNegocio($id, $nit);
    }

}