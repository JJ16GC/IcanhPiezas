<?php

require_once("../../Models/Tramites.php");

# Mostrar los datos en la seccion Detalle tramite del tramite de anlisis por ID 

$id = $_GET["ID"];
$sql = "SELECT * FROM tramite WHERE id_tramite = $id";
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
                                    <label class="form-label semibold" for="tipodoc">Tipo Documento</label>
                                    <input type="text" class="form-control" id="tipodoc" name="tipodoc" value="<?php echo $key["tipodoc"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tick_titulo">Otro</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["otrotip"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="numdoc">N° Documento</label>
                                    <input type="text" class="form-control" id="numdoc" name="numdoc" value="<?php echo $key["numdoc"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="nombre">Nombre Completo</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $key["pnombre"];
                                                                                                                        echo " ";
                                                                                                                        echo $key["snombre"];
                                                                                                                        echo " ";
                                                                                                                        echo $key["papellido"];
                                                                                                                        echo " ";
                                                                                                                        echo $key["sapellido"];
                                                                                                                        echo " " ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="profesion">Profesión</label>
                                    <input type="text" class="form-control" id="profesion" name="profesion" value="<?php echo $key["profesion"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="telefono">Telefono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $key["telefono"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="celular">Celular</label>
                                    <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $key["celular"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="correo">Correo Electronico</label>
                                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $key["correo"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $key["direccion"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="entidadvinc">Entidad Vinculado</label>
                                    <input type="text" class="form-control" id="entidadvinc" name="entidadvinc" value="<?php echo $key["entidadvinc"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="cargo">Cargo</label>
                                    <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $key["cargo"] ?>" readonly>
                                </fieldset>
                            </div>


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
                                        <label class="form-label semibold" for="nomproyecto">Nombre del proyecto de investigación:</label>
                                        <input type="text" class="form-control" id="nomproyecto" name="nomproyecto" value="<?php echo $key["nomproyecto"] ?>" readonly>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="numcert">No. AIA / Resolución ICANH:</label>
                                        <input type="text" class="form-control" id="numcert" name="numcert" value="<?php echo $key["numcert"] ?>" readonly>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="tick_titulo">Titulo</label>
                                        <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["titulo"] ?>" readonly>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="numaut">No. Certificado de Registro y Tenencia ICANH:</label>
                                        <input type="text" class="form-control" id="numaut" name="numaut" value="<?php echo $key["numaut"] ?>" readonly>
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
                                            <label class="form-label semibold" for="desctipo">Descripción del Tipo de análisis</label>
                                            <textarea rows="6" class="form-control" id="desctipo" name="desctipo" readonly><?php echo $key["desctipo"] ?></textarea>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="descmet">METODOLOGÍA DEL ANÁLISIS</label>
                                            <textarea rows="6" class="form-control" id="descmet" name="descmet" readonly><?php echo $key["descmet"] ?></textarea>
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
                                                <label class="form-label semibold" for="descmate">Descripción del material</label>
                                                <input type="text" class="form-control" id="descmate" name="descmate" value="<?php echo $key["descmate"] ?>" readonly>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="cantidad">Cantidad de piezas/muestras</label>
                                                <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $key["cantidad"] ?>" readonly>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <?php if ($key["anexos"] != "") { ?>
                                                    <a class="btn btn-primary" href="../../public/upload/<?php echo $key["anexos"] ?>" target="_blank">Ver anexos</a>
                                                <?php } ?>

                                            </fieldset>
                                        </div>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        <?php
                        break;

                    case "5";
                        ?>
                            <script>
                                var element = document.getElementById("tab5");
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
                                                    <label class="form-label semibold" for="pais">País</label>
                                                    <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $key["pais"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="ciudad">Ciudad</label>
                                                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $key["ciudad"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="institucion">Institución donde se realizarán los análisis</label>
                                                    <input type="text" class="form-control" id="institucion" name="institucion" value="<?php echo $key["institucion"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="lugar">Lugar donde se realizarán los análisis</label>
                                                    <input type="text" class="form-control" id="lugar" name="lugar" value="<?php echo $key["lugar"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="fecha_salida">Fecha Salida</label>
                                                    <input type="text" class="form-control" id="fecha_salida" name="fecha_salida" value="<?php echo $key["fecha_salida"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="fecha_retorno">Fecha retorno</label>
                                                    <input type="text" class="form-control" id="fecha_retorno" name="fecha_retorno" value="<?php echo $key["fecha_retorno"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="nomproyecto">Nombre de quien lleva el material</label>
                                                    <input type="text" class="form-control" id="nomproyecto" name="nomproyecto" value="<?php echo $key["nomproyecto"] ?>" readonly>
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