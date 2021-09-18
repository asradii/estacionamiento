<?php
    include 'inc/funciones/sesiones.php';
    include 'inc/funciones/funciones.php';
    include "inc/templates/header.php";

    if($_SESSION["tipousuario"]==='usuario' ){
          include "inc/templates/sidebar0.php";
    }else if($_SESSION["tipousuario"]==='administrador' ){
        include "inc/templates/sidebar.php";
    }

    include "inc/templates/topbar.php";
?>

<div class="container-fluid">
  <h1>Registros</h1>
  <?php
    include 'inc/funciones/conexion.php';
    $servicios=$conn->query("SELECT tipo,folio,fecha_entrada,fecha_salida,cantidad,precio,total,estatus
      FROM registro where categoria in ('Estacionamiento') and estatus in ('CONCLUIDO','Pendiente')");
  ?>

  <div class="container">
          <div class="row">
                  <div class="card-body col-lg-12">
                      <div class="table-responsive">
                          <table id="tabla" class="table table-striped table-bordered table-condensed" style="width:100%">
                          <thead class="text-center">
                              <tr>
                                  <th>Tipo</th>
                                  <th>Folio</th>
                                  <th>Fecha Entrada</th>
                                  <th>Fecha Salida</th>
                                  <th>Cantidad</th>
                                  <th>Precio</th>
                                  <th>Total</th>
                                  <th>Estatus</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                              foreach($servicios as $dat) {
                              ?>
                              <tr>
                                  <td><?php echo $dat['tipo'] ?></td>
                                  <td><?php echo $dat['folio'] ?></td>
                                  <td><?php echo $dat['fecha_entrada'] ?></td>
                                  <td><?php echo $dat['fecha_salida'] ?></td>
                                  <td><?php echo $dat['cantidad'] ?></td>
                                  <td><?php echo $dat['precio'] ?></td>
                                  <td><?php echo $dat['total'] ?></td>
                                  <td><?php echo $dat['estatus'] ?></td>

                              </tr>
                              <?php
                                  }
                              ?>
                          </tbody>
                         </table>
                      </div>
                  </div>
          </div>
  </div>

</div>
<?php include "inc/templates/footer.php";?>
