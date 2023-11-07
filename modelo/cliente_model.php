<?php

function cm_obtener_clientes()
    {
        include_once 'baseDeDatos.php';
        include_once 'cliente.php';
        $conexionbd = new baseDeDatos();
        $sql="SELECT C.nroDni, C.email, C.telefono, C.idBarrio ,C.calle, C.idObraSocial, C.nroAfiliado FROM Cliente C, Persona P WHERE C.nroDni=P.nroDni ORDER BY P.apellido";
        $resultado = $conexionbd->consulta($sql);
        //Creamos un array de objetos con cada uno de los productos
        $clientes_array = array();
        for($i=0; $i<count($resultado); $i++)
        {
            $objeto_aux = new cliente($resultado[$i][0], $resultado[$i][1], $resultado[$i][2], $resultado[$i][3], $resultado[$i][4], $resultado[$i][5], $resultado[$i][6], $resultado[$i][7]);
            $clientes_array[$i]=$objeto_aux;
        }
        return $clientes_array;
    }
    
    ?>