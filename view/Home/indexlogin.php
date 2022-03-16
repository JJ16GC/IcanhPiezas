<?php 
require_once("../../Config/conexion.php");
if ($_SESSION['usuario_id'] == '') {
    header("Location:" . conectar::ruta() . "index.php");
}

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
<a class="dropdown-item" href="../CerrarSesion//cerrarsesion.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
</body>
</html>