<?php
require_once("../../Config/conexion.php");
require_once("../../Models/Usuario.php");

$correo = $_GET["ID"];
$estado = $_GET["estado"];
if (isset($correo)) {
    $usuario = new Usuario();
    if ($estado == 1) {
        $usuario->update_estado_desh($correo);
    } else if ($estado == 0) {
        $usuario->update_estado_hab($correo);
    }
    header("Location:" . conectar::ruta() . "view/Deshabilitar/consulta.php");
}