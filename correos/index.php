<?php

# Metodo para el envio de correos electronicos con PHPMailler

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

# Conexion a la base de datos

require 'vendor/autoload.php';
require '../Config/conexion.php';

$mail = new PHPMailer(true);

# Configuracion de variables del correo electronico

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'correopruebasphp2022@gmail.com'; # Correo encargado de enviar emails
    $mail->Password = 'tzywtfqzcunuhauv'; # Contraseña segura del correo 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('correopruebasphp2022@gmail.com', 'ICANH'); # Remitente del correo

    if ($_GET["pag"] >= 5) {
        require_once("../Models/Tramites.php");
        $id = $_GET["ID"];
        $cat = $_GET["c"];

        if ($cat == 'a') {
            $sql = "SELECT * FROM tramite WHERE id_tramite = $id";
            $usuario = new Usuario();
            $result = $usuario->listar_tramites($sql);
            foreach ($result as $key) {
                $_SESSION["correo_enviar"] = $key["correo"];
            }
        } else {
            $sql = "SELECT * FROM tramite_exh WHERE id_tramite = $id";
            $usuario = new Usuario();
            $result = $usuario->listar_tramites($sql);
            foreach ($result as $key) {
                $_SESSION["correo_enviar"] = $key["correo"];
            }
        }

        $mail->addAddress($_SESSION['correo_enviar'], 'Receptor'); # Receptor del correo
    } else {
        $mail->addAddress($_SESSION['correo'], 'Receptor'); # Receptor del correo
    }



    $mail->isHTML(true);
    $mail->Subject = 'Correo Notificacion ICANH'; # Titulo Correo Electronico


    # Tipo de cuerpo del correo electronico

    require_once("Models/cuerpo.php");

    switch ($_GET["pag"]) {
        case '1':
            $mail->Body = $registro;
            break;
        case '2':
            $mail->Body = $reset;
            break;
        case '3':
            $mail->Body = $notificacion_exhibicion;
            break;
        case '4':
            $mail->Body = $notificacion_analisis;
            break;
        case '5':
            $mail->Body = $notificacion_e;
            break;
        case '6':
            $mail->Body = $notificacion_a;
            break;
        case '7':
            $mail->Body = $cerrado_a;
            break;
        case '8':
            $mail->Body = $cerrado_e;
            break;
        default:
            break;
    }

    # Redireccion despues de enviar el correo electronico

    $mail->send();
    switch ($_GET["pag"]) {
        case '1':
            header("Location:" . conectar::ruta() . "index.php?m=3");
            break;

        case '2':
            header("Location:" . conectar::ruta() . "view/Resetear/verificar.php");
            break;

        case '3':
            header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
            break;
        case '4':
            header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
            break;
        case '5':
            header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
            break;
        case '6':
            header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
            break;
        case '7':
            header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
            break;
        case '8':
            header("Location:" . conectar::ruta() . "view/ConsultarTicket/consulta.php");
            break;
        default:
            # code...
            break;
    }
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}
