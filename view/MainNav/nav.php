<?php
# Menu para Ssuarios
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
                <a href="..\ConsultarTicket\consulta.php">
                    <span class="glyphicon glyphicon-th-list"></span>
                    <span class="lbl">Consultar Trámites</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="../TramiteAnalisis/TramiteA.php">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="lbl">Trámite Analisis</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="../TramiteExhibicion/TramiteE.php">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="lbl">Trámite Exhibición</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
} else {
    # Menu para Administradores
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
                <a href="../ConsultarTicket/consulta.php">
                    <span class="glyphicon glyphicon-th-list"></span>
                    <span class="lbl">Consultar Trámites</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="../Mantenimiento/index.php">
                    <span class="glyphicon glyphicon-th-list"></span>
                    <span class="lbl">Mantenimiento<br>Usuarios Adm</span>
                </a>
            </li>

        </ul>
    </nav>
<?php
}
?>