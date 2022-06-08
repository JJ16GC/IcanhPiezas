<?php

# Switch case de tramite creado

if (isset($_GET["m"])) {
    switch ($_GET["m"]) {
        case "1";
?>
            <div class="alert alert-success alert-close alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">✔</span>
                </button>
                Tramite Creado Existosamente.
            </div>
        <?php
            break;
    }
}
?>