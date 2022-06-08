<?php

# Mostrar los datos en la seccion Detalle tramite del tramite de exhibicion por ID 

require_once("../../Models/Tramites.php");
$id = $_GET["ID"];
$sql = "SELECT * FROM tramite_exh WHERE id_tramite = $id";
$usuario = new Usuario();
$result = $usuario->listar_tramites($sql);

if (isset($_GET["m"])) {
    switch ($_GET["m"]) {
        case "1";
?>
            <script>
                var element = document.getElementById("tab1");
                element.className += "active";
            </script>

            <div>
                <?php
                foreach ($result as $key) {
                ?>
                    <div class="box-typical box-typical-padding">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="num_certf">Número de Certificado de Registro y Tenencia ICANH:</label>
                                    <input type="text" class="form-control" id="num_certf" name="num_certf" value="<?php echo $key["num_certf"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="nom_solic">Solicitante:</label>
                                    <input type="text" class="form-control" id="nom_solic" name="nom_solic" value="<?php echo $key["nom_solic"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tipo_doc">Tipo de Documento:</label>
                                    <input type="text" class="form-control" id="tipo_doc" name="tipo_doc" value="<?php echo $key["tipo_doc"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="cual">Cuál:</label>
                                    <input type="text" class="form-control" id="cual" name="cual" value="<?php echo $key["cual"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="num_doc">Número de Documento:</label>
                                    <input type="text" class="form-control" id="num_doc" name="num_doc" value="<?php echo $key["num_doc"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="num_piezas">Número total de piezas a exportar:</label>
                                    <input type="text" class="form-control" id="num_piezas" name="num_piezas" value="<?php echo $key["num_piezas"] ?>" readonly>
                                </fieldset>

                            </div>
                        </div>
                    <?php
                }
                    ?>

                <?php
                break;

            case "2";

                ?>
                    <script>
                        var element = document.getElementById("tab2");
                        element.className += "active";
                    </script>

                    <div>
                        <?php
                        foreach ($result as $key) {
                        ?>
                            <div class="box-typical box-typical-padding">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tick_titulo">Nombre Completo Responsable:</label>
                                            <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["p_nombre"];
                                                                                                                                echo " ";
                                                                                                                                echo $key["s_nombre"];
                                                                                                                                echo " ";
                                                                                                                                echo $key["p_apellido"];
                                                                                                                                echo " ";
                                                                                                                                echo $key["s_apellido"];
                                                                                                                                echo " " ?>" readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tipodoc">Tipo de Documento:</label>
                                            <input type="text" class="form-control" id="tipodoc" name="tipodoc" value="<?php echo $key["tipo_doc_r"] ?>" readonly>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tick_titulo">Cuál:</label>
                                            <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["cual_r"] ?>" readonly>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tick_titulo">Número de Documento:</label>
                                            <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["num_doc_r"] ?>" readonly>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tick_titulo">Correo Electronico:</label>
                                            <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["correo"] ?>" readonly>
                                        </fieldset>
                                    </div>

                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    <?php
                    break;

                case "3";
                    ?>
                        <script>
                            var element = document.getElementById("tab3");
                            element.className += "active";
                        </script>

                        <div>
                            <?php
                            foreach ($result as $key) {
                            ?>
                                <div class="box-typical box-typical-padding">
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="f_inicion_exp">Fecha inicio de exposición:</label>
                                                <input type="text" class="form-control" id="f_inicion_exp" name="f_inicion_exp" value="<?php echo $key["f_inicion_exp"] ?>" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="f_final_exp">Fecha final de exposición:</label>
                                                <input type="text" class="form-control" id="f_final_exp" name="f_final_exp" value="<?php echo $key["f_final_exp"] ?>" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="pais">País:</label>
                                                <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $key["pais"] ?>" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="ciudad">Ciudad:</label>
                                                <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $key["ciudad"] ?>" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="lugar">Lugar donde se realizarán los análisis:</label>
                                                <input type="text" class="form-control" id="lugar" name="lugar" value="<?php echo $key["lugar"] ?>" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="nombre_exp">Nombre de la exposición/evento:</label>
                                                <input type="text" class="form-control" id="nombre_exp" name="nombre_exp" value="<?php echo $key["nombre_exp"] ?>" readonly>
                                            </fieldset>
                                        </div>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        <?php
                        break;

                    case "4";
                        ?>
                            <script>
                                var element = document.getElementById("tab4");
                                element.className += "active";
                            </script>

                            <div>
                                <?php
                                foreach ($result as $key) {
                                ?>
                                    <div class="box-typical box-typical-padding">
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="fecha_salida">Fecha De Salida:</label>
                                                    <input type="text" class="form-control" id="fecha_salida" name="fecha_salida" value="<?php echo $key["fecha_salida"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="fecha_retorno">Fecha De Retorno:</label>
                                                    <input type="text" class="form-control" id="fecha_retorno" name="fecha_retorno" value="<?php echo $key["fecha_retorno"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <a class="btn btn-primary" href="../../public/upload/<?php echo $key["anexos"] ?>" target="_blank">Ver anexos</a>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <a class="btn btn-primary" href="../../public/upload/<?php echo $key["piezas"] ?>" target="_blank">Ver piezas</a>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="datos_adic">Datos Adicionales:</label>
                                                    <input type="text" class="form-control" id="datos_adic" name="datos_adic" value="<?php echo $key["datos_adic"] ?>" readonly>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                    <?php
                        break;
                }
            }
                    ?>