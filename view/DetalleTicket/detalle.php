<?php

# Conexion a la base de datos

require_once("../../Config/conexion.php");
require_once("../../Models/Tramites.php");

# Funcion del boton para cerrar tramite 

if (isset($_POST["btncerrarticket"]) and $_POST["btncerrarticket"] == "si") {
    require_once("../../Models/Tramites.php");
    $usuario = new Usuario();
    if ($_SESSION["estado"] == "Abierto") {
        if ($_GET["c"] == "e") {
            $usuario->update_estado_cerrado_exh($_GET["ID"]);
            header("Location:" . Conectar::ruta() . "correos/index.php?pag=8&ID=" . $_GET["ID"] . "&c=e");
        } else {
            $usuario->update_estado_cerrado($_GET["ID"]);
            header("Location:" . Conectar::ruta() . "correos/index.php?pag=7&ID=" . $_GET["ID"] . "&c=a");
        }
    } else {
        if ($_GET["c"] == "e") {
            $usuario->update_estado_abierto_exh($_GET["ID"]);
            header("Location:" . Conectar::ruta() . "view/ConsultarTicket/consulta.php");
        } else {
            $usuario->update_estado_abierto($_GET["ID"]);
            header("Location:" . Conectar::ruta() . "view/ConsultarTicket/consulta.php");
        }
    }
}

# Funcion del boton para crear un comentario en los tramites de ehxibicion

if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    if ($_GET["c"] == "e") {
        require_once("../../Models/Tramites.php");
        $usuario = new Usuario();
        $comentario = $_POST["comentario"];
        $cat = $_GET["c"];
        $tramite_id = $_GET["ID"];
        $_SESSION['tr_e_id'] = $tramite_id;
        $usuario_id = $_SESSION["usuario_id"];
        $usuario->insertar_com_exh($tramite_id, $usuario_id, $comentario);
        if ($_SESSION["rol_id"] == 2) {
            header("Location:" . Conectar::ruta() . "correos/index.php?pag=5&ID=" . $tramite_id . "&c=e");
        } else {
            header("Location:" . Conectar::ruta() . "view/ConsultarTicket/consulta.php");
        }
    }
    # Funcion del boton para crear un comentario en los tramites de analisis
    require_once("../../Models/Tramites.php");
    $usuario = new Usuario();
    $comentario = $_POST["comentario"];
    $tramite_id = $_GET["ID"];
    $_SESSION['tr_a_id'] = $tramite_id;
    $usuario_id = $_SESSION["usuario_id"];
    $usuario->insertar_comentario($tramite_id, $usuario_id, $comentario);
    if ($_SESSION["rol_id"] == 2) {
        header("Location:" . Conectar::ruta() . "correos/index.php?pag=6&ID=" . $tramite_id . "&c=a");
    } else {
        header("Location:" . Conectar::ruta() . "view/ConsultarTicket/consulta.php");
    }
}

# Verificacion de inicio de sesion
if (isset($_SESSION["usuario_id"])) {
?>
    <!DOCTYPE html>
    <html>
    <?php require_once("../Head/head.php"); ?>
    <title>ICANH- Sistema de Trámites - Detalle Ticket</title>
    <link rel="stylesheet" href="../../public/css/paginas/detalle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="with-side-menu">

        <?php require_once("../Header/header.php"); ?>

        <div class="mobile-menu-left-overlay"></div>

        <?php require_once("../MainNav/nav.php"); ?>

        <!-- Contenido -->
        <div class="page-content">
            <div class="container-fluid">

                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">

                                <!-- Visualizacion detalle de tramites -->

                                <h3>Detalle Trámite</h3>
                                <?php
                                require_once("../../Models/Tramites.php");
                                $id = $_GET["ID"];
                                $cat = $_GET["c"];

                                if ($cat == "a") {
                                    require_once("detalle_a.php");
                                } else {
                                    require_once("detalle_exh.php");
                                }


                                ?>
                            </div>

                        </div>
                    </div>
                </header>

                <!-- Mostrar datos si es un tramite de analisis -->
                <?php if ($cat == "a") {
                    require_once("detalle_a.php");
                ?>
                    <div class="topnav" id="myTopnav">
                        <?php $id = $_GET["ID"]; ?>

                        <a id="tab1" href="?ID=<?php echo $id ?>&m=1&c=a">Información Básica Del Solicitante</a>
                        <a id="tab2" href="?ID=<?php echo $id ?>&m=2&c=a">Procedencia Material</a>
                        <a id="tab3" href="?ID=<?php echo $id ?>&m=3&c=a">Información Analisis</a>
                        <a id="tab4" href="?ID=<?php echo $id ?>&m=4&c=a">Muestras a Analizar</a>
                        <a id="tab5" href="?ID=<?php echo $id ?>&m=5&c=a">Datos Analisis</a>
                        <a class="btn-danger glyphicon glyphicon-pencil" style="margin: 2px 0 0 15px" id="tab6" data-toggle="modal" data-target="#exampleModal" href="#"></a>
                        <?php require("modaltramite.php") ?>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">

                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div>
                        <!-- Mostrar tramite solo del usuario activo -->
                        <?php require_once("../Alertas/bloqueo_tramite.php"); ?>
                    </div>
                    <div>
                        <section class="activity-line" id="lbldetalle">
                            <?php
                            # Mostrar comentarios solo del usuario activo 
                            if ($comentarios == true) {
                                require("../../Controller/comentarios.php");
                            }

                            ?>
                        </section>
                    </div>
                <?php
                } else {
                    require_once("detalle_exh.php");
                ?>
                    <!-- Mostrar datos si es un tramite de exhibicion -->
                    <div class="topnav" id="myTopnav">
                        <?php $id = $_GET["ID"]; ?>
                        <a id="tab1" href="?ID=<?php echo $id ?>&m=1&c=e">Bienes Muebles a Exportar</a>
                        <a id="tab2" href="?ID=<?php echo $id ?>&m=2&c=e">Responsable De La Tenencia.</a>
                        <a id="tab3" href="?ID=<?php echo $id ?>&m=3&c=e">Datos De La Exposición</a>
                        <a id="tab4" href="?ID=<?php echo $id ?>&m=4&c=e">Fecha De Salida Y Retorno</a>
                        <a class="btn-danger glyphicon glyphicon-pencil" style="margin: 2px 0 0 15px" id="tab6" data-toggle="modal" data-target="#exampleModal" href="#"></a>
                        <?php require("modaltramite_exh.php") ?>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">

                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div>
                        <!-- Mostrar tramite solo del usuario activo -->
                        <?php require_once("../Alertas/bloqueo_tramite_exh.php") ?>

                    </div>
                    <div>
                        <section class="activity-line" id="lbldetalle">
                            <?php
                            # Mostrar comentarios solo del usuario activo 
                            if ($comentarios == true) {
                                require("../../Controller/comentarios_exh.php");
                            }


                            ?>
                        </section>
                    </div>
                <?php
                }
                ?>

                <?php

                # Verificacion de tramite abierto 

                if ($_SESSION["estado"] == "Abierto" && $comentarios == true) { ?>

                    <!-- Formulario para nuevo comentario -->

                    <form class="sign-box" action="" method="post" id="login_form">
                        <div class="box-typical box-typical-padding" id="pnldetalle">
                            <p>
                                Ingrese su duda o consulta
                            </p>

                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="tickd_descrip">Comentarios</label>
                                        <div class="">
                                            <textarea rows="4" class="form-control" id="desctipo" name="comentario" required></textarea>
                                        </div>
                                    </fieldset>
                                </div>
                                <div style="display: inline-flex;" class="col-lg-12">
                                    <div>
                                        <input type="hidden" name="enviar" class="form-control" value="si" id="enviar">
                                        <button type="submit" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } ?>
                <form action="" method="post">
                    <div>
                        <!-- Cerrar tramite -->
                        <?php if ($_SESSION["rol_id"] == 2 && $key["estado"] == "Abierto") {

                        ?>
                            <div>
                                <input type="hidden" name="btncerrarticket" class="form-control" value="si" id="btncerrarticket">
                                <button type="submit" class="btn btn-rounded btn-inline btn-danger">Cerrar Tramite</button>
                            </div>;
                        <?php
                        } else if ($_SESSION["rol_id"] == 2 && $key["estado"] == "Cerrado") {

                        ?>
                            <div>
                                <!-- Abrir tramite -->
                                <input type="hidden" name="btncerrarticket" class="form-control" value="si" id="btncerrarticket">
                                <button type="submit" class="btn btn-rounded btn-inline btn-success">Abrir Tramite</button>
                            </div>;
                        <?php
                        } ?>

                    </div>
                </form>
            </div>
        </div>
        <?php require_once("../MainJs/js.php"); ?>
        <div>

        </div>

    </body>
    <script type="text/javascript" src="detalle.js"></script>

    </html>
<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>