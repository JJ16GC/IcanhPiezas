<?php
require_once("Config/conexion.php");
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("Models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICANH - Sistema de Tickets - Login</title>



    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/styles.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap-sweetalert/sweetalert.css">

</head>

<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" action="" method="post" id="login_form">
                    <div class="rectangulo">

                    </div>
                    <input type="hidden" id="rol_id" name="rol_id" value="1">

                    <div class="sign-avatar">
                        <img src="public/img/logo_ICANH.png" alt="" id="imgtipo">
                    </div>
                    <header class="sign-title label label-primary" id="lbltitulo">Acceso Usuario</header>
                    

                    <?php
                    if (isset($_GET["m"])) {
                        switch ($_GET["m"]) {
                            case "1";
                    ?>
                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="font-icon font-icon-warning"></i>
                                    El Usuario y/o Contraseña son incorrectos.
                                </div>
                            <?php
                                break;

                            case "2";
                            ?>
                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="font-icon font-icon-warning"></i>
                                    Los campos estan vacios.
                                </div>
                            <?php
                                break;

                            case "3";
                            ?>
                                <div class="alert alert-success alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">✔</span>
                                    </button>
                                    Usuario Creado Existosamente.
                                </div>
                    <?php
                                break;
                        }
                    }
                    ?>

                    <div class="form-group">
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="E-mail" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <div class="float-left reset">
                            <a href="#" id="btnsoporte">Acceso Soporte</a>
                        </div>
                        <div class="float-right reset">
                            <a href="view/Registro/" id="btnsoporte">Registrarse</a>
                        </div>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button id="log" type="submit" class="btn btn-rounded">Acceder</button>
                    <hr>
                    <div>
                        <?php

                        include('users/index.php');

                        ?>
                    </div>

                </form>
            </div>
        </div>
    </div>

    </div>
    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <script src="public/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

    </script>

</body>

</html>