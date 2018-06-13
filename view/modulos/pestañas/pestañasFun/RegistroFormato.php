<div class="fondoApp">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-3" style="margin: auto;display: block;">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Importante!</strong> Por favor completar todos los campos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h2 align="center">IDENTIFICACION DE ESTABLECIMIENTO</h2>
                <hr>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="dateInput">Fecha</label>
                        <input type="text" class="form-control" id="dateInput" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="timeInput">Hora</label>
                        <input type="text" class="form-control" id="timeInput" disabled>
                    </div>
                </div>
                <form class="card" id="cardInfoDrogueria" method="post">
                    <div class="card-header">Información del Establecimiento</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Cédula o Nit</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cedulaNitInput" name="cedulaNitInput" placeholder="Cedula o Nit del Establecimiento" required>
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-primary" id="buscarDro" title="Buscar Información Droguería"><ion-icon name="search"></ion-icon> Buscar</button>                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="representanteInput">Propietario y/o representante legal</label>
                                <input type="text" class="form-control" id="representanteInput" placeholder="Persona Encargada" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="nombreestablecimientoInput">Nombre del establecimiento</label>
                                <input type="text" class="form-control" id="nombreestablecimientoInput" placeholder="Nombre del establecimiento" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="direccionInput">Dirección</label>
                                <input type="text" class="form-control" id="direccionInput" placeholder="Dirección del establecimiento" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telefonoInput">Teléfono</label>
                                <input type="number" class="form-control" id="telefonoInput" placeholder="Teléfono del establecimiento" disabled>
                            </div>
                        </div>
                    </div>
                </form>
                <br>

                <div id="informacionInspeccion">                    
                    <form class="card" id="cardInfoFuncionario" method="post">
                        <div class="card-header">Información del Funcionario</div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label>Cédula</label>
                                    <?php
                                    if (isset($_SESSION["Usuario"])) {
                                        $user = unserialize($_SESSION['Usuario']);
                                    }
                                    echo'<input type="text" class="form-control" id="cedulaFunInput" name="cedulaFunInput" value="'.$user->getCedula().'" disabled>'
                                    ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label>Nombre del Funcionario</label>
                                    <?php
                                    if (isset($_SESSION["Usuario"])) {
                                        $user = unserialize($_SESSION['Usuario']);
                                    }
                                    echo'<input type="text" class="form-control" id="nombrefuncionarioInput" name="nombrefuncionarioInput" value="' .$user->getNombre().' '.$user->getApellidos().'" disabled>'
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <form id="formFormato" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%" bgcolor=#BDBDBD>No</th>
                                    <th scope="col" colspan="2" bgcolor=#BDBDBD><h6 align="center">ASPECTOS A VERIFICAR</h6></th>
                                    <th scope="col" bgcolor=#BDBDBD>Calificacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" bgcolor=#848484>1</th>
                                    <th colspan="2" bgcolor=#848484><h6 align="center">RECURSO HUMANO</h6></hd>
                                    <td width="5%" bgcolor=#848484></td>
                                </tr>
                                <tr>
                                    <th scope="row">1.1</th>
                                    <td colspan="2">Se encuentra soporte legal de la formación académica del     director técnico,	el contrato del director técnico está vigente (si aplica).</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion11Input" name="calificacion11Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">1.2</th>
                                    <td colspan="2">Cuenta con número suficiente de personal idóneo para el cumplimiento de las actividades y procesos que se realizan</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion12Input" name="calificacion12Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">1.3</th>
                                    <td colspan="2">Durante la visita se encontró presente el director técnico</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion13Input" name="calificacion13Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">1.4</th>
                                    <td colspan="2">Existen mecanismos para suplir la ausencia del director técnico</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion14Input" name="calificacion14Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row" bgcolor=#848484>2</th>
                                    <th colspan="2" bgcolor=#848484><h6 align="center">CONDICIONES DE INFRAESTRUCTURA</h6></hd>
                                    <td width="5%" bgcolor=#848484></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.1</th>
                                    <td colspan="2">El establecimiento se halla ubicado en un lugar alejado de focos de insalubridad o contaminación</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion21Input" name="calificacion21Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.2</th>
                                    <td colspan="2">El establecimiento está ubicado en un lugar de fácil acceso para los usuarios e independiente de cualquier otro establecimiento comercial o de habitación y se identifica con un aviso donde exprese su denominación social.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion22Input" name="calificacion22Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.3</th>
                                    <td colspan="2">El área física es exclusiva, independiente y de circulación restringida, pisos, paredes, techos son de superficie lisa material impermeable uniforme y de fácil limpieza se encuentra en  buenas condiciones y ordenadas.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion23Input" name="calificacion23Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.4</th>
                                    <td colspan="2">La unidad sanitaria está en buen estado, con sifones y lavamanos en servicio.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion24Input" name="calificacion24Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.5</th>
                                    <td colspan="2">Las áreas de almacenamiento, cuenta con iluminación, instalaciones eléctricas, ventilación, condiciones de temperatura, humedad, adecuadas y garantizan la vida útil de los productos farmacéuticos.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion25Input" name="calificacion25Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.6</th>
                                    <td colspan="2">Las estanterías se conservan en buenas condiciones de aseo, higiene y limpieza.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion26Input" name="calificacion26Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.7</th>
                                    <td colspan="2">Cuenta con área especial para la elaboración de preparaciones magistrales, que garantice las buenas prácticas del proceso, debidamente identificada señalizada y delimitada. – si aplica.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion27Input" name="calificacion27Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.8</th>
                                    <td colspan="2">El área administrativa, recepción técnica, cuarentena, rechazo, aprobados, cadena de frio, medicamentos de control especial, averiados y vencidos, disposición de residuos, se encuentran debidamente  señalizadas y delimitadas.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion28Input" name="calificacion28Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row" bgcolor=#848484>3</th>
                                    <th colspan="2" bgcolor=#848484><h6 align="center">DOTACIÓN</h6></hd>
                                    <td width="5%" bgcolor=#848484></td>
                                </tr>
                                <tr>
                                    <th scope="row">3.1</th>
                                    <td colspan="2">Dispone de  sistema de refrigeración de medicamentos</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion31Input" name="calificacion31Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">3.2</th>
                                    <td colspan="2">Cuenta con extintor con fecha de caducidad vigente</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion32Input" name="calificacion32Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">3.3</th>
                                    <td colspan="2">Higrómetro calibrado</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion33Input" name="calificacion33Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">3.4</th>
                                    <td colspan="2">Termómetro calibrado</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion34Input" name="calificacion34Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">3.5</th>
                                    <td colspan="2">El personal que labora en el establecimiento, porta bata o uniforme y carnet</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion35Input" name="calificacion35Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row" bgcolor=#848484>4</th>
                                    <th colspan="2" bgcolor=#848484><h6 align="center">DOCUMENTACIÓN</h6></hd>
                                    <td width="5%" bgcolor=#848484></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.1</th>
                                    <td colspan="2">Presenta  resolución de apertura o traslado expedida por Instituto Departamental de Salud.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion41Input" name="calificacion41Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.2</th>
                                    <td colspan="2">La cámara de comercio está vigente y a nombre del propietario registrado en la oficina de control de medicamentos</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion42Input" name="calificacion42Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.3</th>
                                    <td colspan="2">Cuenta con las facturas de adquisición de medicamentos o dispositivos médicos, de proveedores debidamente autorizados.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion43Input" name="calificacion43Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.4</th>
                                    <td colspan="2">Se encuentran registros de control de factores ambientales en los parámetros requeridos</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion44Input" name="calificacion44Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.5</th>
                                    <td colspan="2">El contrato para la desnaturalización  de medicamentos y residuos patógenos está vigente.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion45Input" name="calificacion45Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.6</th>
                                    <td colspan="2">La certificación de buenas prácticas del servicio farmacéutico – BPSF- está vigente y en lugar visible.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion46Input" name="calificacion46Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.7</th>
                                    <td colspan="2">Presenta los procedimientos escritos o sistematizados para los procesos generales como selección, adquisición, recepción y almacenamiento, distribución, dispensación, embalaje, transporte de medicamentos, dispositivos médicos o productos autorizados, inyectologia y monitoreo de glicemia.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion47Input" name="calificacion47Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row" bgcolor=#848484>5</th>
                                    <th colspan="2" bgcolor=#848484><h6 align="center">MEDICAMENTOS DE CONTROL ESPECIAL</h6></hd>
                                    <td width="5%" bgcolor=#848484></td>
                                </tr>
                                <tr>
                                    <th scope="row">5.1</th>
                                    <td colspan="2">Presenta resolución para la dispensación y/o distribución de de medicamentos de control especial y está vigente No. de Resolución : 3287	fecha de vencimiento; 2021</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion51Input" name="calificacion51Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">5.2</th>
                                    <td colspan="2">El libro de medicamentos de control especial esta actualizado y conforme a las existencias. Los datos anotados en libro de control son claros, legibles y sin tachaduras. Existe copia del último informe mensual de movimientos de medicamentos de control especial.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion52Input" name="calificacion52Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">5.3</th>
                                    <td colspan="2">Los medicamentos de control especial encontrados, corresponden a los autorizados</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion53Input" name="calificacion53Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">5.4</th>
                                    <td colspan="2">El área destinada para el almacenamiento de medicamentos de control especial, está  separada, bajo llave u otro mecanismo de seguridad y debidamente identificada señalizada y delimitada</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion54Input" name="calificacion54Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">5.5</th>
                                    <td colspan="2">El concepto de la auditoria de medicamentos de control especial, es  favorable.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion55Input" name="calificacion55Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row" bgcolor=#848484>6</th>
                                    <th colspan="2" bgcolor=#848484><h6 align="center">SERVICIO DE INYECTOLOGIA Y/O GLICEMIA</h6></hd>
                                    <td width="5%" bgcolor=#848484></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.1</th>
                                    <td colspan="2">La sección de inyectologia es independiente y ofrece privacidad y comodidad para el administrador y el paciente, y cuenta con un lavamanos en el mismo sitio o en sitio cercano.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion61Input" name="calificacion61Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.2</th>
                                    <td colspan="2">El área cuenta con iluminación, ventilación adecuada y con pisos, paredes lavables en buen estado.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion62Input" name="calificacion62Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.3</th>
                                    <td colspan="2">Dispone de jeringas desechables, recipiente algodonero, cubetas y guardián.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion63Input" name="calificacion63Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.4</th>
                                    <td colspan="2">El servicio de lavamanos dispone de insumos de aseo y dispensador de toallas desechables.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion64Input" name="calificacion64Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.5</th>
                                    <td colspan="2">El recurso humano encargado de administrar el medicamento inyectable y la toma de glicemia cuenta con formación académica y entrenamiento que lo autorice para ello.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion65Input" name="calificacion65Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.6</th>
                                    <td colspan="2">Cumple con normas sobre limpieza y desinfección de áreas, bioseguridad, manejo de residuos y manual de procedimientos técnicos (se observan registros).</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion66Input" name="calificacion66Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row" bgcolor=#848484>7</th>
                                    <th colspan="2" bgcolor=#848484><h6 align="center">REQUERIMIENTOS PARA ESTABLECIMIENTOS FARMACÉUTICOS QUE CONTRATE EL SUMINISTRO DE MEDICAMENTOS en  EL SGSSS</h6></hd>
                                    <td width="5%" bgcolor=#848484></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.1</th>
                                    <td colspan="2">Cuenta con contrato vigente con la EPS para la dispensación de medicamentos a usuarios del SGSSS.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion71Input" name="calificacion71Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.2</th>
                                    <td colspan="2">El establecimiento farmacéutico, se encuentra cerca al lugar de la consulta médica, no es de difícil acceso (ramplas, pasamanos) ni peligroso.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion72Input" name="calificacion72Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.3</th>
                                    <td colspan="2">Cuenta con el recurso humano Tecnólogo de Regencia en Farmacia o Químico Farmacéutico</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion73Input" name="calificacion73Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.4</th>
                                    <td colspan="2">Garantiza la distribución y/o dispensación de la totalidad de los medicamentos prescritos por el facultativo, al momento del recibo de la solicitud del respectivo servicio en la primera entrega al interesado, sin que se presenten retrasos que pongan en riesgo la salud y/o la vida del paciente.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion74Input" name="calificacion74Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.5</th>
                                    <td colspan="2">Cuenta con mecanismos para determinar permanentemente la demanda insatisfecha del servicio y corregir rápidamente las desviaciones que se detecten. La entidad de la que forma parte el servicio farmacéutico garantizará los recursos necesarios para que se cumpla este principio.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion75Input" name="calificacion75Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.6</th>
                                    <td colspan="2">Se realiza asesoramiento sobre uso adecuado de medicamentos y dispositivos médicos, especialmente, los medicamentos de venta sin prescripción médica, se encuentran soportes de esta actividad.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion76Input" name="calificacion76Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.7</th>
                                    <td colspan="2">Cuenta con la existencia de mecanismos y recursos que permitan la detección, identificación y resolución de los Problemas Relacionados con Medicamentos (PRM) y Problemas Relacionados con la Utilización de Medicamentos (PRUM) y eventos adversos en general.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion77Input" name="calificacion77Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.8</th>
                                    <td colspan="2">Cuenta con programa de Farmacovigilancia</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion78Input" name="calificacion78Input" laceholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.9</th>
                                    <td colspan="2">Cuenta con programa de Tecnovigilancia</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion79Input" name="calificacion79Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.10</th>
                                    <td colspan="2">Cuenta con programa de información sobre el uso adecuado de los medicamentos</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion710Input" name="calificacion710Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.11</th>
                                    <td colspan="2">Realiza actividades y/o programas de información y/o capacitación y/o educación sobre medicamentos y dispositivos médicos a la comunidad en relación con las principales características, condiciones de almacenamiento, uso adecuado y demás aspectos de interés y aconsejar la adopción de estilos de vida saludables. (se encuentran registros)</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion711Input" name="calificacion711Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.12</th>
                                    <td colspan="2">El servicio farmacéutico garantiza a sus usuarios, beneficiarios y destinatarios las prestaciones requeridas que se ofrezcan en una secuencia lógica y racional, de conformidad con la prescripción médica y las necesidades de información y asesoría a los pacientes.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion712Input" name="calificacion712Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.13</th>
                                    <td colspan="2">El director técnico hace parte del comité de farmacia y terapéutica de la IPS donde es atendido el usuario.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion713Input" name="calificacion713Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.14</th>
                                    <td colspan="2">Cuenta con procedimientos escritos de destrucción o desnaturalización de medicamentos</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion714Input" name="calificacion714Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.15</th>
                                    <td colspan="2">Cuenta con organigrama, estructura interna y las principales funciones</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion715Input" name="calificacion715Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.16</th>
                                    <td colspan="2">Cuenta con el Manual de Medicamentos y Terapéutica del Sistema General de Seguridad Social en Salud (SGSSS)</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion716Input" name="calificacion716Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.17</th>
                                    <td colspan="2">Presenta Mecanismos para la formulación de quejas, reclamos y sugerencias</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion717Input" name="calificacion717Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.18</th>
                                    <td colspan="2">Posee la Normatividad vigente relacionada con medicamentos y dispositivos médicos.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion718Input" name="calificacion718Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.19</th>
                                    <td colspan="2">Se observa infraestructura física adecuada al número de actividades, procesos y usuarios que atienden, independiente de otro establecimiento de comercio.</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion719Input" name="calificacion719Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.20</th>
                                    <td colspan="2">Cuenta con dotación, constituida por equipos, instrumentos, bibliografía y materiales necesarios para el cumplimiento de los objetivos de las actividades y/o procesos que se realizan en cada una de sus áreas</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion720Input" name="calificacion720Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.21</th>
                                    <td colspan="2">Disponer de un recurso humano idóneo y suficiente para el cumplimiento de las actividades y/o procesos que realice</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion721Input" name="calificacion721Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.22</th>
                                    <td colspan="2">Existen políticas y programas de mejoramiento continuo que incluyan mecanismos que promuevan y fomenten la continua actualización, capacitación, adiestramiento, motivación y comunicación efectiva del recurso humano del servicio farmacéutico</td>
                                    <td width="5%"> <input type="text" class="form-control" id="calificacion722Input" name="calificacion722Input" placeholder="1-5" onkeyUp="validacion()" onclick = "this.value = ''" maxlength="1" required></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" bgcolor=#BDBDBD><p align="center">Observaciones</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><textarea type="text" maxlength="300" class="form-control" id="calificacionObser" name="calificacionObser" placeholder="Observaciones aquí..."></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" id="finalizarRevision" title="Finalizar Revisión" style="width: 100%;" ><ion-icon name="list-box"></ion-icon> Finalizar Revisión</button>                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--MODAL REGISTRO INSPECCIÓN-->
<form class="modal fade bd-example-modal-sm modalContraseña" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="formRegistroFormato" method="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Registrar Inspección</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="representanteInput">Fecha y Hora</label>
                        <input type="text" class="form-control" id="modalFechaHora" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="representanteInput">Datos Droguería</label>
                        <input type="text" class="form-control" id="modalDatosDro" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="nombreestablecimientoInput">Datos Funcionario</label>
                        <input type="text" class="form-control" id="modalDatosFun" disabled>
                    </div>
                </div>
            </div>

            <div class="modal-footer" style="display: block;margin: auto;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <span class="ion-close-round"></span></button>
                <button type="submit" class="btn btn-primary" id="registrarRevision">Registrar</button>
            </div>
        </div>
    </div>
</form>