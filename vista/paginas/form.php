<div class="container pl-5">
    <div id="alerta"></div>
            <div class="row">
                <div class="col-md-11">
                    <p>Respetuosamente solicito al Registrador Civil de las Personas realizar Inscripción de Nacimiento de conformidad a los siguientes datos:</p>
                    <u><strong>1. DATOS DE LA PERSONA MENOR DE EDAD:</strong></u>
                    <br>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <P class="spacing">Nombres y Apellidos:</P>
                    <P class="spacing">Fecha de nacimiento:</P>
                    <P class="spacing">Lugar donde ocurrió el nacimiento:</P>
                </div>
                <div class="col-md-9 mr-5">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <P class="spacing">Departamento de nacimiento:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false"> 
                    </div>
                </div>
                <div class="col-md-2">
                    <P class="spacing">Municipio de nacimiento:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 d-flex justify-content-end">
                    <p class="spacing">Sexo:</p>
                </div>
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Femenino
                        </label>
                    </div>
                </div>
            </div>
            <!-- termina hijo-->

            <div class="row">
                <div class="col-md-11 mt-1">
                    <u><strong>2. DATOS DE LA MADRE:</strong></u>
                    <br>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <P class="spacing">Nombres y Apellidos:</P>
                </div>
                <div class="col-md-9 mr-5">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <P class="spacing">Edad:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="3" minlength="1" onkeypress="return valideKey(event);">
                    </div>
                </div>
                <div class="col-md-2">
                    <P class="spacing">Nacionalidad:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" onfocus="validar()"> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <P class="spacing">Número de documento de identificación:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="13" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            DPI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Cédula de Vecindad y Constancia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Pasaporte
                        </label>
                    </div>
                </div>
            </div>
            <!-- termina madre-->

            <div class="row">
                <div class="col-md-11 mt-1">
                    <u><strong>3. DATOS DE LA PADRE:</strong></u>
                    <br>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <P class="spacing">Nombres y Apellidos:</P>
                </div>
                <div class="col-md-9 mr-5">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <P class="spacing">Edad:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="3" minlength="1" onkeypress="return valideKey(event);">
                    </div>
                </div>
                <div class="col-md-2">
                    <P class="spacing">Nacionalidad:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <P class="spacing">Número de documento de identificación:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="13" minlength="1" onkeypress="return sololetras(event)" onpaste="return false"> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            DPI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Cédula de Vecindad y Constancia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Pasaporte
                        </label>
                    </div>
                </div>
            </div>
            <!-- termina padre-->

            <div class="row">
                <div class="col-md-12 mt-1">
                    <u><strong>4. DATOS DEL COMPARIENTE:</strong></u>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <small>(Consignar información si comparece a realizar la inscripción persona distinta al padre y/o la madre)</small>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <P class="spacing">Nombres y Apellidos:</P>
                </div>
                <div class="col-md-9 mr-5">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <P class="spacing">Número de documento de identificación:</P>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" maxlength="13" minlength="1" onkeypress="return sololetras(event)" onpaste="return false">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            DPI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Cédula de Vecindad y Constancia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">   
                            Pasaporte
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md 3">
                    <P class="spacing">Dirección:</P>
                </div>
                <div class="col-md-9 mr-5 mb-5">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Dirección" maxlength="70" minlength="1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row" style="margin-top: -5%;">   
                <small>Declaro que la información consignada en la presente solicitud de Inscripción de Nacimiento es verídica y correcta a la fecha de hoy. Entiendo y acepto que el Registro Nacional de las Personas -RENAPNO es responsable de información errónea, incongruente y/o inconsistente proporcionada por el compareciente de manera directa o indirecta que pueda inducir a error en la inscripción solicitada.</small>
            </div> <br><br>
            <!-- termina compariente-->
            <div class="container ml-5">
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-4 ml-3">
                    <p><b>F._______________________________________</b></p>
                    <p class="ml-5"><b>Madre o Compariente</b></p>
                </div>

                <div class="col-md-4 ml-5">
                    <p><b>F._______________________________________</b></p>
                    <p class="ml-5"><b>Padre o Compariente</b></p>
                </div>
            </div>
            </div>
        </div>
    </div>