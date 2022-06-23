<?php

//start session on web page

//config.php

//Include Google Client Library for PHP autoload file | Incluir la libreira de clientes de Google para el archivo de carga automática de PHP
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API | Hacer objeto de Google API Client para llamar a Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
$google_client->setClientId('1005163221095-jo67gihb71mi10l1495psjhq024olfrn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key | Copiar la llave de cliente
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost/icanh/view/Home/');

// to get the email and profile | Obtenemos Correo y perfil del usuario
$google_client->addScope('email');

$google_client->addScope('profile');

?>