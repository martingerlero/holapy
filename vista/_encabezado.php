<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>HolaPy</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">        
    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel=stylesheet />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <script type="text/javascript">
        $(document).ready(function () {
            $(".button-collapse").sideNav();
            $('select').material_select();
        });

        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                });
            }(jQuery));
        });
    </script>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">
            <a href="https://holapy.com.ar" class="waves-effect waves-light">
                <span class="hide-on-small-only">
                    <img src="img/logo_encabezado.png" width="210" id="appicon" style="vertical-align: middle; margin-bottom: 10px; margin-right: 10px;">
                </span>
            </a>
            <!--a href="#" data-activates="nav-mobile" class="button-collapse left"><i class="material-icons">menu</i></a-->
            <ul class="right hide-on-med-and-down">
                <!-- Puedes agregar más elementos de navegación aquí si es necesario -->
                <li><a href="?c=venta_controller&&a=vender">Perfil</a></li>
                <li><a href="controlador/logout.php">Salir</a></li>
            </ul>
            <!--ul class="side-nav" id="nav-mobile">
                <li><a href="?c=venta_controller&&a=vender">Perfil</a></li>
                <li><a href="controlador/logout.php">Salir</a></li>
            </ul-->
        </div>
    </nav>
    <!-- Nueva sección para las insignias y la puntuación -->
    <div id="user-stats">
        <div class="badges">
            <!-- Puedes cambiar los iconos de las insignias según tus necesidades -->
            <i class="material-icons">star</i>
            <i class="material-icons">star</i>
        </div>
        <div class="score">
            <i class="material-icons">emoji_events</i> <!-- Icono de puntuación -->
            <span id="user-score">80</span> <!-- Puntuación (puedes cambiar este valor din -->
        </div>
    </div>
</header>