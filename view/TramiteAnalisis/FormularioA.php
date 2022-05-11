<?php
require_once("../../Config/conexion.php");
if (!isset($_SESSION['usuario_id'])) {
    header("Location:" . conectar::ruta() . "index.php");
}
if (isset($_POST["submit"]) and $_POST["submit"] == "Enviar") {

    require_once("../../Models/Tramites.php");
    $usuario = new Usuario();
    require_once("../../Controller/Tramites.php");
}

?>
<!DOCTYPE html>
<html>
<?php require_once("../Head/head.php"); ?>
<link rel="stylesheet" href="../../public/css/paginas/home.css">
<link rel="stylesheet" href="../../public/css/paginas/formulario.css">
<title>ICANH - Sistema de Tickets - Tramite Analisis</title>
</head>


<body class="with-side-menu">
    <?php require_once("../Header/header.php"); ?>
    <div class="mobile-menu-left-overlay"></div>
    <?php require_once("../MainNav/nav.php"); ?>
    <div class="page-content">
        <div class="container" style="display: flex;  justify-content: center;">
            <div id="container" class="container-fluid ">
                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h4 style="max-width: 800px; margin-left: 90px;">SOLICITUD DE AUTORIZACIÓN DE SALIDA DE MATERIAL ARQUEOLÓGICO PARA ANÁLISIS EN EL EXTERIOR.</h4>
                                <ol style="margin-left: 90px;" class="breadcrumb breadcrumb-simple">
                                    <li><a href="../Home/index.php">Home</a></li>
                                    <li class="active">Nuevo Ticket Para Análisis</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="row">
                    <div class="container" style="display: flex;  justify-content: center;">
                        <div class="col-lg-10 box-typical box-typical-padding">

                            <h5 style="margin-left: 15px;">Ingresar Información</h5>
                            <h5 style="font-size: 15px; margin-left: 15px;color: red;" class="with-border">* Obligatorio</h5>

                            <div class="row">
                                <div class="container">
                                    <form id="regiration_form" action="" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="col-lg-12">
                                                <h4>Paso 1: <span>Información Básica Del Solicitante</span></h4>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="exampleInput">Tipo de Documento:<span style="color: red;">*</span></label>
                                                    <select id="" name="tipodoc" class="form-control" required>
                                                        <option>-- Seleccione --</option>
                                                        <option>NIT</option>
                                                        <option>Cédula de ciudadania</option>
                                                        <option>Cédula de extranjeria</option>
                                                        <option>Pasaporte</option>
                                                        <option>Otro</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="otrotip">Cuál:</label>
                                                    <p>Si en tipo de documento seleccionó Otro, por favor indicar en este campo a qué documento se refiere.</p>
                                                    <input type="text" class="form-control" id="otrotip" name="otrotip">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="numdoc">Numero de Documento:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="numdoc" name="numdoc" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="pnombre">Primer Nombre:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="pnombre" name="pnombre" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="snombre">Segundo Nombre:</label>
                                                    <input type="text" class="form-control" id="snombre" name="snombre">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="papellido">Primer Apellido:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="papellido" name="papellido" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="sapellido">Segundo Apellido:</label>
                                                    <input type="text" class="form-control" id="sapellido" name="sapellido">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="profesion">Profesión:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="profesion" name="profesion">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="telefono">Telefono/Celular:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="correo">Correo Electronico:<span style="color: red;">*</span></label>
                                                    <input type="email" class="form-control" id="correo" name="correo" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="direccion">Dirección</label>
                                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="entidadvinc">Entidad Vinculado:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="entidadvinc" name="entidadvinc">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="cargo">Cargo:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="cargo" name="cargo">
                                                </fieldset>
                                            </div>

                                            <div class="next col-lg-12">
                                                <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                            </div>



                                        </fieldset>
                                        <fieldset>
                                            <div class="col-lg-12">
                                                <h4>Paso 2: <span>Procedencia Del Material</span></h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <p>Si el material procede de una Autorización de Intervención Arqueológica ICANH o Resolución: Número y Título; si el material está registrado en el ICANH: Número de Certificado de Registro y Tenencia, Nombre del proyecto de Investigación.</p>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="numaut">Número de Autorización o Resolución ICANH:<span style="color: red;">*</span></label>
                                                    <p>Si son varios, por favor sepárelos con una coma.</p>
                                                    <input type="text" class="form-control" id="numaut" name="numaut">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="titulo">Titulo:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="titulo" name="titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="numcert">Número de Certificado de Registro y Tenencia ICANH:<span style="color: red;">*</span></label>
                                                    <p>Si son varios, por favor sepárelos con una coma</p>
                                                    <input type="text" class="form-control" id="numcert" name="numcert">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="nomproyecto">Nombre del proyecto de Investigación:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="nomproyecto" name="nomproyecto">
                                                </fieldset>
                                            </div>
                                            <div class=" col-lg-2 next inline-block">
                                                <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                            </div>
                                            <div class="previous inline-block">
                                                <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="col-lg-12">
                                                <h4>Paso 3: <span>Informacion del Análisis:</span></h4>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <span>TIPO DEL ANÁLISIS</span>
                                                    <label class="form-label semibold" for="desctipo">Descripción del Tipo de análisis:<span style="color: red;">*</span></label>
                                                    <textarea rows="4" class="form-control" id="desctipo" name="desctipo"></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <span>METODOLOGÍA DEL ANÁLISIS.</span>
                                                    <label class="form-label semibold" for="descmet">Descripción metodología del análisis:<span style="color: red;">*</span></label>
                                                    <textarea rows="4" class="form-control" id="descmet" name="descmet"></textarea>
                                                </fieldset>
                                            </div>
                                            <div class=" col-lg-2 next inline-block">
                                                <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                            </div>
                                            <div class="previous inline-block">
                                                <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                            </div>

                                        </fieldset>
                                        <fieldset>
                                            <div class="col-lg-12">
                                                <h4>Paso 4: <span>Muestras a Analizar.</span></h4>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="descmate">Descripción del material:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="descmate" name="descmate">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="cantidad">Cantidad de piezas/muestras:<span style="color: red;">*</span></label>
                                                    <input type="number" class="form-control" id="cantidad" name="cantidad">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Cargue anexos:<span style="color: red;">*</span></label></label>
                                                    <p>Cargar en un único archivo PDF (el nombre del archivo no debe tener tildes) documentos adicionales como el proyecto de investigación propuesto para la intervención de los bienes (cuando el material no proviene de una Tenencia o una Autorización de intervención) o fotografías del material arqueológico.</p>
                                                    Seleccione archivo: <input name="fichero" type="file" maxlength="150" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class=" col-lg-2 next inline-block">
                                                <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                            </div>
                                            <div class="previous inline-block">
                                                <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="col-lg-12">
                                                <h4>Paso 5: <span>Datos Del Analisis:</span></h4>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="exampleInput">País:<span style="color: red;">*</span></label>
                                                    <select id="pais" name="pais" class="form-control">
                                                        <option>-- Seleccione --</option>
                                                        <?php require_once("paises.php"); ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="ciudad">Ciudad:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="institucion">Institución donde se realizarán los análisis:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="institucion" name="institucion">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="lugar">Lugar donde se realizarán los análisis:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="lugar" name="lugar">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="fecha_salida">Fecha de salida del país de los materiales:<span style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" id="fecha_salida" name="fecha_salida">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="fecha_retorno">Fecha de retorno de los mismos al país:<span style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" id="fecha_retorno" name="fecha_retorno">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="nombre_encargado">Nombre de quien lleva el material:<span style="color: red;">*</span></label>
                                                    <p>persona o empresa que se encargará del traslado.</p>
                                                    <input type="text" class="form-control" id="nombre_encargado" name="nombre_encargado">
                                                    <input class="checkbox" style="margin: 15px 15px 15px 0;" id="terminos" type="checkbox">Acepto el tratamiento de mis datos personales
                                                </div>
                                            </div>

                                            <div class="col-lg-2 previous inline-block">
                                                <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                            </div>
                                            <div class="inline-block">

                                                <button type="submit" name="submit" disabled="disabled" class="btn btn-success submit delete" value="Enviar" id="submit_data" data-toggle="modal" data-target="#exampleModalCenter">
                                                    Enviar
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Error ❌</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div style="text-align: center;" class="modal-body">
                                                                Debe llenar todo los campos solicitados
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../MainJs/js.php"); ?>
    <script type="text/javascript" src="index.js"></script>

</body>



</html>