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

        <?php
        if ($login_button == '') {
            echo '<h3><a href="../TicketAnalisis/ticketanalisis.php"></h3>Generar Nuevo Ticket</div>';
            echo '<h3><a href="../CerrarSesion/cerrarsesion.php"></h3>Cerrar Sesion</div>';
        } else {
            echo '<div align="center">' . $login_button . '</div>';
        }
        ?>
    </div>
</body>

</html>