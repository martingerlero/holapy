<?php
include_once '_encabezado.php';
?>

<h3>Clientes </h3>

 <div class="fixed-action-btn horizontal">
    <a href="#" class="btn-floating btn-large green darken-2">
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
              <th>Apellido</th>
              <th>Nombre</th>
              <th>DNI</th>
              <th>Dirección</th>
              <th>Barrio</th>
              <th>Ciudad</th>
          </tr>
        </thead>

        <tbody>
            <?php 
            for($i=0;$i<count($clientes);$i++){
            ?> 
            <tr>
                <td><?=$clientes[$i]->getApellidoPersona()?></td>
                <td><?=$clientes[$i]->getNombrePersona()?></td>
                <td><?=$clientes[$i]->getNroDni()?></td>
                <td><?=$clientes[$i]->getCalle()?></td>
                <td><?=utf8_encode($clientes[$i]->getNombreBarrio())?></td>
                <td><?=utf8_encode($clientes[$i]->getNombreCiudad())?></td>
            </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
<?php
include_once '_pie.php';
?>