<?php
require_once("../../Config/conexion.php");
if (isset($_SESSION["usuario_id"])) {
?>
    <!DOCTYPE html>
    <html>
    <?php require_once("../Head/head.php"); ?>
    <title>GACC- Sistema de Tickets</>::Consultar Ticket</title>
    <link rel="stylesheet" href="../../public/css/paginas/detalle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <h3>Detalle Trámite</h3>
                                <?php
                                require_once("../../Models/Tramites.php");
                                $id = $_GET["ID"];
                                $sql = "SELECT * FROM tramite WHERE id_tramite = $id";
                                $usuario = new Usuario();
                                $result = $usuario->listar_tramites($sql);
                                foreach ($result as $key) {
                                    $estado = $key["estado"];
                                    $encargado = $key["nombre_encargado"];
                                }
                                if ($estado == "Abierto") {
                                ?>
                                    <a style="text-align: center;"><span class="label label-pill label-success"><?php echo "Tramite " . $estado ?></span> </a>
                                <?php
                                } else { ?>
                                    <a style="text-align: center;"><span class="label label-pill label-danger"><?php echo "Tramite " . $estado ?></td>
                                        <?php
                                    }  ?>
                                        <ol class="breadcrumb breadcrumb-simple">
                                            <li><a href="#">Home</a></li>
                                            <li class="active">Consultar Ticket</li>
                                        </ol>

                            </div>

                        </div>
                    </div>
                </header>

                <div class="topnav" id="myTopnav">
                    <?php $id = $_GET["ID"]; ?>
                    <a id="tab1" href="?ID=<?php echo $id ?>&m=1">Información Básica Del Solicitante</a>
                    <a id="tab2" href="?ID=<?php echo $id ?>&m=2">Procedencia Material</a>
                    <a id="tab3" href="?ID=<?php echo $id ?>&m=3">Información Analisis</a>
                    <a id="tab4" href="?ID=<?php echo $id ?>&m=4">Muestras a Analizar</a>
                    <a id="tab5" href="?ID=<?php echo $id ?>&m=5">Datos Analisis</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div>
                    <?php require_once("tablas.php") ?>
                </div>


                <?php
                if ($estado == "Abierto") { ?>
                    <div class="box-typical box-typical-padding" id="pnldetalle">
                        <p>
                            Ingrese su duda o consulta
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tickd_descrip">Descripción</label>
                                    <div class="">
                                        <textarea rows="4" class="form-control" id="desctipo" name="desctipo"></textarea>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <button type="button" id="btnenviar" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
                                <?php if ($_SESSION["rol_id"] == 2) {
                                    echo '<button type="button" id="btncerrarticket" class="btn btn-rounded btn-inline btn-danger">Cerrar Ticket</button>';
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php require_once("../MainJs/js.php"); ?>
        <div>

        </div>

    </body>
    <script type="text/javascript" src="detalle.js"></script>

    </html>
<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>