<div class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="">Administrador</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mi Perfil">
          <a class="nav-link" href="">
              <span class="ion-android-person"> Mi Perfil</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registros">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <span class="nav-link-text ion-android-done-all"> Registros</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
                <a href=""><span class="ion-android-person-add"></span> Funcionarios</a>
            </li>
            <li>
              <a href=""><span class="ion-ios-home"></span> Droguerias</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Listados">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <span class="nav-link-text ion-android-list"> Listados</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
                <a href=""><span class="ion-person"></span> Funcionarios</a>
            </li>
            <li>
              <a href=""><span class="ion-ios-home"></span> Droguerias</a>
            </li>
            <li>
              <a href=""><span class="ion-clipboard"></span> Formatos</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Buscar...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <span class="ion-search"></span>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item btn-salir">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <span class="ion-log-out"></span> Salir</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
        
        
        
        
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>