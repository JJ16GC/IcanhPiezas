<?php

# Metodo para el envio de correos electronicos con PHPMailler

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

# Conexion a la base de datos

require 'vendor/autoload.php';
require '../Config/conexion.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'correopruebasphp2022@gmail.com'; # Correo de la entidad
    $mail->Password = 'tzywtfqzcunuhauv'; # Contraseña del correo 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('correopruebasphp2022@gmail.com', 'ICANH'); # Remitente del correo
    $mail->addAddress($_SESSION['correo'], 'Receptor'); # Receptor del correo

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
            $mail->Body = $notificacion;
            break;
        case '4':
            $mail->Body = $registro;
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
            header("Location:" . conectar::ruta() . "index.php");
            break;
        default:
            # code...
            break;
    }
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}
