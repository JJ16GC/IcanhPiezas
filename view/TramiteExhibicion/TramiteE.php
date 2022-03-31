<?php
require_once("../../Config/conexion.php");
if ($_SESSION['usuario_id'] == '') {
    header("Location:" . conectar::ruta() . "index.php");
}

?>
<!DOCTYPE html>
<html>
<?php require_once("../Head/head.php"); ?>
<link rel="stylesheet" href="../../public/css/paginas/home.css">
<link rel="stylesheet" href="../../public/css/paginas/exhibicion.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<title>ICANH - Sistema de Tickets - Home</title>
</head>


<body class="with-side-menu">
    <?php require_once("../Header/header.php"); ?>
    <div class="mobile-menu-left-overlay"></div>
    <?php require_once("../MainNav/nav.php"); ?>
    <div class="page-content">

        <div id="container" class="container-fluid" style="display: flex;  justify-content: center;">

            <div style="max-width: 850px;" class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div>
                            <div class="col-sm-12" style="margin-top: 15px;">
                                <p style="font-size: 25px; font-weight: bold; " class="">Salida temporal de bienes arqueológicos para exhibición: </p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <span>Diligenciar el formulario "Solicitud de Autorización de Salida Temporal de Bienes Arqueológicos, para Exhibición en el exterior", disponible en el <a href="#">enlace</a> la siguiente información:</strong></span>
                        </div>
                        <div class="col-sm-12">
                            <ol type="a">
                                <li>
                                    <a>Datos de la colección a la que pertenecen las piezas:</a> Número de Tenencia, Solicitante, Nit o Cédula, Número total de piezas a exportar.
                                </li>
                                <li>
                                    <a>Datos del responsable de la tenencia:</a> Primer Nombre, Segundo Nombre, Primer Apellido, Segundo Apellido, Número de documento, Tipo de documento, Correo electrónico.
                                </li>
                                <li>
                                    <a>Fecha de salida de las piezas y retorno de las mismas al país:</a> Fecha de salida, Fecha de retorno.</a>
                                </li>
                                <li>
                                    <a>Cargue anexos (pdf):</a> Cargar un único archivo PDF (el nombre del archivo no debe tener tildes) con los documentos: </a>
                                    <ol type="1">
                                        <li>Copia del proyecto cultural o científico.</li>
                                        <li>Nombre, dirección y teléfono de la entidad responsable de las piezas arqueológicas tanto en Colombia como en el Exterior, país, ciudad y sitio Museo o Institución Cultural donde se llevará a cabo el evento o exposición.</li>
                                        <li>Nombre, del curador de la exposición o del investigador a cargo.</li>
                                        <li>Nombre dirección y teléfono de la compañía encargada del empaque y transporte de las piezas.</li>
                                    </ol>
                                </li>
                                <li>
                                    <a>Cargue Piezas (zip):</a> Cargar en un único archivo ZIP (el nombre del archivo no debe tener tildes), las fotografías de cada una de las piezas a exportar. Los nombres de las fotos de cada pieza, deben corresponder con el código con el que se registraron en el ICANH.
                                </li>
                                <li>
                                    <a>Datos adicionales de las piezas a exportar: información adicional del material a exportar, que el usuario considere necesario mencionar.</a>
                                </li>
                                <li>
                                    <a>Enviar Solicitud.</a> El Instituto envía al correo electrónico del solicitante, la confirmación de recepción de la información.
                                </li>
                                <li>
                                    <a>El número de radicado de la solicitud, se envía al correo electrónico registrado</a>
                                </li>
                            </ol>
                            <p>Una vez revisada la información diligenciada, el ICANH envía al correo electrónico del solicitante el estado del trámite.</p>
                            <div style="margin-top: 40px;">
                                <a class="btn btn-primary">Crear Tramite</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php require_once("../MainJs/js.php"); ?>

</html>