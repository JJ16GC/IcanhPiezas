<?php
if (isset($_GET["m"])) {
    switch ($_GET["m"]) {
        case "1";
?>
            <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="font-icon font-icon-warning"></i>
                El Codigo de verificación es incorrecto.
            </div>
<?php
            break;
    }
}
?>