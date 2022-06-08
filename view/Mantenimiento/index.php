<?php

# Conexion a la base de datos y verificacion de inicio de sesion

require_once("../../Config/conexion.php");
if (isset($_SESSION["usuario_id"])) {

    # Funcion de boton para crear nuevo usuario administrador

    if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
        require_once("../../Models/Usuario.php");
        $usuario = new Usuario();
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $pass = $_POST["pass"];
        $rol_id = '2';

        $usuario->insert_usuario($nombre, $apellido, $correo, $pass, $rol_id);

        header("Location:" . conectar::ruta() . "view/Mantenimiento/index.php?m=3");
    }


?>
    <!DOCTYPE html>
    <html>
    <?php require_once("../Head/head.php"); ?>


    <title>ICANH - Sistema de Trámites - Mantenimineto Usuarios</title>
    </head>

    <body class="with-side-menu">

        <?php require_once("../Header/header.php"); ?>

        <div class="mobile-menu-left-overlay"></div>

        <?php require_once("../MainNav/nav.php"); ?>

        <!-- Contenido -->
        <div class="page-content">
            <div class="container">
                <div id="container" class="container-fluid ">
                    <header class="section-header">
                        <div class="tbl">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <h4>Mantenimiento Usuarios</h4>
                                    <ol class="breadcrumb breadcrumb-simple">
                                        <li><a href="../Home/indexlogin.php">Home</a></li>
                                        <li class="active">Mantenimiento Usuarios</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="row">
                        <div class="col-lg-8 box-typical box-typical-padding">

                            <!-- Formulario Nuevo usuario administrador -->

                            <form class="sign-box" action="" method="post" id="admin-form">
                                <div class="rectangulo">
                                    <?php require_once('../Alertas/alertas.php'); ?>
                                </div>
                                <input type="hidden" id="rol_id" name="rol_id" value="1">
                                <h1 class="sign-title label label-primary" id="lbl">Registro Usuario Administrador </h1>

                                <div class="form-group">
                                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombres" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellidos" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" id="correo" name="correo" class="form-control" placeholder="E-mail" required />
                                </div>
                                <div style="display: flex;" class="form-group">
                                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" />
                                    <a id="show_password" style="padding: 5px; margin: 4px 2px 0 2px;" type="button"> <span class="glyphicon glyphicon-eye-close icon"></span> </a>
                                </div>
                                <input type="hidden" name="enviar" class="form-control" value="si" id="enviar">
                                <button type="submit" class="btn btn-rounded">Registrarse</button>




                            </form>
                        </div>
                    </div>
                </div>
                <!-- Contenido -->

                <?php require_once("../MainJs/js.php"); ?>



    </body>

    <script src="index.js"></script>

    </html>
<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>