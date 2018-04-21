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
		}else if($this->validarPestañaRedireccion($enlace)){
			return "view/modulos/".$enlace.".php";
		}else{
			return "view/modulos/pestañas/errorpage.php";
		}
	}

	//OBTIENE A PESTAÑA DEL MENU
	private function validarPestañas($pestaña){
		$exito=false;
		$pestañas=array("Inicio","Admin","Funcionario","ErrorPage","Perfil",
                                "inicio","admin","funcionario","errorpage","perfil");
		if(in_array($pestaña, $pestañas)){
			$exito=true;
		}
		return $exito;
	}

	//OBTIENE LA PESTAÑA A REDIRIGIR
	private function validarPestañaRedireccion($pestaña){
		$exito=false;
		$pestañas=array("otras");
		if(in_array($pestaña, $pestañas)){
			$exito=true;
		}
		return $exito;
	}
        
        public function ingresarAdministradorNegocio($personaDTO) {
            $persona = PersonaDAO::IngresarAdministrador($personaDTO);
            $exito = false;
            if ($persona) {
                $this->guardarDatosPerfilPersona($persona);
                $exito = true;
            }
            return $exito;
        }
        
        private function guardarDatosPerfilAdministrador($persona) {
            $datos = array("nombre" => $persona["nombre"],
                "cedula" => $persona["cedula"],
                "tipo" => $persona["1"],
                "correo" => $persona["correo"],
                "telefono" => $persona["telefono"],
                "direccion" => $persona["direccion"]);
            $_SESSION["perfil"] = $datos;
        }
        
        public function ingresarFuncionarioNegocio($personaDTO) {
            $persona = PersonaDAO::IngresarFuncionario($personaDTO);
            $exito = false;
            if ($persona) {
                $this->guardarDatosPerfilFuncionario($persona);
                $exito = true;
            }
            return $exito;
        }
        
        private function guardarDatosPerfilFuncionario($persona) {
            $datos = array("nombre" => $persona["nombre"],
                "cedula" => $persona["cedula"],
                "tipo" => $persona["2"],
                "correo" => $persona["correo"],
                "telefono" => $persona["telefono"],
                "direccion" => $persona["direccion"]);
            $_SESSION["perfil"] = $datos;
        }
}