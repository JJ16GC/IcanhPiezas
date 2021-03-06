<?php

# Llamada clase conexion

require_once("Config/conexion.php");

# Llamada metodo de inicio sesion atravez de POST 

if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("Models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}
?>

<!-- CONTENIDO -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICANH - Sistema de Trámites - Login</title>
    <link rel="icon" type="image/png" href="public/img/icono.png">
    <link rel="stylesheet" href="public/css/paginas/login.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/styles.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap-sweetalert/sweetalert.css">

</head>

<!-- Formulario de inicio de sesion -->

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

                    <!-- Alertas de registro por Inicio de Sesion con Google -->

                    <?php require_once('view/Alertas/alertas.php'); ?>
                    <?php if (isset($_SESSION["inicio"])) {
                        echo '<div style="text-align:center" class="alert alert-success alert-close alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">✔</span>
                        </button>
                        Usuario Creado ! <br> Inicie Sesion Nuevamente.
                    </div>';
                    }
                    ?>

                    <div class="form-group">
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="E-mail" />
                    </div>
                    <div style="display: flex;" class="form-group">
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" />
                        <a id="show_password" style="padding: 5px; margin: 4px 2px 0 2px;" type="button"> <span class="glyphicon glyphicon-eye-close icon"></span> </a>
                    </div>
                    <div class="form-group">
                        <div class="float-left reset">
                            <a href="#" id="btnsoporte">Acceso Soporte</a>

                        </div>

                        <div id="reset" class="float-right reset">
                            <a href="view/Registro/" id="btnsoporte">Registrarse</a>
                        </div>
                        <div class="float-right reset">
                            <a href="view/Resetear/resetear.php" id="btnrecuperar">Olvidó su contraseña ?</a>
                        </div>

                    </div>

                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button id="log" type="submit" class="btn btn-rounded">Acceder</button>

                    <hr style="margin: 1em;">

                    <div id="google">
                        <?php

                        # Llamado a los metodos para iniciar sesion con Google
                        include('users/index.php');
                        ?>
                    </div>

                </form>
            </div>
        </div>
    </div>

    </div>

    <!-- CONTENIDO -->

    <!-- Scripts -->

    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <script src="public/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="index_.js"></script>

    <!-- Scripts -->

</body>

</html>