<?php

class negocio{

	//GENERA LA PLANTILLA
	public function generarPlantilla(){
		include 'view/plantilla.php';
	}

	//GENERA ENLACE DE LA BARRA DE NAVEGACION
	public function generarEnlace($enlace){
                if($this->validarPestañas($enlace)){
			return "view/modulos/pestañas/".$enlace.".php";
		}else if($this->validarPestañasAdmin($enlace)){
			return "view/modulos/pestañas/pestañasAdmin/".$enlace.".php";
		}else if($this->validarPestañasFun($enlace)){
			return "view/modulos/pestañas/pestañasFun/".$enlace.".php";
		}else{
			return "view/modulos/pestañas/errorpage.php";
		}
	}

        //OBTIENE A PESTAÑA DEL MENU DE ADIMINISTRADOR
	private function validarPestañasAdmin($pestaña){
		$exito=false;
		$pestañas=array("RegistroFuncionario","RegistroDrogueria","Listados");
		if(in_array($pestaña, $pestañas)){
			$exito=true;
		}
		return $exito;
	}

        //OBTIENE A PESTAÑA DEL MENU DE FUNCIONARIO
	private function validarPestañasFun($pestaña){
		$exito=false;
		$pestañas=array("RegistroFormato");
		if(in_array($pestaña, $pestañas)){
			$exito=true;
		}
		return $exito;
	}

	//OBTIENE A PESTAÑA DEL MENU
	private function validarPestañas($pestaña){
		$exito=false;
		$pestañas=array("Inicio","ErrorPage","Perfil","Salir");
		if(in_array($pestaña, $pestañas)){
			$exito=true;
		}
		return $exito;
	}


    //busca el usuario
    public function buscarUsuarioNegocio($usuario, $contraseña, $tipoUsuario){
        return PersonaDAO::buscarUsuario($usuario, $contraseña, $tipoUsuario);
    }

    //busca el nombre del usuario
    public function buscarDatosNegocio($usuario){
        return PersonaDAO::buscarDatosUsuario($usuario);
    }

    public function recordarClave($usuario){
    	return PersonaDAO::recordarUsuario($usuario);
    }

    public function verificarUsuarioNegocio($usuario){
    	return PersonaDAO::verificarUsuario($usuario);
    }
    
    public function registrarFuncionarioNegocio($user){
        return PersonaDAO::registrarFuncionarioDAO($user);
    }

    public function listarFuncionario(){
    	return PersonaDAO::listarFuncionario();
    }
    
    public function eliminarFuncionarioNegocio($usuario) {
        return PersonaDAO::eliminarFuncionarioDAO($usuario);
    }
    
    public function verificarClaveNegocio($usuario, $anterior){
        return PersonaDAO::verificarClaveDAO($usuario, $anterior);
    }
    
    public function cambiarContraseñaNegocio($usuario, $nueva) {
        return PersonaDAO::cambiarContraseñaDAO($usuario, $nueva);
    }
    
      
    
    //busca info de la drogueria
    public function buscarDrogueriaNegocio($nit){
        return DrogueriaDAO::buscarDrogueriaDAO($nit);
    }    
    
    //registra la drogueria
    public function registrarDrogueriaNegocio($drogueria){
        return DrogueriaDAO::registrarDrogueriaDAO($drogueria);
    }

    public function listarDrogueriaNegocio(){
    	return DrogueriaDAO::listarDrogueriaDAO();
    }
    
    //busca datos de la drogueria
    public function buscarDatosDrogueriaNegocio($nit){
        return DrogueriaDAO::buscarDatosDrogueriaUsuario($nit);
    }
    
    public function eliminarDrogueriaNegocio($nit) {
        return DrogueriaDAO::eliminarDrogueriaDAO($nit);
    }
    
    //registro del formato
    public function registroFormatoNegocio($formato) {
        return FormatoDAO::registroFormatoDAO($formato);
    }
    
    //busca el ultimo formato ingresado 
    public function buscarUltimoFormatoNegocio() {
        return FormatoDAO::buscarUltimoFormatoDAO();
    }
    
    //ingresar formato y drogueria a nueva tabla   
    public function ingresarFormatoDrogueriaNegocio($dro,$id) {
        return FormatoDAO::ingresarFormatoDrogueriaDAO($dro,$id);
    }

    public function listarFormatosNegocio(){
    	return FormatoDAO::listarFormatosDAO();
    }
    
    public function formatoPDFNegocio($id, $nit){
    	return FormatoDAO::formatoPDFDAO($id, $nit);
    }
}