<?php

function cm_obtener_ciudad_por_id($idCiudad)
{
    include_once 'baseDeDatos.php';
    include_once 'ciudad.php';
    $conexionbd = new baseDeDatos();
    $sql="SELECT idCiudad, nombre FROM Ciudad WHERE idCiudad='$idCiudad'";
    $resultado = $conexionbd->consulta($sql);
    if(count($resultado)>0)
    {
        $objeto_ciudad = new ciudad($resultado[0][0], $resultado[0][1]);
        return $objeto_ciudad;
    }
    else
    {
        return;
    }
}

?>