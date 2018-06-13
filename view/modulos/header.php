<span class="flechaSubir btn-primary ion-chevron-up"></span>
<nav class="navbar navbar-dark bg-dark">
	<?php
		if(isset($_SESSION["Usuario"])){
			include 'model/dto/PersonaDTO.php';
			$user = unserialize($_SESSION['Usuario']);
			if($user->getTipo()=="Administrador"){
				echo '
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="">Administrador '.$user->getNombre().'</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      
        <li class="nav-item ml-3"  data-toggle="tooltip" data-placement="right" title="Mi Perfil"">
          <a class="nav-link" href="Perfil">
              <span class="ion-android-person"> Mi Perfil</span>
          </a>
        </li>
        
        <li class="nav-item ml-3"  data-toggle="tooltip" data-placement="right" title="Listados">
          <a class="nav-link" href="Listados">
              <span class="ion-android-list"> Listados</span>
          </a>
        </li>
        
        <li class="nav-item combo" data-toggle="tooltip" data-placement="right" title="Registros">
          <div class="dropdown bg-dark">
            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="ion-android-done-all"> Registros
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="RegistroFuncionario"><span class="ion-android-person-add"></span> Funcionarios</a>
              <a class="dropdown-item"  href="RegistroDrogueria"><span class="ion-ios-home"></span> Droguerias</a>
            </div>
          </div>
        </li>
        
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item btn-salir">
          <a class="nav-link" href="Salir" id="salir">
            <span class="ion-log-out"></span> Salir</a>
        </li>
      </ul>
    </div>
  </nav>';
			}else{
				echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="">Funcionario '.$user->getNombre().'</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mi Perfil">
          <a class="nav-link" href="Perfil">
              <span class="ion-android-person"> Mi Perfil</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registros">
          <a class="nav-link" href="RegistroFormato">
            <span class="nav-link-text ion-compose"> Registrar Formato</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">     
        <li class="nav-item btn-salir">
          <a class="nav-link"  href="Salir" id="salir">
            <span class="ion-log-out"></span> Salir</a>
        </li>
      </ul>
    </div>
  </nav>';
			}
		}
	?>
</nav>