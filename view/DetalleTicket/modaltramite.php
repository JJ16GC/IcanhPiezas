<?php if (isset($_POST["submit"]) and $_POST["submit"] == "Enviar") {

    # Funcion del Boton para editar formulario

    require_once("../../Models/Tramites.php");
    $usuario = new Usuario();
    require_once("../../Controller/editar_tramite.php");
}

?>
<link rel="stylesheet" href="../../public/css/paginas/formulario.css">

<!-- Formulario para editar un tramite de analisis -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Tramite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                # Mostrar los datos de un tramite por el ID  del tramite
                $id = $_GET["ID"];
                $sql = "SELECT * FROM tramite WHERE id_tramite = $id";
                $usuario = new Usuario();
                $result = $usuario->listar_tramites($sql);
                foreach ($result as $key) {  ?>

                    <div class="container">
                        <form id="regiration_form" action="" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="col-lg-12">
                                    <h4>Información Básica Del Solicitante</h4>
                                    <input value="<?php echo $key["id_tramite"] ?>" id="prodId" name="id_tramite" type="hidden">
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="exampleInput">Tipo de Documento:</label>
                                        <select id="" name="tipodoc" class="form-control" required>
                                            <option><?php echo $key["tipodoc"] ?></option>
                                            <option>NIT</option>
                                            <option>Cédula de ciudadania</option>
                                            <option>Cédula de extranjeria</option>
                                            <option>Pasaporte</option>
                                            <option>Otro</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="otrotip">Otro tipo:</label>
                                        <input value="<?php echo $key["otrotip"] ?>" type="text" class="form-control" id="otrotip" name="otrotip">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="numdoc">Numero de Documento:</span></label>
                                        <input value="<?php echo $key["numdoc"] ?>" type="text" class="form-control" id="numdoc" name="numdoc" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="pnombre">Primer Nombre:</label>
                                        <input value="<?php echo $key["pnombre"] ?>" type="text" class="form-control" id="pnombre" name="pnombre" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="snombre">Segundo Nombre:</label>
                                        <input value="<?php echo $key["snombre"] ?>" type="text" class="form-control" id="snombre" name="snombre">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="papellido">Primer Apellido:</label>
                                        <input value="<?php echo $key["papellido"] ?>" type="text" class="form-control" id="papellido" name="papellido" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="sapellido">Segundo Apellido:</label>
                                        <input value="<?php echo $key["sapellido"] ?>" type="text" class="form-control" id="sapellido" name="sapellido">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="profesion">Profesión:</label>
                                        <input value="<?php echo $key["profesion"] ?>" type="text" class="form-control" id="profesion" name="profesion">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="telefono">Telefono/Celular:</label>
                                        <input value="<?php echo $key["telefono"] ?>" type="text" class="form-control" id="telefono" name="telefono">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="correo">Correo Electronico:</label>
                                        <input value="<?php echo $key["correo"] ?>" type="email" class="form-control" id="correo" name="correo" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="direccion">Dirección</label>
                                        <input value="<?php echo $key["direccion"] ?>" type="text" class="form-control" id="direccion" name="direccion">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="entidadvinc">Entidad Vinculado:</label>
                                        <input value="<?php echo $key["entidadvinc"] ?>" type="text" class="form-control" id="entidadvinc" name="entidadvinc">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="cargo">Cargo:</label>
                                        <input value="<?php echo $key["cargo"] ?>" type="text" class="form-control" id="cargo" name="cargo">
                                    </fieldset>
                                </div>

                                <div class="next col-lg-12">
                                    <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                </div>

                            </fieldset>
                            <fieldset>
                                <div class="col-lg-12">
                                    <h4>Paso 2: <span>Procedencia Del Material</span></h4>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="numaut">Número de Autorización o Resolución ICANH:</label>
                                        <p>Si son varios, por favor sepárelos con una coma.</p>
                                        <input value="<?php echo $key["numaut"] ?>" type="text" class="form-control" id="numaut" name="numaut">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="titulo">Titulo:</label>
                                        <input value="<?php echo $key["titulo"] ?>" type="text" class="form-control" id="titulo" name="titulo">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="numcert">Número de Certificado de Registro y Tenencia ICANH:</label>
                                        <p>Si son varios, por favor sepárelos con una coma</p>
                                        <input value="<?php echo $key["numcert"] ?>" type="text" class="form-control" id="numcert" name="numcert">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="nomproyecto">Nombre del proyecto de Investigación:</label>
                                        <input value="<?php echo $key["nomproyecto"] ?>" type="text" class="form-control" id="nomproyecto" name="nomproyecto">
                                    </fieldset>
                                </div>
                                <div class=" col-lg-3 next inline-block">
                                    <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                </div>
                                <div class="previous inline-block">
                                    <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="col-lg-12">
                                    <h4>Paso 3: <span>Informacion del Análisis:</span></h4>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="desctipo">Descripción del Tipo de análisis:</label>
                                        <textarea rows="4" class="form-control" id="desctipo" name="desctipo"><?php echo $key["desctipo"] ?></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <span>METODOLOGÍA DEL ANÁLISIS.</span>
                                        <label class="form-label semibold" for="descmet">Descripción metodología del análisis:</label>
                                        <textarea rows="4" class="form-control" id="descmet" name="descmet"><?php echo $key["descmet"] ?></textarea>
                                    </fieldset>
                                </div>
                                <div class=" col-lg-3 next inline-block">
                                    <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                </div>
                                <div class="previous inline-block">
                                    <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                </div>

                            </fieldset>
                            <fieldset>
                                <div class="col-lg-12">
                                    <h4>Paso 4: <span>Muestras a Analizar.</span></h4>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="descmate">Descripción del material:</label>
                                        <input value="<?php echo $key["descmate"] ?>" type="text" class="form-control" id="descmate" name="descmate">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="cantidad">Cantidad de piezas/muestras:</label>
                                        <input value="<?php echo $key["cantidad"] ?>" type="number" class="form-control" id="cantidad" name="cantidad">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Cargue anexos:</label></label>
                                        <p>Cargar en un único archivo PDF (el nombre del archivo no debe tener tildes) documentos adicionales como el proyecto de investigación propuesto para la intervención de los bienes (cuando el material no proviene de una Tenencia o una Autorización de intervención) o fotografías del material arqueológico.</p>
                                        Seleccione archivo: <input name="fichero" type="file" maxlength="150" accept="application/pdf">
                                        <input value="<?php echo $key["anexos"] ?>" id="prodId" name="anexos" type="hidden">
                                    </div>
                                </div>
                                <div class=" col-lg-3 next inline-block">
                                    <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                </div>
                                <div class="previous inline-block">
                                    <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="col-lg-12">
                                    <h4>Paso 5: <span>Datos Del Analisis:</span></h4>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="exampleInput">País:</label>
                                        <select id="pais" name="pais" class="form-control">
                                            <option> <?php echo $key["nomproyecto"] ?>" </option>

                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="ciudad">Ciudad:</label>
                                        <input value="<?php echo $key["ciudad"] ?>" type="text" class="form-control" id="ciudad" name="ciudad">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="institucion">Institución donde se realizarán los análisis:</label>
                                        <input value="<?php echo $key["institucion"] ?>" type="text" class="form-control" id="institucion" name="institucion">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="lugar">Lugar donde se realizarán los análisis:</label>
                                        <input value="<?php echo $key["lugar"] ?>" type="text" class="form-control" id="lugar" name="lugar">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="fecha_salida">Fecha de salida del país de los materiales:</label>
                                        <input value="<?php echo $key["fecha_salida"] ?>" type="date" class="form-control" id="fecha_salida" name="fecha_salida">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="fecha_retorno">Fecha de retorno de los mismos al país:</label>
                                        <input value="<?php echo $key["fecha_retorno"] ?>" type="date" class="form-control" id="fecha_retorno" name="fecha_retorno">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="nombre_encargado">Nombre de quien lleva el material:</label>
                                        <p>persona o empresa que se encargará del traslado.</p>
                                        <input value="<?php echo $key["nombre_encargado"] ?>" type="text" class="form-control" id="nombre_encargado" name="nombre_encargado">
                                        <input class="checkbox" style="margin: 15px 15px 15px 0;" id="terminos" type="checkbox">Acepto el tratamiento de mis datos personales
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input value="<?php echo $key["estado"] ?>" type="hidden" class="form-control" id="estado" name="estado">
                                    </div>
                                </div>
                                <div class="col-lg-2 previous inline-block">
                                    <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                </div>
                                <div class="inline-block">
                            </fieldset>

                    </div>
                <?php
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" name="submit" class="btn btn-primary submit" value="Enviar" id="submit_data">Gurdar Cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>