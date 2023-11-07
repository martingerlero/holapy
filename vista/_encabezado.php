<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Starbucks</title>
        <link rel="stylesheet" href="static/css/materialize.min.css">
        <link rel="stylesheet" href="css/estilo.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="static/js/materialize.min.js"></script>
        <link href=https://fonts.googleapis.com/icon?family=Material+Icons rel=stylesheet />
        <script type="text/javascript">
            $( document ).ready(function() {
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

                    })

                }(jQuery));

            });
        
        </script>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="http://s21.gerletin.com" class="waves-effect waves-light">
                        <span class="hide-on-small-only"><img src="img/logo_encabezado.png" width="210" id="appicon" style="vertical-align: middle;margin-bottom:10px;margin-right:10px;"></span>
                    </a>
                    <ul id="dropdown_reportes" class="dropdown-content">
                        <li><a href="?c=reporte_controller&&a=reporte_ventas_semanal" target="_BLANK">Ventas Semanales</a></li>
                        <li><a href="?c=reporte_controller&&a=reporte_ventas_diarias" target="_BLANK">Ventas Diarias</a></li>
                        <li><a href="?c=reporte_controller&&a=reporte_ventas_mensual" target="_BLANK">Ventas Mensual</a></li>
                    </ul>
                    <ul id="dropdown_reportes_movil" class="dropdown-content">
                        <li><a href="?c=reporte_controller&&a=reporte_ventas_semanal" target="_BLANK">Ventas Semanales</a></li>
                        <li><a href="?c=reporte_controller&&a=reporte_ventas_diarias" target="_BLANK">Ventas Diarias</a></li>
                        <li><a href="?c=reporte_controller&&a=reporte_ventas_mensual" target="_BLANK">Ventas Mensual</a></li>
                    </ul>
                    
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="?c=venta_controller&&a=vender">Venta</a></li>
                    <li><a href="?c=cliente_controller&&a=obtener_clientes">Clientes</a></li>
                    <li><a href="?c=producto_controller&&a=obtener_productos">Productos</a></li>
                    <!--li><a href="?c=reporte_controller&&a=reporte_ventas" target="_BLANK">Reportes</a></li-->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_reportes">Reportes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="?c=sucursal_controller&&a=obtener_sucursales">Sucursales</a></li>
                    <li><a href="controlador/logout.php">Salir</a></li>
                  </ul>
                  <ul class="side-nav" id="mobile-demo">
                    <li><a href="?c=venta_controller&&a=vender">Venta</a></li>
                    <li><a href="?c=cliente_controller&&a=obtener_clientes">Clientes</a></li>
                    <li><a href="?c=producto_controller&&a=obtener_productos">Productos</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_reportes_movil">Reportes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="?c=sucursal_controller&&a=obtener_sucursales">Sucursales</a></li>
                    <li><a href="controlador/logout.php">Salir</a></li>
                  </ul>
                </div>
              </nav>
        </header>     