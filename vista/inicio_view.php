<?php
include_once '_encabezado.php';
//$mensaje="Venta realizada correctamente";

if($mensaje!="")
{
?>
<div style="
     width: 100%;
    position: absolute;
    top: 20%;
    text-align: center;
    overflow: visible;">
    <div style="
         background-color: #D3FFC9;
         border-radius: 20px;
        position: absolute;
        width: 500px;
        height: 100px;
        top: -50px;
        left: 50%;
        margin-left: -250px;
        padding-top: 35px;
        font-family: 'trebuchet ms', tahoma, arial, sans-serif;
        font-weight: bold;
        font-size: 18px;
        color: #082E00;">
        <?=$mensaje?>
    </div>        
</div>
<?php } ?>


<div style="
     width: 100%;
    position: absolute;
    top: 50%;
    text-align: center;
    overflow: visible;">
    <div style="
        position: absolute;
        width: 500px;
        height: 100px;
        top: -50px;
        left: 50%;
        margin-left: -250px;
        font-family: 'trebuchet ms', tahoma, arial, sans-serif;
        font-weight: bold;
        font-size: 50px;
        color: #DDDDDD;">
        STARBUCKS
    </div>        
</div>

<?php
include_once '_pie.php';
?>
