<?php
function obtener_productos() {
    include_once 'modelo/producto_model.php';
    $productos = pm_obtener_productos();
    include_once 'vista/productos_view.php';
}

function editar_producto($id)
{
    include_once 'modelo/producto_model.php';
    $producto = pm_obtener_producto($id);
    include_once 'modelo/categoria_model.php';
    $categorias = cm_obtener_categorias();
    include_once 'modelo/proveedor_model.php';
    $proveedores = pm_obtener_proveedores();
    include_once 'vista/producto_edit_view.php';
}

function guardar_cambios() {
    include_once 'modelo/producto_model.php';
    // Mapeamos las variables
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion_producto'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];
    $precio = $_POST['precio_producto'];
    // Creamos el objeto los con datos del formulario
    include_once 'modelo/producto.php';
    $producto_obj = new producto($id_producto, $nombre, $descripcion, $categoria, $proveedor, 0, $precio);
    pm_guardar_producto($producto_obj);
    $productos = pm_obtener_productos();
    include_once 'vista/productos_view.php';
}

function nuevo_producto()
{
    include_once 'modelo/producto_model.php';
    include_once 'modelo/categoria_model.php';
    $categorias = cm_obtener_categorias();
    include_once 'modelo/proveedor_model.php';
    $proveedores = pm_obtener_proveedores();
    include_once 'vista/producto_edit_view.php';
}
?>
