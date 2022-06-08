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
                                    <label class="form-label semibold" for="tick_titulo">Nombre Completo</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["pnombre"];
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
                                    <label class="form-label semibold" for="tick_titulo">Profesión</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["profesion"] ?>" readonly>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tick_titulo">Telefono/Celular</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["telefono"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tick_titulo">Correo Electronico</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["correo"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tick_titulo">Dirección</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["direccion"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tick_titulo">Entidad Vinculado</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["entidadvinc"] ?>" readonly>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tick_titulo">Cargo</label>
                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["cargo"] ?>" readonly>
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
                                        <label class="form-label semibold" for="tipodoc">Número de Autorización o Resolución ICANH</label>
                                        <input type="text" class="form-control" id="tipodoc" name="tipodoc" value="<?php echo $key["numaut"] ?>" readonly>
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
                                        <label class="form-label semibold" for="tick_titulo">Número de Certificado de Registro y Tenencia ICANH</label>
                                        <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["numcert"] ?>" readonly>
                                    </fieldset>
                                </div>

                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="tick_titulo">Nombre del proyecto de Investigación:</label>
                                        <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["nomproyecto"] ?>" readonly>
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
                                            <label class="form-label semibold" for="tipodoc">Descripción del Tipo de análisis</label>
                                            <textarea rows="6" class="form-control" id="desctipo" name="desctipo" readonly><?php echo $key["desctipo"] ?></textarea>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tick_titulo">METODOLOGÍA DEL ANÁLISIS</label>
                                            <textarea rows="6" class="form-control" id="desctipo" name="desctipo" readonly><?php echo $key["descmet"] ?></textarea>
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
                                                <label class="form-label semibold" for="tipodoc">Descripción del material</label>
                                                <input type="text" class="form-control" id="tipodoc" name="tipodoc" value="<?php echo $key["descmate"] ?>" readonly>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <label class="form-label semibold" for="tick_titulo">Cantidad de piezas/muestras</label>
                                                <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["cantidad"] ?>" readonly>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset class="form-group">
                                                <a class="btn btn-primary" href="../../public/upload/<?php echo $key["anexos"] ?>" target="_blank">Ver anexos</a>
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
                                                    <label class="form-label semibold" for="tipodoc">País</label>
                                                    <input type="text" class="form-control" id="tipodoc" name="tipodoc" value="<?php echo $key["pais"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Ciudad</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["ciudad"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Institución donde se realizarán los análisis</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["institucion"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Lugar donde se realizarán los análisis</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["lugar"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Fecha Salida</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["fecha_salida"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Fecha retorno</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["fecha_retorno"] ?>" readonly>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Nombre de quien lleva el material</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" value="<?php echo $key["nomproyecto"] ?>" readonly>
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