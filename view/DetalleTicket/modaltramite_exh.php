<?php if (isset($_POST["submit"]) and $_POST["submit"] == "Enviar") {

    require_once("../../Models/Tramites.php");
    $usuario = new Usuario();
    require_once("../../Controller/editar_tramite_exh.php");
}

?>
<link rel="stylesheet" href="../../public/css/paginas/formulario.css">


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
                $id = $_GET["ID"];
                $sql = "SELECT * FROM tramite_exh WHERE id_tramite = $id";
                $usuario = new Usuario();
                $result = $usuario->listar_tramites($sql);
                foreach ($result as $key) {  ?>

                    <div class="container">
                        <form id="regiration_form" action="" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="col-lg-12">
                                    <h4>Paso 1: <span>Bienes Muebles A Exportar</span></h4>
                                    <input value="<?php echo $key["id_tramite"] ?>" id="prodId" name="id_tramite" type="hidden">
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="num_certf">Número de Certificado de Registro y Tenencia ICANH:</label>
                                        <input value="<?php echo $key["num_certf"] ?>" type="text" class="form-control" id="num_certf" name="num_certf">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="nom_solic">Solicitante:</span></label>
                                        <input value="<?php echo $key["nom_solic"] ?>" type="text" class="form-control" id="nom_solic" name="nom_solic">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="exampleInput">Tipo de Documento:</label>
                                        <select id="" name="tipo_doc" class="form-control">
                                            <option><?php echo $key["tipo_doc"] ?></option>
                                            <option>NIT</option>
                                            <option>Cédula de ciudadania</option>
                                            <option>Cédula de extranjeria</option>
                                            <option>Pasaporte</option>
                                            <option>Otro</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="cual">Cual:</label>
                                        <input value="<?php echo $key["cual"] ?>" type="text" class="form-control" id="cual" name="cual">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="num_doc">Numero de Documento:</span></label>
                                        <input value="<?php echo $key["num_doc"] ?>" type="text" class="form-control" id="num_doc" name="num_doc">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="num_piezas">Número total de piezas a exportar:</label>
                                        <input value="<?php echo $key["num_piezas"] ?>" type="text" class="form-control" id="num_piezas" name="num_piezas">
                                    </fieldset>
                                </div>
                                <div class="next col-lg-12">
                                    <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                </div>

                            </fieldset>
                            <fieldset>
                                <div class="col-lg-12">
                                    <h4>Paso 2: <span>Responsable De La Tenencia</span></h4>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="p_nombre">Primer Nombre:</label>
                                        <input value="<?php echo $key["p_nombre"] ?>" type="text" class="form-control" id="p_nombre" name="p_nombre">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="s_nombre">Segundo Nombre:</label>
                                        <input value="<?php echo $key["s_nombre"] ?>" type="text" class="form-control" id="s_nombre" name="s_nombre">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="p_apellido">Primer Apellido:</label>
                                        <input value="<?php echo $key["p_apellido"] ?>" type="text" class="form-control" id="p_apellido" name="p_apellido">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="s_apellido">Segundo Apellido:</label>
                                        <input value="<?php echo $key["s_apellido"] ?>" type="text" class="form-control" id="s_apellido" name="s_apellido">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="exampleInput">Tipo de Documento:</label>
                                        <select id="" name="tipo_doc_r" class="form-control">
                                            <option><?php echo $key["tipo_doc_r"] ?></option>
                                            <option>NIT</option>
                                            <option>Cédula de ciudadania</option>
                                            <option>Cédula de extranjeria</option>
                                            <option>Pasaporte</option>
                                            <option>Otro</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="cual_r">Cual:</label>
                                        <input value="<?php echo $key["cual_r"] ?>" type="text" class="form-control" id="cual_r" name="cual_r">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="num_doc_r">Numero de Documento:</span></label>
                                        <input value="<?php echo $key["num_doc_r"] ?>" type="text" class="form-control" id="num_doc_r" name="num_doc_r">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="correo">Correo Electronico:</span></label>
                                        <input value="<?php echo $key["correo"] ?>" type="text" class="form-control" id="correo" name="correo">
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
                                    <h4>Paso 3: <span>Datos De La Expocisión<noscript></noscript></span></h4>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="f_inicion_exp">Fecha inicio de exposición:</label>
                                        <input value="<?php echo $key["f_inicion_exp"] ?>" type="text" class="form-control" id="f_inicion_exp" name="f_inicion_exp">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="f_final_exp">Fecha final de exposición: </label>
                                        <input value="<?php echo $key["f_final_exp"] ?>" type="text" class="form-control" id="f_final_exp" name="f_final_exp">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="pais">País:</label>
                                        <input value="<?php echo $key["pais"] ?>" type="text" class="form-control" id="pais" name="pais">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="ciudad">Ciudad:</label>
                                        <input value="<?php echo $key["ciudad"] ?>" type="text" class="form-control" id="ciudad" name="ciudad">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="lugar">Lugar donde se realizarán los análisis:</label>
                                        <input value="<?php echo $key["lugar"] ?>" type="text" class="form-control" id="lugar" name="lugar">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="nombre_exp">Nombre de la exposición/evento:</span></label>
                                        <input value="<?php echo $key["nombre_exp"] ?>" type="text" class="form-control" id="nombre_exp" name="nombre_exp">
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
                                    <h4>Paso 4: <span>Fecha De Salida Y Retorno.</span></h4>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="fecha_salida">Fecha De Salida:</label>
                                        <input value="<?php echo $key["fecha_salida"] ?>" type="text" class="form-control" id="fecha_salida" name="fecha_salida">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="fecha_retorno">Fecha De Retorno:</label>
                                        <input value="<?php echo $key["fecha_retorno"] ?>" type="text" class="form-control" id="fecha_retorno" name="fecha_retorno">
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Cargue piezas:</label></label>
                                        <p>Cargar en un único archivo PDF (el nombre del archivo no debe tener tildes) documentos adicionales como el proyecto de investigación propuesto para la intervención de los bienes (cuando el material no proviene de una Tenencia o una Autorización de intervención) o fotografías del material arqueológico.</p>
                                        Seleccione archivo: <input name="fichero2" type="file" maxlength="150" accept="application/pdf">
                                        <input value="<?php echo $key["piezas"] ?>" id="prodId" name="piezas" type="hidden">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input value="<?php echo $key["estado"] ?>" type="hidden" class="form-control" id="estado" name="estado">
                                    </div>
                                </div>
                                <div class="previous inline-block">
                                    <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label semibold" for="datos_adic">Datos Adicionales:</label>
                                        <input value="<?php echo $key["datos_adic"] ?>" type="text" class="form-control" id="datos_adic" name="datos_adic">
                                    </div>
                                </div>
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