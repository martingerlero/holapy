<?php
include_once '_encabezado.php';

//Mapeamos los datos del producto: idProducto, nombre, descripcion, idCategoria, idProveedor, idTrazabilidad
if(isset($producto[0]))
{
    $id_producto=$producto[0]->getIdProducto();
    $nombre_producto=$producto[0]->getNombre();
    $descripcion_producto=$producto[0]->getDescripcion();
    $id_categoria=$producto[0]->getIdCategoria();
    $id_proveedor=$producto[0]->getIdProveedor();
    $id_trazabilidad=$producto[0]->getIdTrazabilidad();
    $precio_producto=$producto[0]->getPrecio();
    $titulo_formulario="Editar producto ".$nombre_producto; 
}
else
{
    $id_producto=-1;
    $nombre_producto="";
    $descripcion_producto="";
    $id_categoria="";
    $id_proveedor="";
    $id_trazabilidad="";
    $titulo_formulario = "Nuevo producto";
}
    
?>

<h3><?=$titulo_formulario?> </h3>

<div class="row">
    <form action="?c=producto_controller&&a=guardar_cambios" method="POST" class="col s12">
      <input type="hidden" name="id_producto" value="<?=$id_producto?>" />
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Nombre" id="nombre" type="text" name="nombre_producto" value="<?=$nombre_producto?>" class="validate" required>
                <label for="nombre">Nombre de Producto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Descripción" id="descripcion" type="text" name="descripcion_producto" value="<?=$descripcion_producto?>" class="validate" required >
                <label for="descripcion">Descripción</label>
            </div>
        </div>
      <div class="input-field col s12">
            <select name="categoria">
                <?php
                for ($i = 0; $i < count($categorias); $i++) {
                    if ($categorias[$i]->getIdCategoria() == $id_categoria) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    ?>
                <option value="<?=$categorias[$i]->getIdCategoria() ?>" <?= $sel ?> ><?= $categorias[$i]->getNombre() ?></option>
                <?php } ?>
            </select>
            <label>Categoria</label>
        </div>
        <div class="input-field col s12">
            <select name="proveedor">
                <?php
                for ($i = 0; $i < count($proveedores); $i++) {
                    if ($proveedores[$i]->getCuit() == $id_proveedor) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    ?>
                <option value="<?=$proveedores[$i]->getCuit() ?>" <?= $sel ?> ><?= $proveedores[$i]->getNombre() ?></option>
                <?php } ?>
            </select>
            <label>Proveedor</label>
        </div>
      <div class="row">
            <div class="input-field col s12">
                <input placeholder="Precio" id="descripcion" type="text" name="precio_producto" value="<?=$precio_producto?>" class="validate" required >
                <label for="precio">Precio</label>
            </div>
        </div>
        <div class="input-field col s12">
            <button class='btn-floating btn-large green darken-2' type="submit" value="Guardar"><i class="large material-icons">save</i></button>
        </div>
    </form>
</div>

<?php
include_once '_pie.php';
?>