<?php
session_start();
include_once '_encabezado.php';
?>

<h3>Carrito de Compras</h3>

 <div class="fixed-action-btn horizontal">
     <a href="?c=venta_controller&&a=vaciar_carrito" class="btn-floating btn-large green darken-2">
      <i class="material-icons">remove_shopping_cart</i>
    </a>
     <a href="?c=venta_controller&&a=pagar" class="btn-floating btn-large green darken-2">
      <i class="material-icons">payment</i>
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
              <th>Precio</th>
          </tr>
        </thead>

        <tbody>
            <?php 
            $precio_total = 0;
            for($i=1;$i<count($_SESSION['cantidad']);$i++){
            ?> 
            <tr>
                <td><?=$productos[$i][0]->getNombre()?></td>
                <td><?=$productos[$i][0]->getDescripcion()?></td>
                <td><?=$productos[$i][0]->getCategoriaNombre()?></td>
                <td>$<?=$productos[$i][0]->getPrecio()?></td>
            </tr>
          <?php
            $precio_total = $precio_total + $productos[$i][0]->getPrecio();
            }
          ?>
        </tbody>
      </table>
        <p>Total $<?=$precio_total?></p>
<?php
include_once '_pie.php';
?>