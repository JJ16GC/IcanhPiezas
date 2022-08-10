<?php
# Conexion a base de datos y verificacion de inicio de sesion 
require_once("../../Config/conexion.php");
if (!isset($_SESSION['usuario_id'])) {
    header("Location:" . conectar::ruta() . "index.php");
}

?>
<!DOCTYPE html>
<html>
<?php require_once("../Head/head.php"); ?>
<link rel="stylesheet" href="../../public/css/paginas/home.css">
<link rel="stylesheet" href="../../public/css/paginas/exhibicion.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<title>ICANH - Sistema de Trámites - Trámite De Exhibición</title>
</head>


<body class="with-side-menu">
    <?php require_once("../Header/header.php"); ?>
    <div class="mobile-menu-left-overlay"></div>
    <?php require_once("../MainNav/nav.php"); ?>
    <div class="page-content">

        <!-- Contenido -->
        <!-- Datos requeridos para un tramite de Analisis -->
        <div id="container" class="container-fluid" style="display: flex;  justify-content: center;">

            <div style="max-width: 850px;" class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div>
                            <div class="col-sm-12" style="margin-top: 15px;">
                                <p style="font-size: 25px; font-weight: bold; " class="">Salida de bienes arqueológicos para análisis: </p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <span>Diligenciar en el formulario "Solicitud de autorización de salida de material arqueológico para análisis en el exterior" disponible en el <a href="../TramiteAnalisis/FormularioA.php">enlace</a> la siguiente información:</strong></span>
                        </div>
                        <div class="col-sm-12">
                            <ol type="a">
                                <li>
                                    <a>Información básica del solicitante:</a> Número de documento, Tipo de documento, Primer Nombre, Segundo Nombre, Primer Apellido, Segundo Apellido, Solicitante, Profesión, Teléfono/Celular, Correo electrónico, Dirección, Entidad a la que se encuentra vinculado, Cargo.
                                </li>
                                <li>
                                    <a>Procedencia del material:</a> Si el material procede de una Autorización de Intervención ICANH (AIA): Número y Título, o si procede de una Resolución ICANH: Número y título; si el material está registrado en el ICANH: Número de Certificado de Tenencia, Nombre del proyecto de Investigación.
                                </li>
                                <li>
                                    <a>Tipo de Análisis:</a> Descripción del Tipo de análisis
                                </li>
                                <li>
                                    <a>Objetivos del Análisis </a>
                                </li>
                                <li>
                                    <a>Metodología del Análisis </a>
                                </li>
                                <li>
                                    <a>Muestras a analizar:</a> Descripción del material, Cantidad de piezas/muestras.
                                </li>
                                <li>
                                    <a>Cargue de documentos o fotos adicionales:</a> Cargar en un único archivo RAR, 7Z, ZIP o PDF: documentos adicionales como: el proyecto de investigación propuesto para la intervención de los bienes (cuando el material no proviene de una Tenencia o de una Resolución o Autorización de intervención Arqueológica ICANH-AIA), listado del material a intervenir o fotos.
                                </li>
                                <li>
                                    <a>Datos del análisis:</a> País, Ciudad, Institución y Lugar en donde se realizarán los análisis, Fecha de salida de los materiales y retorno de los mismos al país, nombre de quien lleva el material (persona o empresa que se encargará del traslado).
                                </li>
                                <li>
                                    <a>Enviar solicitud:</a> El número de radicado de la solicitud, se envía al correo electrónico registrado.
                                </li>
                            </ol>
                            <p>Una vez revisada la información diligenciada, el ICANH envía al correo electrónico del solicitante el estado del trámite.</p>
                            <div style="margin-top: 40px;">
                                <a href="FormularioA.php" class="btn btn-primary">Crear Trámite</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contenido -->
    </div>
</body>
<?php require_once("../MainJs/js.php"); ?>

</html>