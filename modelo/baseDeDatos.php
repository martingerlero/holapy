<?php
/**
 * Description of baseDeDatos
 *
 * @author Gerlero Martin
 */
//$conexionbd = new baseDeDatos();
class baseDeDatos {
// definir variables generales para esta clase
var $servidor = "localhost";
var $usuario = "martinge_efip2";
var $clave = "Piramide290";
var $base = "martinge_holapy";
var $idconexion = 0;
var $filas = 0;
var $idconsulta = 0;

// constructor
function base_de_datos() {
    
}

// realizar consutlas y devolver en un array todos los registros
function consulta($sql) {
    //$conexion=mysqli_connect($this->servidor, $this->usuario, $this->clave);
    //mysqli_select_db($this->base,$conexion);
	$conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->base);
    $resultado=mysqli_query($conexion, $sql);
    $filas=mysqli_num_rows($resultado);
    $campos=mysqli_num_fields($resultado);
    for ($i=0;$i<$filas;$i=$i+1) {
            $tmp=mysqli_fetch_array($resultado);
            for ($i2=0;$i2<$campos;$i2=$i2+1)
                    $devolver[$i][$i2]=$tmp[$i2];
    }
    mysqli_close($conexion);
	//echo "Dev: ".$devolver;
    if(isset($devolver))
    {
        return $devolver;
    }
    else
    {
        return null;
    }
    
}
}
