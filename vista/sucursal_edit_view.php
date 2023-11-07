<?php
include_once '_encabezado.php';

//Mapeamos los datos de la sucursal
if(isset($sucursal[0]))
{
    $id_sucursal=$sucursal[0]->getIdSucursal();
    $nombre_sucursal=$sucursal[0]->getNombre();
    $direccion_sucursal=$sucursal[0]->getDireccion();
    $dni_usuario_responsable=$sucursal[0]->getDniUsuarioResponsable();
    $titulo_formulario="Editar Sucursal ".$nombre_sucursal; 
}
else
{
    $id_sucursal=-1;
    $nombre_sucursal = "";
    $direccion_sucursal="";
    $dni_usuario_responsable="";
    $titulo_formulario = "Nueva sucursal";
}
    
?>

<h3><?=$titulo_formulario?> </h3>

<!--div class="fixed-action-btn horizontal">
    <a href="?c=sucursal_controller&&a=nueva_sucursal" class="btn-floating btn-large green darken-2">
        <i class="large material-icons">save</i>
    </a>
    <!--a class="btn-floating btn-large green darken-2">
     <i class="large material-icons">mode_edit</i>
   </a-->
    <!--a class="btn-floating btn-large green darken-2">
     <i class="large material-icons">delete</i>
   </a-->
<!--/div-->

<div class="row">
    <form action="?c=sucursal_controller&&a=guardar_cambios" method="POST" class="col s12">
      <input type="hidden" name="id_sucursal" value="<?=$id_sucursal?>" />
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Nombre" id="nombre" type="text" name="nombre_sucursal" value="<?=$nombre_sucursal?>" class="validate" required>
                <label for="nombre">Nombre de Sucursal</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Direccion" id="direccion" type="text" name="direccion_sucursal" value="<?=$direccion_sucursal?>" class="validate" required >
                <label for="direccion">Dirección</label>
            </div>
        </div>
        <div class="input-field col s12">
            <select name="dni_responsable">
                <?php
                for ($i = 0; $i < count($usuarios); $i++) {
                    if ($usuarios[$i]->getNroDni() == $dni_usuario_responsable) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    ?>
                    <option value="<?= $usuarios[$i]->getNroDni() ?>" <?= $sel ?> ><?= $usuarios[$i]->getUsuarioNombreApellido() ?></option>
                <?php } ?>
            </select>
            <label>Responsable</label>
        </div>
        <div class="input-field col s12">
            <button class='btn-floating btn-large green darken-2' type="submit" name="boton" value="Guardar"><i class="large material-icons">save</i></button>
            <button class='btn-floating btn-large green darken-2' type="submit" name="boton" value="Eliminar"><i class="large material-icons">delete</i></button>
        </div>
    </form>
</div>

<?php
include_once '_pie.php';
?>