<?php

# Funcion boton Update tramite analisis

if (isset($_POST["submit"])) {

    $id_tramite = $_POST["id_tramite"];
    $tipodoc = $_POST["tipodoc"];
    $otrotip = $_POST["otrotip"];
    $numdoc = $_POST["numdoc"];
    $pnombre = $_POST["pnombre"];
    $snombre = $_POST["snombre"];
    $papellido = $_POST["papellido"];
    $sapellido = $_POST["sapellido"];
    $profesion = $_POST["profesion"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $direccion = $_POST["direccion"];
    $entidadvinc = $_POST["entidadvinc"];
    $cargo = $_POST["cargo"];
    $numaut = $_POST["numaut"];
    $titulo = $_POST["titulo"];
    $numcert = $_POST["numcert"];
    $nomproyecto = $_POST["nomproyecto"];
    $desctipo = $_POST["desctipo"];
    $descmet = $_POST["descmet"];
    $descmate = $_POST["descmate"];
    $cantidad = $_POST["cantidad"];

    # Subida de archivos Zip y PDF en la carpeta upload

    if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {

        $nomproyecto = trim($nomproyecto);
        // creamos las variables para subir a la db
        $ruta = "C:/xampp/htdocs/ICANH/public/upload/";
        $nombrefinal = trim($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $nombrefinal = preg_replace("/\s+/", '', $nombrefinal); //Sustituye una expresión regular
        $upload = $ruta . $nomproyecto . $nombrefinal;



        if (move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 

            $anexos = $nomproyecto . $nombrefinal;
            unlink($ruta . $_POST["anexos"]);
        }
    }

    if (empty($anexos)) {
        $anexos = $_POST["anexos"];
    }

    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    $institucion = $_POST["institucion"];
    $lugar = $_POST["lugar"];
    $fecha_salida = $_POST["fecha_salida"];
    $fecha_retorno = $_POST["fecha_retorno"];
    $nombre_encargado = $_POST["nombre_encargado"];
    $estado = $_POST["estado"];


    $usuario->update_tramitea($tipodoc, $otrotip, $numdoc, $pnombre, $snombre, $papellido, $sapellido, $profesion, $telefono, $correo, $direccion, $entidadvinc, $cargo, $numaut, $titulo, $numcert, $nomproyecto, $desctipo, $descmet, $descmate, $cantidad, $anexos, $pais, $ciudad, $institucion, $lugar, $fecha_salida, $fecha_retorno, $nombre_encargado, $estado, $id_tramite);
} else {
    header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
}
