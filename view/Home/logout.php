<?php

//Metodo para cerrar sesion 

include('../../users/config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:../../index.php');

?>