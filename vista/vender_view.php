<?php
session_start();
include_once '_encabezado.php';

$cant_carro=count($_SESSION['cantidad'])-1;
if($cant_carro==-1) $cant_carro=0;
?>

<h3>Realizar Venta </h3>

 <div class="fixed-action-btn horizontal">
     <span class="badge white-text green darken-2"><?=$cant_carro?></span>
     <a href="?c=venta_controller&&a=carrito" class="btn-floating btn-large green darken-2">
      <i class="material-icons" >shopping_cart</i>
    </a>
     <!--a class="btn-floating btn-large green darken-2">
      <i class="large material-icons">mode_edit</i>
    </a-->
     <!--a class="btn-floating btn-large green darken-2">
      <i class="large material-icons">delete</i>
    </a-->
  </div>
<div class="input-group"> <span class="input-group-addon">Filtrar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingrese nombre o parte de nombre...">
      </div>
<table class="striped">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Categoria</th>
              <th>Precio</th>
          </tr>
        </thead>

        <tbody class="buscar">
            <?php 
            for($i=0;$i<count($productos);$i++){
            ?> 
            <tr>
                <td><a href="?c=venta_controller&&a=agregar_carrito&&p1=<?=$productos[$i]->getIdProducto()?>" ><?=$productos[$i]->getNombre()?></a></td>
                <td><?=$productos[$i]->getDescripcion()?></td>
                <td><?=$productos[$i]->getCategoriaNombre()?></td>
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