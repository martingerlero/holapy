<?php
/**
 * Description of inicio_controller
 *
 * @author Gerlero Martin
 */
function index()
{
    session_start();
    $_SESSION['mensaje']="";
    if(isset($_SESSION['usuario']))
    {
        include_once 'vista/inicio_view.php';
    }
    else {
       
        include_once 'vista/login_view.php';
    }
}
