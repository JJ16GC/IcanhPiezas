<link rel="stylesheet" href="../../public/css/paginas/activity.min.css">

<?php
require_once("../../Models/Tramites.php");
$usuario = new Usuario();
$datos = $usuario->listar_comentarios($_GET["ID"]);
?>
<?php
foreach ($datos as $row) {
?>

    <article  class="activity-line-item box-typical">
        <div class="activity-line-date">
            <?php echo date("d/m/Y", strtotime($row["fecha_creacion"])); ?>
        </div>
        <header class="activity-line-item-header">
            <div class="activity-line-item-user">
                <div class="activity-line-item-user-photo">
                    <a href="#">
                        <?php
                        if ($row['rol_id'] == 1) {
                        ?>
                            <img width="50px" src="../../public/img/1.png">
                        <?php
                        } else {
                        ?>
                            <img width="50px" src="../../public/img/icono.png">
                        <?php
                        }
                        ?>
                    </a>
                </div>
                <div class="activity-line-item-user-name"><?php echo $row['nombre'] . ' ' . $row['apellido']; ?></div>
                <div class="activity-line-item-user-status">
                    <?php
                    if ($row['rol_id'] == 1) {
                        echo 'Usuario';
                    } else {
                        echo 'Soporte';
                    }
                    ?>
                </div>
            </div>
        </header>
        <div class="activity-line-action-list">
            <section class="activity-line-action">
                <div class="time"><?php echo date("H:i:s", strtotime($row["fecha_creacion"])); ?></div>
                <div class="cont">
                    <div class="cont-in">
                        <p>
                            <?php echo $row["comentario"]; ?>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </article>
<?php
}


?>