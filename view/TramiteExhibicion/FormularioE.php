<?php
require_once("../../Config/conexion.php");
if (!isset($_SESSION['usuario_id'])) {
    header("Location:" . conectar::ruta() . "index.php");
}
if (isset($_POST["submit"]) and $_POST["submit"] == "Enviar") {

    require_once("../../Models/Tramites_E.php");
    $usuario = new Usuario();
    require_once("../../Controller/Tramites_exh.php");
}

?>
<!DOCTYPE html>
<html>
<?php require_once("../Head/head.php"); ?>
<link rel="stylesheet" href="../../public/css/paginas/home.css">
<link rel="stylesheet" href="../../public/css/paginas/formulario.css">
<title>ICANH - Sistema de Tickets - Tramite Exhibición</title>
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
                                <h4 style="max-width: 800px; margin-left: 90px;">SOLICITUD DE AUTORIZACIÓN DE SALIDA TEMPORAL DE BIENES ARQUEOLÓGICOS, PARA EXHIBICIÓN EN EL EXTERIOR.</h4>
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
                                                <h4>Paso 1: <span>Bienes Muebles a Exportar</span></h4>
                                                <p>Datos de la colección a la que pertenecen las piezas.</p>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="numdoc">Número de Certificado de Registro y Tenencia ICANH:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="num_certf" name="num_certf" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="otrotip">Solicitante:</label>
                                                    <p>Nombre de persona natural o jurídica responsable de la Tenencia.</p>
                                                    <input type="text" class="form-control" id="nom_solic" name="nom_solic" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tipo_doc">Tipo de Documento:<span style="color: red;">*</span></label>
                                                    <select id="" name="tipo_doc" class="form-control" required>
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
                                                    <label class="form-label semibold" for="cual">Cuál:</label>
                                                    <p>Si en tipo de documento seleccionó Otro, por favor indicar en este campo a qué documento se refiere.</p>
                                                    <input type="text" class="form-control" id="cual" name="cual">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="num_doc">Número de Documento:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="num_doc" name="num_doc" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="num_piezas">Número total de piezas a exportar:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="num_piezas" name="num_piezas" required>
                                                </fieldset>
                                            </div>
                                            <div class="next col-lg-12">
                                                <input type="button" name="next" class="btn btn-primary" value="Siguiente" />
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="col-lg-12">
                                                <h4>Paso 2: <span>Responsable De La Tenencia.</span></h4>
                                                <p>Datos de la colección a la que pertenecen las piezas.</p>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="p_nombre">Primer Nombre:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="p_nombre" name="p_nombre" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="s_nombre">Segundo Nombre:</label>
                                                    <input type="text" class="form-control" id="s_nombre" name="s_nombre">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="p_apellido">Primer Apellido:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="p_apellido" name="p_apellido" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="s_apellido">Segundo Apellido:</label>
                                                    <input type="text" class="form-control" id="s_apellido" name="s_apellido">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="tipo_doc_r">Tipo de Documento:<span style="color: red;">*</span></label>
                                                    <select id="" name="tipo_doc_r" class="form-control" required>
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
                                                    <label class="form-label semibold" for="cual_r">Cuál:</label>
                                                    <p>Si en tipo de documento seleccionó Otro, por favor indicar en este campo a qué documento se refiere.</p>
                                                    <input type="text" class="form-control" id="cual_r" name="cual_r">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="num_doc_r">Número de Documento:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="num_doc_r" name="num_doc_r" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="correo">Correo Electronico:<span style="color: red;">*</span></label>
                                                    <input type="email" class="form-control" id="correo" name="correo" required>
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
                                                <h4>Paso 3: <span>Datos De La Exposición.</span></h4>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="f_inicion_exp">Fecha inicio de exposición:<span style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" id="f_inicion_exp" name="f_inicion_exp" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="f_final_exp">Fecha final de exposición:<span style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" id="f_final_exp" name="f_final_exp" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="pais">País:<span style="color: red;">*</span></label>
                                                    <select id="pais" name="pais" class="form-control" required>
                                                        <option>-- Seleccione --</option>
                                                        <?php require_once("paises.php"); ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="ciudad">Ciudad:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="lugar">Lugar donde se realizarán los análisis:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="lugar" name="lugar" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="nombre_exp">Nombre de la exposición/evento:<span style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" id="nombre_exp" name="nombre_exp" required>
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
                                                <h4>Paso 4: <span>Fecha De Salida De Las Piezas Y Retorno De Las Mismas Al País.</span></h4>
                                                <h1 class="with-border"></h1>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="fecha_salida">Fecha De Salida:<span style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label semibold" for="fecha_retorno">Fecha De Retorno:<span style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" id="fecha_retorno" name="fecha_retorno" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Cargue anexos:<span style="color: red;">*</span></label></label>
                                                    <p>Cargar un único archivo PDF (el nombre del archivo no debe tener tildes) con los documentos: 1.Copia del proyecto cultural o científico. 2. Nombre, dirección y teléfono de la entidad responsable de las piezas arqueológicas tanto en Colombia como en el Exterior, país, ciudad y sitio: Museo o Institución Cultural donde se llevará a cabo el evento o exposición. 3.Nombre, del curador de la exposición o del investigador a cargo. 4.Nombre dirección y teléfono de la compañía encargada del empaque y transporte de las piezas.</p>
                                                    Seleccione archivo: <input name="fichero" type="file" maxlength="150" accept="application/pdf" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Cargue piezas:<span style="color: red;">*</span></label></label>
                                                    <p>Cargar en un único archivo ZIP (el nombre del archivo no debe tener tildes), las fotografías de cada una de las piezas a exportar. Los nombres de las fotos de cada pieza, deben corresponder con el código con el que se registraron en el ICANH.</p>
                                                    Seleccione archivo: <input name="fichero_piezas" type="file" maxlength="150" accept="application/pdf" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset class="form-group">
                                                    <label class="form-label semibold" for="datos_adic">Datos adicionales de las piezas a exportar:</label>
                                                    <p>Información adicional del material a exportar que el usuario considere necesario mencionar.</p>
                                                    <input type="text" class="form-control" id="datos_adic" name="datos_adic">
                                                    <input class="checkbox" style="margin: 15px 15px 15px 0;" id="terminos" type="checkbox">Acepto el tratamiento de mis datos personales
                                                </fieldset>
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
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Debe llenar todos los campos solicitados ❌</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div style="text-align: center;" class="modal-body">
                                                                Verifique que todos los campos con <span style="color: red;">*</span> esten diligenciados
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