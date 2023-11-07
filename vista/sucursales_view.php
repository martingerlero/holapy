<?php
include_once '_encabezado.php';
?>

<h3>Sucursales </h3>

 <div class="fixed-action-btn horizontal">
    <a href="?c=sucursal_controller&&a=nueva_sucursal" class="btn-floating btn-large green darken-2">
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
              <th>Dirección</th>
              <th>Responsable</th>
          </tr>
        </thead>

        <tbody>
            <?php 
            for($i=0;$i<count($sucursales);$i++){
            ?> 
            <tr>
                <td><a href="?c=sucursal_controller&&a=editar_sucursal&&p1=<?=$sucursales[$i]->getIdSucursal()?>" ><?=$sucursales[$i]->getNombre()?></a></td>
                <td><?=$sucursales[$i]->getDireccion()?></td>
                <td><?=$sucursales[$i]->getResponsableNombreApellido()?></td>
            </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
<?php
include_once '_pie.php';
?>