<?php
function vender()
{
    include_once 'modelo/producto_model.php';
    $productos = pm_obtener_productos();
    include_once 'vista/vender_view.php';
}

function agregar_carrito($id)
{
    session_start();
    $_SESSION['carro'] = $_SESSION['carro'].";".$id;
    $_SESSION['cantidad'] = split(';', $_SESSION['carro']);
    include_once 'modelo/producto_model.php';
    $productos = pm_obtener_productos();
    include_once 'vista/vender_view.php';
}

function carrito()
{
    session_start();
    include_once 'modelo/producto_model.php';
    $productos = array();
    for($i=1;$i<count($_SESSION['cantidad']); $i++)
    {
        $id_prod = $_SESSION['cantidad'][$i];
        $productos[$i]=pm_obtener_producto($id_prod);
    }
    include_once 'vista/vender_carrito_view.php';
}

function vaciar_carrito()
{
    session_start();
    include_once 'modelo/producto_model.php';
    $_SESSION['carro'] = "";
    $_SESSION['cantidad'] = split(';', $_SESSION['carro']);
    $productos = pm_obtener_productos();
    include_once 'vista/vender_view.php';
}

function pagar()
{
    session_start();
    include_once 'modelo/producto_model.php';
    $productos = array();
    for($i=1;$i<count($_SESSION['cantidad']); $i++)
    {
        $id_prod = $_SESSION['cantidad'][$i];
        $productos[$i]=pm_obtener_producto($id_prod);
    }
    include_once 'modelo/cliente_model.php';
    $clientes = cm_obtener_clientes();
    include_once 'modelo/medioDePago_model.php';
    $medio_pago=mm_obtener_medios();
    include_once 'vista/vender_pagar_view.php';
}

function realizar_pago()
{
    session_start();
    //Aca debemos registrar la venta
    include_once 'modelo/producto_model.php';
    $productos = array();
    for($i=1;$i<count($_SESSION['cantidad']); $i++)
    {
        $id_prod = $_SESSION['cantidad'][$i];
        $productos[$i]=pm_obtener_producto($id_prod);
    }
    include_once 'modelo/venta_model.php';
    registrar_venta($productos);
    //cargar la vista de ventas
   // include_once 'modelo/producto_model.php';
    $_SESSION['carro'] = "";
    $_SESSION['cantidad'] = split(';', $_SESSION['carro']);
   // $productos = pm_obtener_productos();
   // include_once 'vista/vender_view.php';
    $mensaje="Venta realizada correctamente";
    include_once 'vista/inicio_view.php';
}
?>