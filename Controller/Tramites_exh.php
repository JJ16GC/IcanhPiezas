<?php

# Funcion boton Create tramite exhibicion

if (isset($_POST["submit"])) {

    $num_certf = $_POST["num_certf"];
    $nom_solic = $_POST["nom_solic"];
    $tipo_doc = $_POST["tipo_doc"];
    $cual = $_POST["cual"];
    $num_doc = $_POST["num_doc"];
    $num_piezas = $_POST["num_piezas"];
    $p_nombre = $_POST["p_nombre"];
    $s_nombre = $_POST["s_nombre"];
    $p_apellido = $_POST["p_apellido"];
    $s_apellido = $_POST["s_apellido"];
    $tipo_doc_r = $_POST["tipo_doc_r"];
    $cual_r = $_POST["cual_r"];
    $num_doc_r = $_POST["num_doc_r"];
    $correo = $_POST["correo"];
    $f_inicion_exp = $_POST["f_inicion_exp"];
    $f_final_exp = $_POST["f_final_exp"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    $lugar = $_POST["lugar"];
    $nombre_exp = $_POST["nombre_exp"];
    $fecha_salida = $_POST["fecha_salida"];
    $fecha_retorno = $_POST["fecha_retorno"];

    # Subida de archivos Zip y PDF en la carpeta upload

    if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {

        $nombre_exp = trim($nombre_exp);
        // creamos las variables para subir a la db
        $ruta = "C:/xampp/htdocs/TRABAJO/ICANH/public/upload/";
        $nombrefinal = trim($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $nombrefinal = preg_replace("/\s+/", '', $nombrefinal); //Sustituye una expresión regular
        $upload = $ruta . $nombre_exp . $nombrefinal;



        if (move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
            $anexos = $nombre_exp . $nombrefinal;
        }
    }

    
    if (is_uploaded_file($_FILES['fichero_piezas']['tmp_name'])) {

        $nombre_exp = trim($nombre_exp);
        // creamos las variables para subir a la db
        $ruta = "C:/xampp/htdocs/TRABAJO/ICANH/public/upload/";
        $nombrefinal = trim($_FILES['fichero_piezas']['name']); //Eliminamos los espacios en blanco
        $nombrefinal = preg_replace("/\s+/", '', $nombrefinal); //Sustituye una expresión regular
        $upload = $ruta . $nombre_exp . $nombrefinal;



        if (move_uploaded_file($_FILES['fichero_piezas']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 

            $piezas = $nombre_exp . $nombrefinal;
        }
    }


    $datos_adic = $_POST["datos_adic"];
    $estado = "Abierto";
    

    $usuario->insert_tramite_exh($num_certf, $nom_solic, $tipo_doc, $cual, $num_doc, $num_piezas, $p_nombre, $s_nombre, $p_apellido, $s_apellido, $tipo_doc_r, $cual_r, $num_doc_r, $correo, $f_inicion_exp, $f_final_exp, $pais, $ciudad, $lugar, $nombre_exp, $fecha_salida, $fecha_retorno, $anexos, $piezas, $datos_adic, $estado);

    $categoria = "Exhibición de piezas";
    $usu_id = $_SESSION["usuario_id"];
    $usuario->insert_det_exh($usu_id, $categoria, $estado);

    header("Location:" . conectar::ruta() . "correos/index.php?pag=3");
} else {
    header("Location:" . conectar::ruta() . "view/");
}
