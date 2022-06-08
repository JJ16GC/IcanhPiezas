<?php
# Conexion a la base de datos
require_once('../../Config/conexion.php');

# Funcion Boton Verificacion de usuario registrado 
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("../../Models/Usuario.php");
    session_destroy();
    $usuario = new Usuario();
    $correo = $_POST["correo"];
    $usuario->get_usuario_x_correo($correo);
    if (empty($_SESSION["usuario_id"])) {
        header("Location:" . conectar::ruta() . "index.php?m=1");
    } else {
        # Creacion del codigo de verifiacion
        $bytes = openssl_random_pseudo_bytes(4);
        $token = bin2hex($bytes);
        session_start();
        $_SESSION['token'] = $token;
        $_SESSION['correo'] = $correo;
        header("Location:" . conectar::ruta() . "correos/index.php?pag=2");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetear Password</title>

    <link rel="stylesheet" href="../../public/css/paginas/login_reseteo.css">
    <link rel="stylesheet" href="../../public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/lib/bootstrap/styles.css">
    <link rel="stylesheet" href="../../public/css/lib/bootstrap-sweetalert/sweetalert.css">
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
                        <img src="../../public/img/logo_ICANH.png" alt="" id="imgtipo">
                    </div>
                    <header class="sign-title label label-primary" id="lbltitulo">Ingrese su correo electronico</header>

                    <!-- Mensajes de errores con el correo -->
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
                        }
                    }
                    ?>
                    <!-- Formulario para enviar codigo de verificacion -->
                    <div class="form-group">
                        <input required type="email" id="correo" name="correo" class="form-control" placeholder="E-mail" />
                    </div>
                    <p id="texto" class="text-center" style="width: 16rem;">Recibira un codigo de confirmacion en su correo electronico</p>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button id="log" type="submit" class="btn btn-rounded">Enviar Codigo</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>