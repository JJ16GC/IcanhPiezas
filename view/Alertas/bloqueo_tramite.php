<?php

$rol = $_SESSION["rol_id"];
$id_u = $_SESSION["usuario_id"];
$id = $_GET["ID"];

$sql2 = "SELECT * FROM tramite_detalle WHERE tick_id = $id and usu_id = $id_u";
$usuario = new Usuario();
$result2 = $usuario->listar_tramites($sql2);
$rs = null;
foreach ($result2 as $key) {
    $rs = $key["tick_estado"];
}

if ($rs != null || $rol == 2) {
    require_once("tablas.php");
    $comentarios = true;
} else {
    $comentarios = false;
?>
    <div>
        <h1 style="margin-left: 400px; margin-top: 100px;">Datos No Encontrados</h1>
    </div>

<?php
}


?>