<?php
include_once '_encabezado.php';
?>

<h3>Productos </h3>

 <div class="fixed-action-btn horizontal">
    <a href="?c=producto_controller&&a=nuevo_producto" class="btn-floating btn-large green darken-2">
      <i class="large material-icons">add</i>
    </a>
     <!--a class="btn-floating btn-large green darken-2">
      <i class="large material-icons">mode_edit</i>
    </a-->
     <!--a class="btn-floating btn-large green darken-2">
      <i class="large material-icons">delete</i>
    </a-->
  </div>

<table class="striped">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Categoria</th>
              <th>Proveedor</th>
              <th>Precio</th>
          </tr>
        </thead>

        <tbody>
            <?php 
            for($i=0;$i<count($productos);$i++){
            ?> 
            <tr>
                <td><a href="?c=producto_controller&&a=editar_producto&&p1=<?=$productos[$i]->getIdProducto()?>" ><?=$productos[$i]->getNombre()?></a></td>
                <td><?=$productos[$i]->getDescripcion()?></td>
                <td><?=$productos[$i]->getCategoriaNombre()?></td>
                <td><?=$productos[$i]->getProveedorNombre()?></td>
                <td>$<?=$productos[$i]->getPrecio()?></td>
            </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
<?php
include_once '_pie.php';
?>