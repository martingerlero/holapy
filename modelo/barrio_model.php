<?php
function bm_obtener_barrio_por_id($idBarrio)
{
    include_once 'baseDeDatos.php';
    include_once 'barrio.php';
    $conexionbd = new baseDeDatos();
    $sql="SELECT idBarrio, nombre, ciudad FROM Barrio WHERE idBarrio='$idBarrio'";
    $resultado = $conexionbd->consulta($sql);
    if(count($resultado)>0)
    {
        $objeto_barrio = new barrio($resultado[0][0], $resultado[0][1], $resultado[0][2]);
        return $objeto_barrio;
    }
    else
    {
        return;
    }
}
?>