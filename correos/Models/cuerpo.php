<?php

# Cuerpo Correo registro de usuario por el aplicativo

$registro = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Registro Exitoso</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Nos permitimos informarle que usted ha sido registrado en el sistema de tramites del Instituto Colombiano De Antropologia E Historia</p>
                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';

# Cuerpo Correo con el codigo para cambiar contrase??a de cuenta

$reset = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Hola!</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Recibimos una solicitud para restablecer tu contrase??a.<br>Ingresa el siguiente c??digo para restablecer la contrase??a:</p>
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
            background: #e7f3ff;">' . $_SESSION['token'] . '<span/>
                            </td>
                           <tr> <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p></tr>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';

# Cuerpo Correo Notificacion de mensaje pendiente en el tramite

$notificacion_exhibicion = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Notificaci??n</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Cordial saludo,<br>
                                <br>
                                El ICANH recibi?? su solicitud de Autorizaci??n de Salida de Piezas Arqueol??gicas con el n??mero de tr??mite TR-E' . $_SESSION['tr_a_id'] . '.<br>
                                <br>
                                El Laboratorio de Arqueolog??a del Grupo de Arqueolog??a iniciar?? el tr??mite correspondiente. Cualquier duda ser?? atendida en el correo electr??nico laboratorio@icanh.gov.co<br>
                                </p></p>
                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';

$notificacion_analisis = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Notificaci??n</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Cordial saludo,<br>
                                <br>
                                El ICANH recibi?? su solicitud de Autorizaci??n de Salida de Piezas Arqueol??gicas con el n??mero de tr??mite TR-A' . $_SESSION['tr_a_id'] . '.<br>
                                <br>
                                El Laboratorio de Arqueolog??a del Grupo de Arqueolog??a iniciar?? el tr??mite correspondiente. Cualquier duda ser?? atendida en el correo electr??nico laboratorio@icanh.gov.co<br>
                                </p>
                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';

# Cuerpo Correo Notificacion de mensaje pendiente en el tramite

$notificacion_a = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Notificaci??n</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Tiene una notificacion pendiente en su tramite de analisis TR-A' . $_SESSION['tr_a_id'] . '.</p>
                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

# Cuerpo Correo Notificacion de mensaje pendiente en el tramite

$notificacion_e = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Notificaci??n</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Tiene una notificacion pendiente en su tramite de exhibicion TR-E??' . $_SESSION['tr_e_id'] . '.</p>
                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

# Cuerpo Correo de tramite creado cone exito 

$cerrado_e = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Notificaci??n</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Cordial saludo,<br>
                                <br>
                                La solicitud de Autorizaci??n de salida temporal del pa??s de bienes muebles para exhibici??n con el n??mero de tr??mite TR-E' . $_GET["ID"] . ', fue aprobada por el Laboratorio de Arqueolog??a y se envi?? a la Oficina Asesora Jur??dica de la entidad, dependencia encargada de finalizar este tr??mite.<br>
                                <br>
                                Cualquier duda ser?? atendida en el correo notificacionesjudiciales@icanh.gov.co (pendiente confirmaci??n con la Oficina Jur??dica) o en el tel??fono: 4440544 Ext. 150.<br>
                                </p>                                
                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

# Cuerpo Correo de tramite creado cone exito 

$cerrado_a = '   
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:white;">
                            <img src="https://www.icanh.gov.co/_templates/ICANH-PORTAL-2019/recursos/images/cabezote/logo.png" alt="" width="400" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Notificaci??n</h1>
                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Cordial saludo,<br>
                                <br>
                                La solicitud de Autorizaci??n de salida de bienes arqueol??gicos para an??lisis con el n??mero de tr??mite TR-A' . $_GET["ID"] . ', fue aprobada por el Laboratorio de Arqueolog??a y la Autorizaci??n se envi?? al correo electr??nico registrado.<br>
                                <br>
                                Cualquier duda ser?? atendida en el correo electr??nico laboratorio@icanh.gov.co
                                </p>
                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="#" style="color:#00a8ff;text-decoration:underline;">Ingrese aqui al aplicativo</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:0;">
                
                            </td>
                        </tr>
                    </table>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#00a8ff;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            &reg; Instituto Colombiano De Antropologia E Historia, ICANH 2022<br /><a href="https://www.icanh.gov.co/" style="color:#ffffff;text-decoration:underline;">Visitar Sitio Oficial</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
