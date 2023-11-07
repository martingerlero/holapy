<?php

function obtener_sucursales() {
    include_once 'modelo/sucursal_model.php';
    $sucursales = sm_obtener_sucursales();
    include_once 'vista/sucursales_view.php';
}

function editar_sucursal($id) {
    include_once 'modelo/sucursal_model.php';
    $sucursal = sm_obtener_sucursal($id);
    include_once 'modelo/usuario_model.php';
    $usuarios = um_obtener_usuarios();
    include_once 'vista/sucursal_edit_view.php';
}

function guardar_cambios() {
    if($_POST['boton']=="Eliminar")
    {
        include_once 'modelo/sucursal_model.php';
        // Mapeamos las variables
        $id_sucursal = $_POST['id_sucursal'];
        sm_eliminar_sucursal($id_sucursal);
        $sucursales = sm_obtener_sucursales();
        include_once 'vista/sucursales_view.php';
    }
 else {
        include_once 'modelo/sucursal_model.php';
        // Mapeamos las variables
        $id_sucursal = $_POST['id_sucursal'];
        $nombre = $_POST['nombre_sucursal'];
        $direccion = $_POST['direccion_sucursal'];
        $sucursales = sm_obtener_sucursales();
        $dni_responsable = $_POST['dni_responsable'];
        // Creamos el objeto los con datos del formulario
        include_once 'modelo/sucursal.php';
        $sucursal_obj = new sucursal($id_sucursal, $nombre, $direccion, $dni_responsable);
        sm_guardar_sucursal($sucursal_obj);
        $sucursales = sm_obtener_sucursales();
        include_once 'vista/sucursales_view.php';
    }
    
}

function nueva_sucursal()
{
    include_once 'modelo/sucursal_model.php';
    include_once 'modelo/usuario_model.php';
    $usuarios = um_obtener_usuarios();
    include_once 'vista/sucursal_edit_view.php';
}

?>