<?php

//Include Configuration File
include('config.php');

$bytes = openssl_random_pseudo_bytes(4);
$passw = bin2hex($bytes);

$login_button = '';

if (isset($_GET["code"])) {

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);

        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);

        $data = $google_service->userinfo->get();

        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
            $nombre = $_SESSION['user_first_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
            $apellido = $_SESSION['user_last_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
            $correo = $_SESSION['user_email_address'];
            $rol_id = 1;
            $pass = $passw;
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }
    }
}

//Ancla para iniciar sesión
if (!isset($_SESSION['access_token'])) {
    $login_button = '<a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="' . $google_client->createAuthUrl() . '"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Iniciar Sesion Google</a> </div>';
}
?>


<link rel="stylesheet" href="public/css/paginas/login_google.css">