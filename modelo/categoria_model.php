<?php
/*
    * Busca y obtiene las categorias de producto
    */
    function cm_obtener_categorias()
    {
        include_once 'baseDeDatos.php';
        include_once 'categoria.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT idCategoria, nombre FROM CategoriaProducto ORDER BY nombre ASC";
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada una de las categorias
        $categoria_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new categoria($resultado[$i][0], $resultado[$i][1]);
            $categoria_array[$i]=$objeto_aux;
        }
        return $categoria_array;
    }
    
    //Obtener categoria segun id    
    function cm_obtener_categoria($id)
    {
        include_once 'baseDeDatos.php';
        include_once 'categoria.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT idCategoria, nombre FROM CategoriaProducto WHERE idCategoria=".$id;
        $resultado = $conexionbd->consulta($sql);
        if(count($resultado)>0)
        {
            $objeto_categoria = new categoria($resultado[0][0], $resultado[0][1]);
            return $objeto_categoria;
        }
        else
        {
            return;
        }
    }
    
    ?>