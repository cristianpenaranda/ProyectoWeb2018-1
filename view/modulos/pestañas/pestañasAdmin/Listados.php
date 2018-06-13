<div class="fondoApp mt-5">
    <div class="row">
        <div class="col-md-8">
            <button type="button" id="listarfuncionario" class="btn btn-primary item"><span class="ion-person"> Funcionarios</span></button>
            <button type="button" id="listarDroguerias" class="btn btn-primary item"><span class="ion-ios-home"> Droguerías</span></button>
            <button type="button" id="listarformatos" class="btn btn-primary item"><span class="ion-clipboard"> Formatos</span></button>
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="fondoTablas">
            <article id="tablaFuncionarios">
                <div class="col-md-12 mb-3">                    
                    <form>
                        <h2 style="text-align: center;">Funcionarios</h2>
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Buscar..." id="buscarFun">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <span class="ion-search"></span>
                                </button>
                            </span>
                        </div>
                    </form> 
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cédula</th>
                                    <th scope="col">Nombre</th>                    
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="bodyFuncionarios">
                                <!--DATOS DE LA TABLA-->
                            </tbody>
                        </table>
                    </div> 
                </div>   
            </article>

            <article id="tablaDroguerias">
                <div class="col-md-12 mb-3">
                    <form>
                        <h2 style="text-align: center;">Droguerías</h2>
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Buscar..." id="buscarDro">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <span class="ion-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>  
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nit</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="bodyDroguerias">
                                <!--DATOS DE LA TABLA-->
                            </tbody>
                        </table>
                    </div> 
                </div>
            </article>

            <article id="tablaFormatos">
                <div class="col-md-12 mb-3">
                    <form>
                        <h2 style="text-align: center;">Formatos</h2>
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Buscar..." id="buscarFor">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <span class="ion-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <br>
                    <div class="table-responsive">
                        <table class="table" style="width: 90%;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Droguería</th>
                                    <th scope="col">Fecha/Hora</th>
                                    <th scope="col">Resultado</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="bodyFormatos">
                                <!--DATOS DE LA TABLA-->
                            </tbody>
                        </table>
                    </div>  
                </div>
            </article>

        </div>
    </div>

</div>


<!--MODAL INFORMACION DEL FUNCIONARIO-->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="VerInfoFuncionario">
    <div class="modal-dialog">
        <div class="modal-content" style="padding: 5%;">
            <form id="FormInfoFuncionario" method="POST">
                <h4 style="text-align: center;">Información del Funcionario</h4>
                <hr>
                <div class="form-group">
                    <label>Cédula</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ion-card"></span>
                        </div>
                        <input type="text" class="form-control" id="ModalCedulaEmpleado"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nombres</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ion-person"></span>
                        </div>
                        <input type="text" class="form-control" id="ModalNombresEmpleado"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ion-person"></span>
                        </div>
                        <input type="text" class="form-control" id="ModalApellidosEmpleado"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ion-android-call"></span>
                        </div>
                        <input type="text" class="form-control" id="ModalTelefonoEmpleado"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Domicilio</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ion-location"></span>
                        </div>
                        <input type="text" class="form-control" id="ModalDomicilioEmpleado"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ion-email"></span>
                        </div>
                        <input type="text" class="form-control" id="ModalCorreoEmpleado"  readonly>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:block;margin:auto;"><span class="ion-close-round"></span> Cerrar</button>
            </form>
        </div>
    </div>
</div>



<!--MODAL INFORMACION DE LA DROGUERIA-->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="VerInfoDrogueria">
    <div class="modal-dialog">
        <div class="modal-content" style="padding: 5%;">
            <form id="FormInfoDrogueria" method="POST">
                <h4 style="text-align: center;">Información de la Droguería</h4>
                <hr>
                <div class="form-group">
                    <label>Nit</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-card"></span></div>
                        </div>
                        <input type="text" maxlength="15" class="form-control" id="ModalDrogueriaNit"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><ion-icon name="thermometer"></ion-icon></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" id="ModalDrogueriaNombre"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-ios-telephone"></span></div>
                        </div>
                        <input type="number" maxlength="15" class="form-control" id="ModalDrogueriaTelefono"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-location"></span></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" id="ModalDrogueriaDireccion"  readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Encargado</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-person"></span></div>
                        </div>
                        <input type="text" maxlength="50" class="form-control" id="ModalDrogueriaEncargado"  readonly>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:block;margin:auto;"><span class="ion-close-round"></span> Cerrar</button>
            </form>
        </div>
    </div>
</div>

<!--MODAL INFORMACION DEL FORMATO-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="VerInfoFormato" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" disabled>            
            <div class="fondoApp FormadoPDF">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mt-3" style="margin: auto;display: block;">
                            <table border="1">
                                <tbody>
                                    <tr role="row">
                                        <td colspan="1" role="rowheader" rowspan="4">
                                            <p align="center"><img src="https://drive.google.com/uc?export=view&id=19SlDf3PnhhePbhnDTBMvEW6niMHfRssW"/></p>
                                            <p align="center">NORTE DE SANTANDER</p>
                                        </td>
                                        <td role="columnheader">
                                            <p align="center">SALUD PUBLICA</p>
                                        </td>
                                        <td role="columnheader">
                                            <p style="text-align: center;">Código: F-SP-VC21-06</p>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td colspan="1" rowspan="3">
                                            <p style="text-align: center;">ACTA DE INSPECCION, VIGILANCIA Y CONTRO A ESTABLECIMIENTOS FARMACÉUTICOS U OTRO ESTABLECIMIENTO DE COMERCIO</p>
                                        </td>
                                        <td>
                                            <p style="text-align: center;">Fecha de Aprobación: 21/08/12</p>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td>
                                            <p style="text-align: center;">Versión:01</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="datePDF" style="text-align: center;">Fecha</label>
                                    <input type="text" class="form-control" id="datePDF" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="timePDF" style="text-align: center;">Hora</label>
                                    <input type="text" class="form-control" id="timePDF" readonly>
                                </div>
                            </div>
                            <form class="card">
                                <div class="card-header">Información del Establecimiento</div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label>Cédula o Nit</label>
                                            <div class="input-group">
                                                <input  readonly type="text" class="form-control" id="cedulaNitPDF" name="cedulaNitPDF">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="representantePDF" style="text-align: center;">Propietario y/o representante legal</label>
                                            <input  readonly type="text" class="form-control" id="representantePDF">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="nombreestablecimientoPDF" style="text-align: center;">Nombre del establecimiento</label>
                                            <input  readonly type="text" class="form-control" id="nombreestablecimientoPDF">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="direccionPDF" style="text-align: center;">Dirección</label>
                                            <input  readonly type="text" class="form-control" id="direccionPDF">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="telefonoPDF" style="text-align: center;">Teléfono</label>
                                            <input  readonly type="number" class="form-control" id="telefonoPDF">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br>

                            <div>                    
                                <form class="card">
                                    <div class="card-header">Información del Funcionario</div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label>Cédula</label>
                                                <input  readonly type="text" class="form-control" id="cedulaFunPDF" style="text-align: center;" name="cedulaFunPDF" style="text-align: center;">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label>Nombre del Funcionario</label>
                                                <input  readonly type="text" class="form-control" id="nombrefuncionarioPDF" style="text-align: center;" name="nombrefuncionarioPDF" style="text-align: center;">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <form >
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
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion11PDF" style="text-align: center;" name="calificacion11PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1.2</th>
                                                <td colspan="2">Cuenta con número suficiente de personal idóneo para el cumplimiento de las actividades y procesos que se realizan</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion12PDF" style="text-align: center;" name="calificacion12PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1.3</th>
                                                <td colspan="2">Durante la visita se encontró presente el director técnico</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion13PDF" style="text-align: center;" name="calificacion13PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1.4</th>
                                                <td colspan="2">Existen mecanismos para suplir la ausencia del director técnico</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion14PDF" style="text-align: center;" name="calificacion14PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" bgcolor=#848484>2</th>
                                                <th colspan="2" bgcolor=#848484><h6 align="center">CONDICIONES DE INFRAESTRUCTURA</h6></hd>
                                                <td width="5%" bgcolor=#848484></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.1</th>
                                                <td colspan="2">El establecimiento se halla ubicado en un lugar alejado de focos de insalubridad o contaminación</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion21PDF" style="text-align: center;" name="calificacion21PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.2</th>
                                                <td colspan="2">El establecimiento está ubicado en un lugar de fácil acceso para los usuarios e independiente de cualquier otro establecimiento comercial o de habitación y se identifica con un aviso donde exprese su denominación social.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion22PDF" style="text-align: center;" name="calificacion22PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.3</th>
                                                <td colspan="2">El área física es exclusiva, independiente y de circulación restringida, pisos, paredes, techos son de superficie lisa material impermeable uniforme y de fácil limpieza se encuentra en  buenas condiciones y ordenadas.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion23PDF" style="text-align: center;" name="calificacion23PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.4</th>
                                                <td colspan="2">La unidad sanitaria está en buen estado, con sifones y lavamanos en servicio.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion24PDF" style="text-align: center;" name="calificacion24PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.5</th>
                                                <td colspan="2">Las áreas de almacenamiento, cuenta con iluminación, instalaciones eléctricas, ventilación, condiciones de temperatura, humedad, adecuadas y garantizan la vida útil de los productos farmacéuticos.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion25PDF" style="text-align: center;" name="calificacion25PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.6</th>
                                                <td colspan="2">Las estanterías se conservan en buenas condiciones de aseo, higiene y limpieza.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion26PDF" style="text-align: center;" name="calificacion26PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.7</th>
                                                <td colspan="2">Cuenta con área especial para la elaboración de preparaciones magistrales, que garantice las buenas prácticas del proceso, debidamente identificada señalizada y delimitada. – si aplica.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion27PDF" style="text-align: center;" name="calificacion27PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2.8</th>
                                                <td colspan="2">El área administrativa, recepción técnica, cuarentena, rechazo, aprobados, cadena de frio, medicamentos de control especial, averiados y vencidos, disposición de residuos, se encuentran debidamente  señalizadas y delimitadas.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion28PDF" style="text-align: center;" name="calificacion28PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" bgcolor=#848484>3</th>
                                                <th colspan="2" bgcolor=#848484><h6 align="center">DOTACIÓN</h6></hd>
                                                <td width="5%" bgcolor=#848484></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3.1</th>
                                                <td colspan="2">Dispone de  sistema de refrigeración de medicamentos</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion31PDF" style="text-align: center;" name="calificacion31PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3.2</th>
                                                <td colspan="2">Cuenta con extintor con fecha de caducidad vigente</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion32PDF" style="text-align: center;" name="calificacion32PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3.3</th>
                                                <td colspan="2">Higrómetro calibrado</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion33PDF" style="text-align: center;" name="calificacion33PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3.4</th>
                                                <td colspan="2">Termómetro calibrado</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion34PDF" style="text-align: center;" name="calificacion34PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3.5</th>
                                                <td colspan="2">El personal que labora en el establecimiento, porta bata o uniforme y carnet</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion35PDF" style="text-align: center;" name="calificacion35PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" bgcolor=#848484>4</th>
                                                <th colspan="2" bgcolor=#848484><h6 align="center">DOCUMENTACIÓN</h6></hd>
                                                <td width="5%" bgcolor=#848484></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4.1</th>
                                                <td colspan="2">Presenta  resolución de apertura o traslado expedida por Instituto Departamental de Salud.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion41PDF" style="text-align: center;" name="calificacion41PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4.2</th>
                                                <td colspan="2">La cámara de comercio está vigente y a nombre del propietario registrado en la oficina de control de medicamentos</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion42PDF" style="text-align: center;" name="calificacion42PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4.3</th>
                                                <td colspan="2">Cuenta con las facturas de adquisición de medicamentos o dispositivos médicos, de proveedores debidamente autorizados.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion43PDF" style="text-align: center;" name="calificacion43PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4.4</th>
                                                <td colspan="2">Se encuentran registros de control de factores ambientales en los parámetros requeridos</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion44PDF" style="text-align: center;" name="calificacion44PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4.5</th>
                                                <td colspan="2">El contrato para la desnaturalización  de medicamentos y residuos patógenos está vigente.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion45PDF" style="text-align: center;" name="calificacion45PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4.6</th>
                                                <td colspan="2">La certificación de buenas prácticas del servicio farmacéutico – BPSF- está vigente y en lugar visible.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion46PDF" style="text-align: center;" name="calificacion46PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4.7</th>
                                                <td colspan="2">Presenta los procedimientos escritos o sistematizados para los procesos generales como selección, adquisición, recepción y almacenamiento, distribución, dispensación, embalaje, transporte de medicamentos, dispositivos médicos o productos autorizados, inyectologia y monitoreo de glicemia.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion47PDF" style="text-align: center;" name="calificacion47PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" bgcolor=#848484>5</th>
                                                <th colspan="2" bgcolor=#848484><h6 align="center">MEDICAMENTOS DE CONTROL ESPECIAL</h6></hd>
                                                <td width="5%" bgcolor=#848484></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5.1</th>
                                                <td colspan="2">Presenta resolución para la dispensación y/o distribución de de medicamentos de control especial y está vigente No. de Resolución : 3287	fecha de vencimiento; 2021</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion51PDF" style="text-align: center;" name="calificacion51PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5.2</th>
                                                <td colspan="2">El libro de medicamentos de control especial esta actualizado y conforme a las existencias. Los datos anotados en libro de control son claros, legibles y sin tachaduras. Existe copia del último informe mensual de movimientos de medicamentos de control especial.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion52PDF" style="text-align: center;" name="calificacion52PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5.3</th>
                                                <td colspan="2">Los medicamentos de control especial encontrados, corresponden a los autorizados</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion53PDF" style="text-align: center;" name="calificacion53PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5.4</th>
                                                <td colspan="2">El área destinada para el almacenamiento de medicamentos de control especial, está  separada, bajo llave u otro mecanismo de seguridad y debidamente identificada señalizada y delimitada</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion54PDF" style="text-align: center;" name="calificacion54PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5.5</th>
                                                <td colspan="2">El concepto de la auditoria de medicamentos de control especial, es  favorable.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion55PDF" style="text-align: center;" name="calificacion55PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" bgcolor=#848484>6</th>
                                                <th colspan="2" bgcolor=#848484><h6 align="center">SERVICIO DE INYECTOLOGIA Y/O GLICEMIA</h6></hd>
                                                <td width="5%" bgcolor=#848484></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6.1</th>
                                                <td colspan="2">La sección de inyectologia es independiente y ofrece privacidad y comodidad para el administrador y el paciente, y cuenta con un lavamanos en el mismo sitio o en sitio cercano.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion61PDF" style="text-align: center;" name="calificacion61PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6.2</th>
                                                <td colspan="2">El área cuenta con iluminación, ventilación adecuada y con pisos, paredes lavables en buen estado.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion62PDF" style="text-align: center;" name="calificacion62PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6.3</th>
                                                <td colspan="2">Dispone de jeringas desechables, recipiente algodonero, cubetas y guardián.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion63PDF" style="text-align: center;" name="calificacion63PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6.4</th>
                                                <td colspan="2">El servicio de lavamanos dispone de insumos de aseo y dispensador de toallas desechables.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion64PDF" style="text-align: center;" name="calificacion64PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6.5</th>
                                                <td colspan="2">El recurso humano encargado de administrar el medicamento inyectable y la toma de glicemia cuenta con formación académica y entrenamiento que lo autorice para ello.</td>
                                                <td width="5%"> <input  readonly type="text" class="form-control" id="calificacion65PDF" style="text-align: center;" name="calificacion65PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6.6</th>
                                                <td colspan="2">Cumple con normas sobre limpieza y desinfección de áreas, bioseguridad, manejo de residuos y manual de procedimientos técnicos (se observan registros).</td>
                                                <td width="5%"><input  readonly type="text" class="form-control"  id="calificacion66PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" bgcolor=#848484>7</th>
                                                <th colspan="2" bgcolor=#848484><h6 align="center">REQUERIMIENTOS PARA ESTABLECIMIENTOS FARMACÉUTICOS QUE CONTRATE EL SUMINISTRO DE MEDICAMENTOS en  EL SGSSS</h6></hd>
                                                <td width="5%" bgcolor=#848484></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.1</th>
                                                <td colspan="2">Cuenta con contrato vigente con la EPS para la dispensación de medicamentos a usuarios del SGSSS.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control"  id="calificacion71PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.2</th>
                                                <td colspan="2">El establecimiento farmacéutico, se encuentra cerca al lugar de la consulta médica, no es de difícil acceso (ramplas, pasamanos) ni peligroso.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control"  id="calificacion72PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.3</th>
                                                <td colspan="2">Cuenta con el recurso humano Tecnólogo de Regencia en Farmacia o Químico Farmacéutico</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion73PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.4</th>
                                                <td colspan="2">Garantiza la distribución y/o dispensación de la totalidad de los medicamentos prescritos por el facultativo, al momento del recibo de la solicitud del respectivo servicio en la primera entrega al interesado, sin que se presenten retrasos que pongan en riesgo la salud y/o la vida del paciente.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion74PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.5</th>
                                                <td colspan="2">Cuenta con mecanismos para determinar permanentemente la demanda insatisfecha del servicio y corregir rápidamente las desviaciones que se detecten. La entidad de la que forma parte el servicio farmacéutico garantizará los recursos necesarios para que se cumpla este principio.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion75PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.6</th>
                                                <td colspan="2">Se realiza asesoramiento sobre uso adecuado de medicamentos y dispositivos médicos, especialmente, los medicamentos de venta sin prescripción médica, se encuentran soportes de esta actividad.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion76PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.7</th>
                                                <td colspan="2">Cuenta con la existencia de mecanismos y recursos que permitan la detección, identificación y resolución de los Problemas Relacionados con Medicamentos (PRM) y Problemas Relacionados con la Utilización de Medicamentos (PRUM) y eventos adversos en general.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion77PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.8</th>
                                                <td colspan="2">Cuenta con programa de Farmacovigilancia</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion78PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.9</th>
                                                <td colspan="2">Cuenta con programa de Tecnovigilancia</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion79PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.10</th>
                                                <td colspan="2">Cuenta con programa de información sobre el uso adecuado de los medicamentos</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control"  id="calificacion710PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.11</th>
                                                <td colspan="2">Realiza actividades y/o programas de información y/o capacitación y/o educación sobre medicamentos y dispositivos médicos a la comunidad en relación con las principales características, condiciones de almacenamiento, uso adecuado y demás aspectos de interés y aconsejar la adopción de estilos de vida saludables. (se encuentran registros)</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion711PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.12</th>
                                                <td colspan="2">El servicio farmacéutico garantiza a sus usuarios, beneficiarios y destinatarios las prestaciones requeridas que se ofrezcan en una secuencia lógica y racional, de conformidad con la prescripción médica y las necesidades de información y asesoría a los pacientes.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion712PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.13</th>
                                                <td colspan="2">El director técnico hace parte del comité de farmacia y terapéutica de la IPS donde es atendido el usuario.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion713PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.14</th>
                                                <td colspan="2">Cuenta con procedimientos escritos de destrucción o desnaturalización de medicamentos</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control"  id="calificacion714PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.15</th>
                                                <td colspan="2">Cuenta con organigrama, estructura interna y las principales funciones</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control"  id="calificacion715PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.16</th>
                                                <td colspan="2">Cuenta con el Manual de Medicamentos y Terapéutica del Sistema General de Seguridad Social en Salud (SGSSS)</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion716PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.17</th>
                                                <td colspan="2">Presenta Mecanismos para la formulación de quejas, reclamos y sugerencias</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control"  id="calificacion717PDF" style="text-align: center;"  ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.18</th>
                                                <td colspan="2">Posee la Normatividad vigente relacionada con medicamentos y dispositivos médicos.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion718PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.19</th>
                                                <td colspan="2">Se observa infraestructura física adecuada al número de actividades, procesos y usuarios que atienden, independiente de otro establecimiento de comercio.</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion719PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.20</th>
                                                <td colspan="2">Cuenta con dotación, constituida por equipos, instrumentos, bibliografía y materiales necesarios para el cumplimiento de los objetivos de las actividades y/o procesos que se realizan en cada una de sus áreas</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion720PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.21</th>
                                                <td colspan="2">Disponer de un recurso humano idóneo y suficiente para el cumplimiento de las actividades y/o procesos que realice</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion721PDF" style="text-align: center;"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7.22</th>
                                                <td colspan="2">Existen políticas y programas de mejoramiento continuo que incluyan mecanismos que promuevan y fomenten la continua actualización, capacitación, adiestramiento, motivación y comunicación efectiva del recurso humano del servicio farmacéutico</td>
                                                <td width="5%" ><input  readonly type="text" class="form-control" id="calificacion722PDF" style="text-align: center;"></td>
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
                                                <td><textarea readonly type="text" maxlength="300" class="form-control" id="calificacionObser" name="calificacionObser" ></textarea></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" bgcolor=#BDBDBD><p align="center">Calificación / Resultado</p></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;font-size: 20px;">
                                                    <b><label>Calificación: </label></b> 
                                                    <input  readonly type="text" class="form-control" id="calificacionCal" style="text-align: center;">
                                                    <br>
                                                    <b><label>Resultado: </label></b> 
                                                    <input  readonly type="text" class="form-control" id="calificacionRes" style="text-align: center;" >

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div>
