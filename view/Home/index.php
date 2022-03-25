<?php
require_once("../../Config/conexion.php");
require_once("../../Models/Usuario.php");
require('../../users/login_google.php');
$correo = $_SESSION['user_email_address'];
$usuario = new Usuario();
$usuario->get_usuario_x_correo($correo);
if (empty($_SESSION["usuario_id"])){
    $usuario->insert_usuario($nombre, $apellido, $correo, $pass, $rol_id);
    header("Location:" . conectar::ruta() . "index.php?m=3");
    session_destroy();
}
$_SESSION["nombre"] = $_SESSION['user_first_name'];
$_SESSION["apellido"] = $_SESSION['user_last_name'];
$_SESSION["rol_id"] = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICANH - Sistema de Tickets - Home</title>
</head>

<body>
    <?php require_once("../../users/index.php");
    if ($_SESSION['user_email_address'] == '') {
        header("Location:" . conectar::ruta() . "index.php");
    }
    header("Location:" . conectar::ruta() . "view/Home/indexlogin.php");
    ?>
</body>

</html>