<?php
/**
 * Description of inicio_controller
 *
 * @author Gerlero Martin
 */
function teorico_1_1()
{
    session_start();
    if(isset($_SESSION['usuario']))
    {
        include_once 'vista/teorico_view.php';
    }
    else {
       
        include_once 'vista/login_view.php';
    }
}

function ejemplo_1_1()
{
    session_start();
    if(isset($_SESSION['usuario']))
    {
        include_once 'vista/ejemplo_view.php';
    }
    else {
       
        include_once 'vista/login_view.php';
    }
}

function actividad_1_1()
{
    session_start();
    if(isset($_SESSION['usuario']))
    {
        include_once 'vista/actividad_view.php';
    }
    else {
       
        include_once 'vista/login_view.php';
    }
}

function corregir_1_1()
{
    session_start();
    if(isset($_SESSION['usuario']))
    {
        include_once 'vista/corregir_view.php';
    }
    else {
       
        include_once 'vista/login_view.php';
    }
}
