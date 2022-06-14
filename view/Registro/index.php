<?php
# Conexion a la base de datos
require_once("../../Config/conexion.php");

# Verificacion de usuario registrado
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("../../Models/Usuario.php");
    $usuario = new Usuario();
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $_SESSION['correo'] =  $correo;
    $pass = $_POST["pass"];
    $rol_id = '1';
    $usuario->get_usuario_x_correo($correo);
    if (empty($_SESSION["usuario_id"])) {
        # Creacion de usuario si no esta registrado
        $usuario->insert_usuario($nombre, $apellido, $correo, $pass, $rol_id);
        header("Location:" . conectar::ruta() . "correos/index.php?pag=1");
    } else {
        header("Location:" . conectar::ruta() . "index.php?m=5");
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICANH - Sistema de Tickets - Login</title>



    <link rel="stylesheet" href="../../public/css/paginas/login.css">
    <link rel="stylesheet" href="../../public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/lib/bootstrap/styles.css">
</head>

<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">

                <!-- Contenido -->

                <!-- Formulario Registro -->

                <form class="sign-box" action="" method="post" id="login_form">
                    <div class="rectangulo">

                    </div>
                    <input type="hidden" id="rol_id" name="rol_id" value="1">

                    <div class="sign-avatar">
                        <img src="../../public/img/logo_ICANH.png" alt="" id="imgtipo">
                    </div>
                    <header class="sign-title label label-primary" id="lbltitulo">Registro Usuario</header>

                    <div class="form-group">
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombres" required />
                    </div>
                    <div class="form-group">
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellidos" required />
                    </div>
                    <div class="form-group">
                        <input type="email" id="correo" name="correo" class="form-control" placeholder="E-mail" required />
                    </div>
                    <div style="display: flex;" class="form-group">
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" />
                        <a id="show_password" style="padding: 5px; margin: 4px 2px 0 2px;" type="button"> <span class="glyphicon glyphicon-eye-close icon"></span> </a>
                    </div>
                    <div class="form-group">
                        <div class="float-right reset">
                            <a href="../../index.php" id="btnsoporte">Iniciar Sesion</a>
                        </div>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si" id="enviar">
                    <button type="submit" class="btn btn-rounded">Registrarse</button>

                </form>

                <!-- Contenido -->
            </div>
        </div>
    </div>

    </div>
    <script src="../../public/js/lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

</body>

</html>