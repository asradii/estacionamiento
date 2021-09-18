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

<div class="container">
  <?php
    include 'inc/funciones/conexion.php';
    //$taxis=$conn->query("SELECT CONCAT(descripcion,' - ',numeconomico) As des FROM taxis WHERE estatus='ALTA' ");
    $taxis=$conn->query("SELECT descripcion As des FROM taxis WHERE estatus='ALTA' ");
  ?>

  <div class="row justify-content-center my-5">
      <div class="col-lg-7">
        <h1>Taxi</h1>
          <div class="p-5">

            <form id="formulario" class="user" method="post">
              <div class="form-group">


                <div class="form-group">

                  <select id="descripcion" name="descripcion" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <?php
                        foreach($taxis as $dat) {
                      ?>
                      <option value="<?php echo $dat['des'] ?>"><?php echo $dat['des'] ?></option>
                      <?php
                          }
                      ?>
                  </select>
                </div>


                <br>

                <div class="form-group">
                    <input type="hidden" id="tipo" value="crear">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
          </div>
      </div>
  </div>
</div>

<?php include "inc/templates/footer.php";?>
