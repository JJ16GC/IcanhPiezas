<header class="site-header">
    <div class="container-fluid">

        <a href="../Home/indexlogin.php" class="site-logo">
            <img style="margin-right: 20px;" class="hidden-md-down" src="../../public/img/logo_ICANH.png" alt="">
            <img class="hidden-lg-up" src="../../public/img/icono.png" alt="">
        </a>

        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>menu</span>
        </button>

        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../public/img/<?php echo $_SESSION["rol_id"] ?>.png" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../CerrarSesion//cerrarsesion.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
                        </div>
                    </div>
                </div>

                <div class="mobile-menu-right-overlay"></div>

                <input type="hidden" id="user_idx" value="<?php echo $_SESSION["usuario_id"] ?>"><!-- ID del Usuario-->
                <input type="hidden" id="rol_idx" value="<?php echo $_SESSION["rol_id"] ?>"><!-- Rol del Usuario-->

                <div style="float: right;" class="dropdown dropdown-typical">
                    <a href="#" class="dropdown-toggle no-arr">
                        <span class="lblcontactonomx"><?php echo $_SESSION["nombre"] ?> <?php echo $_SESSION["apellido"] ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>