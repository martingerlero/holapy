<?php
//Definimos carpeta donde se encuentra nuestros controladores
$carpetaControlador = "controlador/";
//Definimos un controlador predeterminado por si nos mandan uno erroneo o vacio
$controladorPredeterminado = "inicio_controller";
//Si no se indica ninguna accion, esta sera nuestra predefinida
$accionPredefinida = "index";
//Definimos el controlador que vamos a llamar si hay un error
$controladorError = $carpetaControlador . 'error_controller.php';
//Definimos los parametros por defecto
$p1default=$p2default="";

//Tomamos mediante GET el controlador que vamos a utilizar, de no ser indicado nada, colocamos nuestro predefinido
if(!empty($_GET['c']))
{
	$controlador = $_GET['c'];
}
else
{
	$controlador = $controladorPredeterminado;
}

//Indicamos mediante GET la accion que vamos a realizar, si no es nada, le damos la predefinida
if(!empty($_GET['a']))
{
	$accion = $_GET['a'];
}
else
{
	$accion = $accionPredefinida;
}

//Tomamos mediante get el parametro p1
if(!empty($_GET['p1']))
{
	$p1 = $_GET['p1'];
}
else
{
	$p1 = $p1default;
}

//Armamos la cadena con los datos obtenidos
$controlador = $carpetaControlador . $controlador . '.php';

//Comprobamos si el archivo de controlador que vamos a utilizar existe
if(is_file($controlador))
{
	include_once($controlador);
}
else
{
	include_once($controladorError);
}

//Llamamos a la accion, si no existe la funcion dentro del controlador, detenemos todo
if(is_callable($accion))
{
    //Preguntamos si existe el p1
    if(!empty($p1))
    {
        //Preguntamos si existe el p2
        if(!empty($p2))
        {
            //llamamos a la accion pasando los 2 parametros
            $accion($p1, $p2);
        }
        else
        {
            //llamamos a la accion pasando los el parametro
            $accion($p1);
        }
    }
    else
    {
        //No hay ningun parametro, llamamos a la accion sin parametros
        $accion();
    }
}
else
{
	include_once($controladorError);
}

?>