<?php
include_once '_encabezado.php';   
?>
<div class="row">
    <h4>Realizar Pago:</h4>
</div>
<div class="row">
    <form action="?c=venta_controller&&a=realizar_pago" method="POST" class="col s12">
        <?php 
        /*$precio_total = 0;
        for($i=1;$i<count($_SESSION['cantidad']);$i++){
            echo $productos[$i][0]->getNombre()." - $".$productos[$i][0]->getPrecio()."<br>";
            $precio_total = $precio_total + $productos[$i][0]->getPrecio();
        }*/
        ?>
        <!--p>Total $<?=$precio_total?></p-->
      <div class="input-field col s12">
            <select name="cliente">
                <?php
                for ($i = 0; $i < count($clientes); $i++) {
                    ?>
                <option value="<?=$clientes[$i]->getNroDni() ?>" ><?= $clientes[$i]->getApellidoPersona()." ".$clientes[$i]->getNombrePersona() ?></option>
                <?php } ?>
            </select>
            <label>Cliente</label>
        </div>
        <div class="input-field col s12">
            <select name="medio_pago">
                <?php
                for ($i = 0; $i < count($medio_pago); $i++) {
                ?>
                <option value="<?=$medio_pago[$i]->getIdMedioDePago() ?>" > <?= utf8_encode($medio_pago[$i]->getNombre()) ?></option>
                <?php } ?>
            </select>
            <label>Medio de Pago</label>
        </div>
        <div class="input-field col s12">
            <button class='btn-floating btn-large green darken-2' type="submit" value="Guardar"><i class="large material-icons">done</i></button>
        </div>
    </form>
</div>

<?php
include_once '_pie.php';
?>