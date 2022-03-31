<?php
require_once('../../Config/conexion.php');
require_once("../../Models/Usuario.php");
$usuario = new Usuario();
$correo = $_SESSION['correo'];
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    $pass = $_POST["pass"];
    $passconf = $_POST["passconf"];
    if ($pass == $passconf) {
        $contraseña = $pass;
        $usuario->update_pass($contraseña, $correo);
        header("Location:" . conectar::ruta() . "index.php?m=4");
    } else {
        header("Location:" . conectar::ruta() . "view/Resetear/cambio.php?m=1");
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
                    <header class="sign-title label label-primary" id="lbltitulo">Ingrese su nueva contraseña</header>


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
                                    Las contraseñas no coinciden
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

                    <div class="form-group">
                        <input required type="password" id="pass" name="pass" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input required type="password" id="passconf" name="passconf" class="form-control" placeholder="Confirmacion Password" />
                    </div>

                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button id="log" type="submit" class="btn btn-rounded">Cambiar Contraseña</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>