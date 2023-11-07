<?php    
    /**
     * Busca todas las sucursales en la base de datos, crea un array de objetos de tipo sucursal y lo retorna.
     */
    function sm_obtener_sucursales()
    {
        include_once 'baseDeDatos.php';
        include_once 'sucursal.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT idSucursal, nombre, direccion, dniUsuarioResponsable FROM Sucursal";
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada una de las sucursales
        $sucursales_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new sucursal($resultado[$i][0], $resultado[$i][1], $resultado[$i][2], $resultado[$i][3]);
            $sucursales_array[$i]=$objeto_aux;
        }
        return $sucursales_array;
    }
    
    /**
     * Busca una sucursal mediante un id y la retorna
     */
    function sm_obtener_sucursal($id)
    {
        include_once 'baseDeDatos.php';
        include_once 'sucursal.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT idSucursal, nombre, direccion, dniUsuarioResponsable FROM Sucursal WHERE idSucursal=".$id;;
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada una de las sucursales
        $sucursal_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new sucursal($resultado[$i][0], $resultado[$i][1], $resultado[$i][2], $resultado[$i][3]);
            $sucursal_array[$i]=$objeto_aux;
        }
        return $sucursal_array;
    }
    
    /*
    * Recibe un objeto de tipo sucursal y edita o crea una nueva según corresponda
    */
    function sm_guardar_sucursal($suc_obj)
    {
        include_once 'baseDeDatos.php';
        $conexionbd = new baseDeDatos();
      if($suc_obj->getIdSucursal()==-1)
      {
        //Insertamos la nueva sucursal
        $sql="INSERT INTO Sucursal (nombre, direccion, dniUsuarioResponsable) VALUES ('".$suc_obj->getNombre()."','".$suc_obj->getDireccion()."','".$suc_obj->getDniUsuarioResponsable()."')";
      }
      else
      {
        //Actualizamos la sucursal del id
        $sql="UPDATE Sucursal SET nombre='".$suc_obj->getNombre()."',direccion='".$suc_obj->getDireccion()."',dniUsuarioResponsable=".$suc_obj->getDniUsuarioResponsable()." WHERE idSucursal=".$suc_obj->getIdSucursal();  
      }
      $resultado = $conexionbd->consulta($sql);
    }
    
    function sm_eliminar_sucursal($id)
    {
        include_once 'baseDeDatos.php';
        $conexionbd = new baseDeDatos();
        $sql="DELETE FROM Sucursal WHERE idSucursal=".$id;
        $resultado = $conexionbd->consulta($sql);
    }
?>