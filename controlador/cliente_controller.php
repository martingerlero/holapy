<?php
function obtener_clientes() {
    include_once 'modelo/cliente_model.php';
    $clientes = cm_obtener_clientes();
    include_once 'vista/clientes_view.php';
}

?>