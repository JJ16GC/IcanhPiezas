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
    $mail->Body = '
            Hola, 
            <br>Recibimos una solicitud para restablecer tu contraseña.
            <br>Ingresa el siguiente código para restablecer la contraseña:
            <br>
            <br>
            <span style="font-size: 11px;
            width: 80px;
            font-size: 15px;
            font-weight: bold;
            font-family: LucidaGrande,tahoma,verdana,arial,sans-serif;
            padding: 10px 30px 10px 30px;
            background-color: #f2f2f2;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            text-align: center;
            border-radius: 7px;
            display: block;
            border: 1px solid #1877f2;
            background: #e7f3ff;">' . $_SESSION['token'] . '<span/>';

    $mail->send();
    header("Location:" . conectar::ruta() . "view/Resetear/verificar.php");
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}
