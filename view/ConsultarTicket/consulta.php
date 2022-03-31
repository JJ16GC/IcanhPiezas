<?php
require_once("../../Config/conexion.php");
if (isset($_SESSION["usuario_id"])) {
?>
    <!DOCTYPE html>
    <html>
    <?php require_once("../Head/head.php"); ?>
    <title>GACC- Sistema de Tickets</>::Consultar Ticket</title>
    </head>

    <body class="with-side-menu">

        <?php require_once("../Header/header.php"); ?>

        <div class="mobile-menu-left-overlay"></div>

        <?php require_once("../MainNav/nav.php"); ?>

        <!-- Contenido -->
        <div class="page-content">
            <div class="container-fluid">

                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3>Consultar Trámite</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Consultar Trámite</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>
                <div>

                    <?php require_once('../Alertas/alertasticket.php'); ?>
                </div>
                <div class="box-typical box-typical-padding">
                    <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th style="text-align: center; width: 5%;">Nro.Trámite</th>
                                <th style="text-align: center; width: 15%;">Usuario</th>
                                <th class="d-none d-sm-table-cell" style="text-align: center; width: 40%;">Categoria</th>
                                <th class="d-none d-sm-table-cell" style="text-align: center; width: 5%;">Estado</th>
                                <th class="d-none d-sm-table-cell" style="text-align: center; width: 20%;">Fecha Creación</th>
                                <th class="text-center" style="width: 15%;"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            require_once("../../Models/Tramites.php");
                            $rol_id = $_SESSION["rol_id"];
                            $user_id = $_SESSION["usuario_id"];
                            if ($_SESSION["rol_id"] == 1) {
                                $sql = "SELECT tramite_detalle.tick_id ,usu_id,usuario.correo as correo,tramite_detalle.categoria,tramite_detalle.tick_estado,tramite_detalle.fecha_creacion from tramite_detalle INNER JOIN usuario ON tramite_detalle.usu_id = usuario.usuario_id WHERE usu_id = $user_id";
                            } else {
                                $sql = "SELECT tramite_detalle.tick_id ,usu_id,usuario.correo as correo,tramite_detalle.categoria,tramite_detalle.tick_estado,tramite_detalle.fecha_creacion FROM tramite_detalle INNER JOIN usuario ON tramite_detalle.usu_id = usuario.usuario_id";
                            }

                            $usuario = new Usuario();
                            $result = $usuario->listar_tramites($sql);

                            foreach ($result as $key) {

                                $estado = $key["tick_estado"];

                            ?>
                                <tr>

                                    <td style="text-align: center;"> <?php echo $key["tick_id"]; ?></td>
                                    <td style="text-align: center;"> <?php echo $key["correo"] ?></td>
                                    <td style="text-align: center;"> <?php echo $key["categoria"] ?> </td>
                                    <?php if ($key["tick_estado"] == "Abierto") {
                                    ?>
                                        <td style="text-align: center;"><span class="label label-pill label-success"><?php echo $key["tick_estado"] ?></span> </td>

                                    <?php
                                    } else { ?>
                                        <td style="text-align: center;"><span class="label label-pill label-danger"><?php echo $key["tick_estado"] ?></td>
                                    <?php
                                    }  ?>

                                    <td style="text-align: center;"> <?php echo $key["fecha_creacion"] ?></td>
                                    <td style="text-align: center;"><a href="../DetalleTicket/detalle.php?ID=<?php echo $key["tick_id"] ?>&m=1">Ver</a></td>


                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!-- Contenido -->

        <?php require_once("../MainJs/js.php"); ?>


    </body>

    </html>
<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>