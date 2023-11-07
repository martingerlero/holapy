<?php

function registrar_venta($productos)
{
    include_once 'baseDeDatos.php';
    $conexionbd = new baseDeDatos();
    session_start();
    //Creamos la factura
    $fecha=  time();
    $sql = "INSERT INTO Factura (fecha) VALUES ('".$fecha."')";
    $resultado = $conexionbd->consulta($sql);
    //Traemos el MAX(id) de factura
    $sql1="SELECT max(idFactura) FROM Factura";
    $resultado1 = $conexionbd->consulta($sql1);
    if(count($resultado1)>0)
    {
        $idFactura = $resultado1[0][0];
    }
    else
    {
        $idFactura=0;
    }
    //Obtenemos el id de la sucursal
    $sql2="SELECT idSucursal FROM Sucursal WHERE dniUsuarioResponsable='".$_SESSION['nroDni']."'";
    $resultado2 = $conexionbd->consulta($sql2);
    if(count($resultado2)>0)
    {
        $sucursal = $resultado2[0][0];
    }
    else
    {
        $sucursal=0;
    }
    //Insertamos la venta
    $cliente = $_POST['cliente'];
    $medio_pago = $_POST['medio_pago'];
    $sql="INSERT INTO Venta (fecha, idSucursal, nroDniCliente, idFactura, medioDePago) VALUES ('".$fecha."','".$sucursal."','".$cliente."','".$idFactura."','".$medio_pago."')";
    $resultado = $conexionbd->consulta($sql);
    
    //Insertamos el detalle de la factura
    for($i=1;$i<count($_SESSION['cantidad']);$i++){
        $id_producto = $productos[$i][0]->getIdProducto();
        $precio = $productos[$i][0]->getPrecio();
        //Consultamos si esta carago este producto en esta factura
        $sql="SELECT idFactura, idProducto, precio, cantidad FROM DetalleFactura WHERE idFactura='".$idFactura."' AND idProducto='".$id_producto."'";
        $resultado = $conexionbd->consulta($sql);
        if(count($resultado)>0)
        {
            $cant=$resultado[0][3] + 1;
            $sql="UPDATE DetalleFactura SET cantidad = '".$cant."' WHERE idFactura='".$idFactura."' AND idProducto='".$id_producto."'";
        }
        else
        {
            $sql="INSERT INTO DetalleFactura (idFactura, idProducto, precio, cantidad) VALUES ('".$idFactura."','".$id_producto."','".$precio."','1')";
        }
        $resultado = $conexionbd->consulta($sql);
    }
        
}

function vm_obtener_ultimas_ventas($fecha)
{
    include_once 'baseDeDatos.php';
    include_once 'venta.php';
    $conexionbd = new baseDeDatos();
    $sql="SELECT fecha, idSucursal, nroDniCliente, idFactura, medioDePago FROM Venta WHERE fecha > '".$fecha."'";
    //echo $sql;
    $resultado = $conexionbd->consulta($sql);
    //Creamos un array de objetos con cada una de las ventas
    $ventas_array = array();
    for($i=0; $i<count($resultado); $i++)
    {
        $objeto_aux = new venta($resultado[$i][0], $resultado[$i][1], $resultado[$i][2], $resultado[$i][3], $resultado[$i][4]);
        $ventas_array[$i]=$objeto_aux;
    }
    return $ventas_array;
}

function vm_obtener_monto_venta($idFactura)
{
    include_once 'baseDeDatos.php';
    $conexionbd = new baseDeDatos();
    $sql="SELECT idFactura, SUM(precio*cantidad) FROM DetalleFactura WHERE idFactura='".$idFactura."'";
    $resultado = $conexionbd->consulta($sql);
    return $resultado[0][1];
}
?>