<?php

# HOME de inicio de sesion por Google

# Conexion a base de datos y verificacion de usuario 
require_once("../../Config/conexion.php");
require_once("../../Models/Usuario.php");
require('../../users/login_google.php');
$correo = $_SESSION['user_email_address'];
$_SESSION["nombre"] = $_SESSION['user_first_name'];
$_SESSION["apellido"] = $_SESSION['user_last_name'];
$_SESSION["rol_id"] = 1;
$usuario = new Usuario();
$usuario->get_usuario_x_correo($correo);

# Registro de usuario no existente

if (empty($_SESSION["usuario_id"])) {
    $usuario->insert_usuario($nombre, $apellido, $correo, $pass, $rol_id);
    session_reset();
    $_SESSION["inicio"] = "Y";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICANH - Sistema de Tramites - Home</title>
</head>

<!-- Contenido -->

<body>
    <!-- Verificacion de inicio de sesion --> 
    <?php require_once("../../users/index.php");
    if ($_SESSION['user_email_address'] == '') {
        header("Location:" . conectar::ruta() . "index.php?=3");
    }
    header("Location:" . conectar::ruta() . "view/Home/indexlogin.php");
    ?>
</body>

<!-- Contenido -->

</html>