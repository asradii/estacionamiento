<?php
    include 'inc/funciones/sesiones.php';
    include 'inc/funciones/funciones.php';
    include "inc/templates/header.php";

    if($_SESSION["tipousuario"]==='usuario' ){
          include "inc/templates/sidebar0.php";
    }else if($_SESSION["tipousuario"]==='administrador' ){
        include "inc/templates/sidebar.php";
    }
    $usuario=$_SESSION["nombre"];

    include "inc/templates/topbar.php";
?>

<div class="container">
  <?php
    include 'inc/funciones/conexion.php';
    //$taxis=$conn->query("SELECT CONCAT(descripcion,' - ',numeconomico) As des FROM taxis WHERE estatus='ALTA' ");
    $total=$conn->query("SELECT SUM(total) As total FROM registro WHERE estatus='CONCLUIDO' ");
    $fondofijo=$conn->query("SELECT fondo_fijo FROM caja WHERE estatus='Pendiente' ");
    $estacionamiento=$conn->query("SELECT SUM(total) As total FROM registro WHERE estatus='CONCLUIDO' AND categoria='Estacionamiento' ");
    $pension=$conn->query("SELECT SUM(total) As total FROM registro WHERE estatus='CONCLUIDO' AND categoria='Pension' ");
    $taxi=$conn->query("SELECT SUM(total) As total FROM registro WHERE estatus='CONCLUIDO' AND categoria='Servicio' AND tipo ='Taxi' ");
    $equipaje=$conn->query("SELECT SUM(total) As total FROM registro WHERE estatus='CONCLUIDO' AND categoria='Servicio' AND tipo ='Equipaje' ");
    $carga=$conn->query("SELECT SUM(total) As total FROM registro WHERE estatus='CONCLUIDO' AND categoria='Servicio' AND tipo ='Carga' ");
  ?>

  <div class="row justify-content-center my-5">
      <div class="col-lg-6">

          <h1>Corte de Caja</h1>

          <div class="p-5">

              <form id="formulario" class="" method="post">
                  <div class="mb-1 row">
                      <label for="fechaCorte" class="col-sm-4 col-form-label">Fecha:</label>
                      <div class="col-sm-13">
                          <input type="date" id="fechaCorte" name="fechaCorte"  class="form-control">
                      </div>
                  </div>

                  <div class="mb-1 row">
                      <label for="estacionamiento" class="col-sm-4 col-form-label">Estacionamiento: </label>
                      <div class="col-sm-13">
                        <?php foreach($estacionamiento as $dat) { ?>
                        <input type="number" id="estacionamiento" name="estacionamiento"  class="form-control" value="<?php echo $dat['total'] ?>">
                        <?php }  ?>
                      </div>
                  </div>
                  <div class="mb-1 row">
                      <label for="pension" class="col-sm-4 col-form-label">Pension: </label>
                      <div class="col-sm-13">
                          <?php foreach($pension as $dat) { ?>
                          <input type="number" id="pension" name="pension"  class="form-control" value="<?php echo $dat['total'] ?>">
                          <?php }  ?>
                      </div>
                  </div>
                  <div class="mb-1 row">
                      <label for="taxi" class="col-sm-4 col-form-label">Taxi: </label>
                      <div class="col-sm-13">
                          <?php foreach($taxi as $dat) { ?>
                          <input type="number" id="taxi" name="taxi"  class="form-control" value="<?php echo $dat['total'] ?>">
                          <?php }  ?>
                      </div>
                  </div>
                  <div class="mb-1 row">
                      <label for="equipaje" class="col-sm-4 col-form-label">Equipaje: </label>
                      <div class="col-sm-13">
                          <?php foreach($equipaje as $dat) { ?>
                          <input type="number" id="equipaje" name="equipaje"  class="form-control" value="<?php echo $dat['total'] ?>">
                          <?php }  ?>
                      </div>
                  </div>
                  <div class="mb-1 row">
                      <label for="carga" class="col-sm-4 col-form-label">Carga: </label>
                      <div class="col-sm-13">
                          <?php foreach($carga as $dat) { ?>
                          <input type="number" id="carga" name="carga"  class="form-control form-control-user" value="<?php echo $dat['total'] ?>">
                          <?php }  ?>
                      </div>
                  </div>
                  <div class="mb-5 row">
                      <label for="fondofijo" class="col-sm-4 col-form-label">FondoFijo:  </label>
                      <div class="col-sm-13">
                          <?php foreach($fondofijo as $dat) { ?>
                          <input type="number" id="fondofijo" name="fondofijo" class="form-control" value="<?php echo $dat['fondo_fijo'] ?>">
                          <?php }  ?>
                      </div>
                  </div>
                  <div class="mb-0 row">
                      <label for="total" class="col-sm-4 col-form-label">Total:  </label>
                      <div class="col-sm-13">
                          <?php foreach($total as $dat) {
                              foreach($fondofijo as $dato)

                            $tot=$dat['total']+ $dato['fondo_fijo']; ?>
                          <input type="number" id="total" name="total" class="form-control" value="<?php echo $tot ?>">
                          <?php }  ?>
                      </div>
                  </div>

                  <br>

                  <div class="mb-2 row">
                    <div class="col-sm-10">

                    <input type="hidden" id="tipo" value="crear">
                    <input type="submit" class="btn btn-primary  btn-block" value="Aceptar">
                    </div>
                  </div>
              </form>

          </div>

      </div>
  </div>
</div>

    <!-- End of Main Content -->
<?php include "inc/templates/footer.php";?>
