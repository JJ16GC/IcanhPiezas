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
<link rel="stylesheet" href="../../public/css/paginas/formulario.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
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
                                    <form id="regiration_form" novalidate action="action.php" method="post">
                                        <fieldset>
                                            <div class="col-lg-12">
                                                <h4>Paso 1: <span>Información Básica Del Solicitante</span></h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="exampleInput">Tipo de Documento:<span style="color: red;">*</span></label>
                                                    <select id="" name="cat_id" class="form-control" required>
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
                                                    <label class="form-label semibold" for="tick_titulo">Cuál:</label>
                                                    <p>Si en tipo de documento seleccionó Otro, por favor indicar en este campo a qué documento se refiere.</p>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Numero de Documento:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Primer Nombre:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Segundo Nombre:</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Primer Apellido:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Segundo Apellido:</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Profesión</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Telefono/Celular</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Correo Electronico:<span style="color: red;">*</span></label>
                                                    <input type="email" class="form-control" id="tick_titulo" name="tick_titulo" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Dirección</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Entidad Vinculado</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Cargo</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
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
                                                    <label class="form-label semibold" for="tick_titulo">Número de Autorización o Resolución ICANH:</label>
                                                    <p>Si son varios, por favor sepárelos con una coma.</p>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Titulo:</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Número de Certificado de Registro y Tenencia ICANH:</label>
                                                    <p>Si son varios, por favor sepárelos con una coma</p>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Nombre del proyecto de Investigación:</label>
                                                    <input type="text" class="form-control" id="tick_titulo" name="tick_titulo">
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
                                                <h4>Paso 3: <span>Tipo Del Analisis:</span></h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tick_titulo">Descripción del Tipo de análisis:</label>
                                                    <textarea rows="4" class="form-control" id="tick_titulo" name="tick_titulo"></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <span>METODOLOGÍA DEL ANÁLISIS.</span>
                                                    <label class="form-label semibold" for="tick_titulo">Descripción metodología del análisis:</label>
                                                    <textarea rows="4" class="form-control" id="tick_titulo" name="tick_titulo"></textarea>
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

                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="mob">Descripción del material:</label>
                                                    <input type="text" class="form-control" id="mob">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Cantidad de piezas/muestras:</label>
                                                    <input type="number" class="form-control" name="data[address]"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Cargue anexos:<span style="color: red;">*</span></label></label>
                                                    <p>Cargar en un único archivo PDF (el nombre del archivo no debe tener tildes) documentos adicionales como el proyecto de investigación propuesto para la intervención de los bienes (cuando el material no proviene de una Tenencia o una Autorización de intervención) o fotografías del material arqueológico.</p>
                                                    <input type="file" class="form-control" name="data[address]" required></input>
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
                                                <h4>Paso 5: <span>Datos Del Analis:</span></h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="exampleInput">País:<span style="color: red;">*</span></label>
                                                    <select id="" name="cat_id" class="form-control">
                                                        <option>-- Seleccione --</option>
                                                        <?php require_once("paises.php"); ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Ciudad:</label>
                                                    <input type="text" class="form-control" name="data[address]"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Institución donde se realizarán los análisis:</label>
                                                    <input type="text" class="form-control" name="data[address]"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Lugar donde se realizarán los análisis:</label>
                                                    <input type="text" class="form-control" name="data[address]"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Fecha de salida del país de los materiales:</label>
                                                    <input type="date" class="form-control" name="data[address]"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Fecha de retorno de los mismos al país:</label>
                                                    <input type="date" class="form-control" name="data[address]"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Nombre de quien lleva el material:</label>
                                                    <p>persona o empresa que se encargará del traslado.</p>
                                                    <input type="text" class="form-control" name="data[address]"></input>
                                                    <input class="checkbox" style="margin: 15px 15px 15px 0;" id="terminos" type="checkbox">Acepto el tratamiento de mis datos personales
                                                </div>
                                            </div>

                                            <div class="col-lg-2 previous inline-block">
                                                <input type="button" name="previous" class="btn btn-default" value="Previo" />
                                            </div>
                                            <div class="inline-block">
                                                <p><input type="submit" name="submit" disabled="disabled" class="submit delete btn btn-success" value="Enviar" id="submit_data" />
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