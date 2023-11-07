<?php
function pm_obtener_persona_por_dni($dni)
{
    include_once 'baseDeDatos.php';
    include_once 'persona.php';
    $conexionbd = new baseDeDatos();
    $sql="SELECT nroDni, nombre, apellido FROM Persona WHERE nroDni='$dni'";
    $resultado = $conexionbd->consulta($sql);
    if(count($resultado)>0)
    {
        $objeto_persona = new persona($resultado[0][0], $resultado[0][1], $resultado[0][2]);
        return $objeto_persona;
    }
    else
    {
        return;
    }
}
?>