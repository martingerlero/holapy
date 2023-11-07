<?php
function um_obtener_usuario_por_dni($dni)
{
    include_once 'baseDeDatos.php';
    include_once 'usuario.php';
    $conexionbd = new baseDeDatos();
    $sql="SELECT nroDni, usuario FROM Usuario WHERE nroDni='$dni'";
    $resultado = $conexionbd->consulta($sql);
    if(count($resultado)>0)
    {
        $objeto_usuario = new usuario($resultado[0][0], $resultado[0][1]);
        return $objeto_usuario;
    }
    else
    {
        return;
    }
}

//Retorna todos los usuarios de la BD
function um_obtener_usuarios()
{
    include_once 'baseDeDatos.php';
    include_once 'usuario.php';
    $conexionbd = new baseDeDatos();
    $sql="SELECT nroDni, usuario FROM Usuario";
    $resultado = $conexionbd->consulta($sql);
    //Creamos un array de objetos con cada uno de los usuarios
    $usuario_array = array();
    for($i=0; $i<count($resultado); $i++)
    {
        $objeto_aux = new usuario($resultado[$i][0], $resultado[$i][1]);
        $usuario_array[$i]=$objeto_aux;
    }
    return $usuario_array;
}
?>