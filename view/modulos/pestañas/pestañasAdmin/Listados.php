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
            </article>

            <article id="tablaDroguerias">
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
            </article>

            <article id="tablaFormatos">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Droguería</th>
                            <th scope="col">Imprimir</th>
                        </tr>
                    </thead>
                    <tbody id="bodyFormatos">
                        <!--DATOS DE LA TABLA-->
                    </tbody>
                </table>
            </article>

        </div>
    </div>

</div>