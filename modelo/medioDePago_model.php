<?php
function mm_obtener_medios()
    {
        include_once 'baseDeDatos.php';
        include_once 'medioDePago.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT idMedioDePago, nombre, descripcion FROM MedioDePago ORDER BY nombre";
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada uno de los productos
        $medios_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new medioDePago($resultado[$i][0], $resultado[$i][1], $resultado[$i][2]);
            $medios_array[$i]=$objeto_aux;
        }
        return $medios_array;
    }
    
    ?>