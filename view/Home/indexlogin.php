<?php
require_once("../../Config/conexion.php");
if (!isset($_SESSION['usuario_id'])) {
	header("Location:" . conectar::ruta() . "index.php");
}

?>
<!DOCTYPE html>
<html>
<?php require_once("../Head/head.php"); ?>
<link rel="stylesheet" href="../../public/css/paginas/home.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<title>ICANH - Sistema de Trámites - Home</title>
</head>

<body class="with-side-menu">
	<?php require_once("../Header/header.php"); ?>
	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php"); ?>
	<?php require_once("contenido.php"); ?>

</body>

<?php require_once("../MainJs/js.php"); ?>

</html>