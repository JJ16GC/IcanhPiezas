<?php
require("login_google.php");
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Login using Google Account</title>
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container">

    <!-- Verifica Inicio de sesion y redirige al Home-->
        <?php
        if ($login_button == '') {
            header("Location:" . Conectar::ruta() . "view/Home/indexlogin.php");
        } else {
            echo '<div align="center">' . $login_button . '</div>';
        }
        ?>
    </div>
</body>

</html>