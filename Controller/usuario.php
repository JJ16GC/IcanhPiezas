<?php
require_once("../Config/conexion.php");
require_once("../Models/Usuario.php");
$usuario = new Usuario();

switch ($_GET["op"]) {
    case "guardaryeditar":
        if(empty($_POST["usuario_id"])){
            $usuario->insert_usuario($_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["pass"],$_POST["rol_id"]);
        }else{
           
        }
    }
?>