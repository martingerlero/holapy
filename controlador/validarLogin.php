<?php
session_start();
//Traemos el usuario y password de la base de datos y lo acomodamos para la consulta
$username=$_POST["username"];
$password=md5($_POST["password"]);

if(!isset($username) OR !isset($password))
{
    header("Location: ../index.php");
}

//Creamos el objeto que se va a conectar a la BD
include_once '../modelo/baseDeDatos.php';
$conexionbd = new baseDeDatos();
//Validamos el login
$sql="SELECT nroDni, usuario, pass FROM Usuario WHERE usuario LIKE '$username' AND pass LIKE '$password'";
$resultado=$conexionbd->consulta($sql);
if(count($resultado)==1)
{
	//echo "entre al if";
    $_SESSION['nroDni']=$resultado[0][0];
    $_SESSION['usuario']=$resultado[0][1];
    $_SESSION['password']=$resultado[0][2];
    $_SESSION['mensaje']="";
    header("Location: ../index.php");
}
else
{
    $_SESSION['mensaje']="Nombre de usuario o contraseña incorrecta.";
    header("Location: ../index.php");
}

?>
