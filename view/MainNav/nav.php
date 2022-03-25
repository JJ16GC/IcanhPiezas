<?php
if ($_SESSION["rol_id"] == 1) {
?>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="..\Home\">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="..\ConsultarTicket\">
                    <span class="glyphicon glyphicon-th-list"></span>
                    <span class="lbl">Consultar Ticket</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="../TramiteAnalisis/TramiteA.php">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="lbl">Tramite Analisis</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="../TramiteExhibicion/TramiteE.php">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="lbl">Tramite Exhibición</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
} else {
?>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="../Home/indexlogin.php">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="..\MntUsuario\">
                    <span class="glyphicon glyphicon-th-list"></span>
                    <span class="lbl">Mantenimiento Usuario</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="..\ConsultarTicket\">
                    <span class="glyphicon glyphicon-th-list"></span>
                    <span class="lbl">Consultar Ticket</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
}
?>