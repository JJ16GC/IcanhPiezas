<?php

#  Visualizar estado del tramite analisis en Detalle tramites

$sql = "SELECT * FROM tramite WHERE id_tramite = $id";
$usuario = new Usuario();
$result = $usuario->listar_tramites($sql);
foreach ($result as $key) {
    $_SESSION["estado"] = $key["estado"];
    $_SESSION["entidad"] = $key["entidadvinc"];
}
if ($_SESSION["estado"] == "Abierto") {
?>
    <a style="text-align: center;"><span class="label label-pill label-success"><?php echo "Tramite " . $_SESSION["estado"] ?></span> </a>
<?php
} else { ?>
    <a style="text-align: center;"><span class="label label-pill label-danger"><?php echo "Tramite " . $_SESSION["estado"] ?></td>
        <?php
    }  ?>
        <ol class="breadcrumb breadcrumb-simple">
            <li><a href="../Home/indexlogin.php">Home</a></li>
            <li class="active">Consultar Ticket</li>
        </ol>

