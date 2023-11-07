<?php

/*
    * Busca y retorna los proveedores de producto
    */
    function pm_obtener_proveedores()
    {
        include_once 'baseDeDatos.php';
        include_once 'proveedor.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT cuit, nombre FROM Proveedor ORDER BY nombre ASC";
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada uno de los proveedores
        $proveedores_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new proveedor($resultado[$i][0], $resultado[$i][1]);
            $proveedores_array[$i]=$objeto_aux;
        }
        return $proveedores_array;
    }
    
    //Obtener proveedor segun id    
    function pm_obtener_proveedor($id)
    {
        include_once 'baseDeDatos.php';
        include_once 'proveedor.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT cuit, nombre FROM Proveedor WHERE cuit=".$id;
        $resultado = $conexionbd->consulta($sql);
        if(count($resultado)>0)
        {
            $objeto_proveedor = new proveedor($resultado[0][0], $resultado[0][1]);
            return $objeto_proveedor;
        }
        else
        {
            return;
        }
    }
    
    ?>