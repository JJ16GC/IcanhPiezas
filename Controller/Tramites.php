<?php

if (isset($_POST["submit"])) {

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
    $correo = $_POST["correo"];
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


    if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {

        $nomproyecto = trim($nomproyecto);
        // creamos las variables para subir a la db
        $ruta = "C:/xampp/htdocs/TRABAJO/ICANH/public/upload/";
        $nombrefinal = trim($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $nombrefinal = preg_replace("/\s+/", '', $nombrefinal); //Sustituye una expresión regular
        $upload = $ruta . $nomproyecto . $nombrefinal;



        if (move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 

            $anexos = $nomproyecto . $nombrefinal;
        }
    }


    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    $institucion = $_POST["institucion"];
    $lugar = $_POST["lugar"];
    $fecha_salida = $_POST["fecha_salida"];
    $fecha_retorno = $_POST["fecha_retorno"];
    $nombre_encargado = $_POST["nombre_encargado"];
    $estado = "Abierto";

    $usuario->insert_tramitea($tipodoc, $otrotip, $numdoc, $pnombre, $snombre, $papellido, $sapellido, $profesion, $telefono, $correo, $direccion, $entidadvinc, $cargo, $numaut, $titulo, $numcert, $nomproyecto, $desctipo, $descmet, $descmate, $cantidad, $anexos, $pais, $ciudad, $institucion, $lugar, $fecha_salida, $fecha_retorno, $nombre_encargado,$estado);

    $usu_id = $_SESSION["usuario_id"];
    $usuario->insert_detalle($usu_id, $categoria, $estado,);


    header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
} else {
    header("Location:" . conectar::ruta() . "view/");
}
