<?php
# Conexion a la base de datos y verificacion de codigo
require_once('../../Config/conexion.php');
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    $token = $_POST["token"];
    if (($_SESSION['token']) != $token) {
        header("Location:" . conectar::ruta() . "view/Resetear/verificar.php?m=1");
    } else {

        header("Location:" . conectar::ruta() . "view/Resetear/cambio.php");
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

            <!-- Formulario para ingresar el codigo de verificacion --> 
                <form class="sign-box" action="" method="post" id="login_form">
                    <div class="rectangulo">

                    </div>
                    <input type="hidden" id="rol_id" name="rol_id" value="1">

                    <div class="sign-avatar">
                        <img src="../../public/img/logo_ICANH.png" alt="" id="imgtipo">
                    </div>
                    <header style="margin-left: 1px;" class="sign-title label label-primary" id="lbltitulo">Ingrese su codigo de verificación</header>
                    <?php require_once('../Alertas/verificar.php'); ?>
                    <div class="form-group">
                        <input required type="text" id="token" name="token" class="form-control" placeholder="Ingrese su codigo" />
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button id="log" type="submit" class="btn btn-rounded">Verificar</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>