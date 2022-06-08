<?php

# Switch case del LOGIN

if (isset($_GET["m"])) {
    switch ($_GET["m"]) {
        case "1";
?>
            <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="font-icon font-icon-warning"></i>
                El Usuario y/o Contraseña son incorrectos.
            </div>
        <?php
            break;

        case "2";
        ?>
            <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="font-icon font-icon-warning"></i>
                Los campos estan vacios.
            </div>
        <?php
            break;

        case "3";
        ?>
            <div class="alert alert-success alert-close alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">✔</span>
                </button>
                Usuario Creado Existosamente.
            </div>
        <?php
            break;

        case "4";
        ?>
            <div class="alert alert-success alert-close alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">✔</span>
                </button>
                Contraseña Actualizada Existosamente.
            </div>
        <?php
            break;

        case "5";
        ?>
            <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="font-icon font-icon-warning"></i>
                El correo ya esta registrado.
            </div>
<?php
            break;
    }
}
?>