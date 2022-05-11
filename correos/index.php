<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require '../Config/conexion.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'correopruebasphp2022@gmail.com';
    $mail->Password = '1522094jjgc';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('correopruebasphp2022@gmail.com', 'ICANH');
    $mail->addAddress('correopruebasphp2022@gmail.com', 'Receptor');

    $mail->isHTML(true);
    $mail->Subject = 'Correo Notificacion ICANH';


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
        default:

            break;
    }


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
        default:
            # code...
            break;
    }
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}