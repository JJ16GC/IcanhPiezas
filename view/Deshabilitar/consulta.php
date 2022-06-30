<?php

# Conexion a la base de datos y Verificacion de inicio de sesion

require_once("../../Config/conexion.php");
if (isset($_SESSION["usuario_id"])) {
?>
    <!DOCTYPE html>
    <html>
    <?php require_once("../Head/head.php"); ?>


    <title>ICANH - Sistema de Trámites - Consultar Trámite</title>
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
                                <h3>Deshabilitar Administrador</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="../Home/indexlogin.php">Home</a></li>
                                    <li class="active">Deshabilitar Administrador</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>
                <div>
                    <!-- Mensaje de Ticket creado con exito  -->
                    <?php require_once('../Alertas/alertasticket.php'); ?>
                </div>
                <div class="box-typical box-typical-padding">
                    <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th style="text-align: center; width: 5%;">Nro. usuario</th>
                                <th style="text-align: center; width: 20%;">nombre</th>
                                <th class="d-none d-sm-table-cell" style="text-align: center; width: 30%;">apellido</th>
                                <th class="d-none d-sm-table-cell" style="text-align: center; width: 20%;">correo</th>
                                <th class="d-none d-sm-table-cell" style="text-align: center; width: 20%;">fecha creacion</th>
                                <th class="d-none d-sm-table-cell" style="text-align: center; width: 5%;">Estado</th>
                                
                                <th class="text-center" style="width: 10%;"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            # Listar tramites analisis y/o exhibicion para usuarios

                            require_once("../../Models/Tramites.php");
                            $rol_id = $_SESSION["rol_id"];
                            $user_id = $_SESSION["usuario_id"];
                            $sql = "SELECT * FROM `usuario` WHERE rol_id = 2";


                            $usuario = new Usuario();
                            $result = $usuario->listar_tramites($sql);

                            foreach ($result as $key) {


                            ?>
                                <tr>

                                    <td style="text-align: center;"><?php echo $key["usuario_id"]; ?></td>
                                    <td style="text-align: center;"> <?php echo $key["nombre"] ?></td>
                                    <td style="text-align: center;"> <?php echo $key["apellido"] ?> </td>
                                    <td style="text-align: center;"> <?php echo $key["correo"] ?> </td>
                                    <td style="text-align: center;"> <?php echo $key["fecha_creacion"] ?></td>
                                    <td style="text-align: center;"> <?php echo $key["estado"] ?> </td>
                                    <td style="text-align: center;"><a style="font-size: small; padding: 0.2rem 1rem" class="btn btn-secundary" href="deshabilitar.php?ID=<?php echo $key["correo"]."&estado=".$key["estado"] ?>"><?php if($key["estado"] == 1){echo "Deshabilitar";}else{echo "Habilitar";} ?></a></td>



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

    <script src="consulta.js"></script>

    </html>
<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>