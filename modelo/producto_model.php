<?php

function pm_obtener_productos()
    {
        include_once 'baseDeDatos.php';
        include_once 'producto.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT idProducto, nombre, descripcion, idCategoria, idProveedor, idTrazabilidad, precio FROM Producto ORDER BY nombre";
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada uno de los productos
        $productos_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new producto($resultado[$i][0], $resultado[$i][1], $resultado[$i][2], $resultado[$i][3], $resultado[$i][4], $resultado[$i][5], $resultado[$i][6]);
            $productos_array[$i]=$objeto_aux;
        }
        return $productos_array;
    }
    
/**
     * Busca un producto mediante un id y la retorna
     */
    function pm_obtener_producto($id)
    {
        include_once 'baseDeDatos.php';
        include_once 'producto.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT idProducto, nombre, descripcion, idCategoria, idProveedor, idTrazabilidad, precio FROM Producto WHERE idProducto=".$id;
        //echo "<br>".$sql;
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada uno de los productos
        $producto_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new producto($resultado[$i][0], $resultado[$i][1], $resultado[$i][2], $resultado[$i][3], $resultado[$i][4], $resultado[$i][5], $resultado[$i][6]);
            $producto_array[$i]=$objeto_aux;
        }
        return $producto_array;
    }
    
    /*
    * Recibe un objeto de tipo producto y edita o crea una nueva según corresponda
    */
    function pm_guardar_producto($producto_obj)
    {
        include_once 'baseDeDatos.php';
        $conexionbd = new baseDeDatos();
      if($producto_obj->getIdProducto()==-1)
      {
        //Insertamos el nuevo producto
        $sql="INSERT INTO Producto (nombre, descripcion, idCategoria, idProveedor, idTrazabilidad, precio) VALUES ('".$producto_obj->getNombre()."','".$producto_obj->getDescripcion()."','".$producto_obj->getIdCategoria()."','".$producto_obj->getIdProveedor()."','0', '".$producto_obj->getPrecio()."')";
      }
      else
      {
        //Actualizamos el producto del id
        $sql="UPDATE Producto SET nombre='".$producto_obj->getNombre()."',descripcion='".$producto_obj->getDescripcion()."',idCategoria=".$producto_obj->getIdCategoria().",idProveedor=".$producto_obj->getIdProveedor().", precio=".$producto_obj->getPrecio()." WHERE idProducto=".$producto_obj->getIdProducto();  
      }
      $resultado = $conexionbd->consulta($sql);
    }
    
    ?>