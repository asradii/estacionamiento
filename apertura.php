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
  <div class="row justify-content-center my-5">
      <div class="col-lg-6">

          <h1>Apertura de Caja</h1>

          <div class="p-5">

              <form id="formulario" class="" method="post">
                  <div class="form-group">
                      <label >Fecha:</label>
                      <input type="date" id="fechaApertura" name="fechaApertura"  class="form-control form-control-user">
                  </div>
                  <div class="form-group">
                      <label >Apertura: </label>
                      <input type="number" id="apertura" name="apertura"  class="form-control form-control-user"  placeholder="Apertura">
                  </div>
                  <br>
                  <div>
                    <input type="hidden" id="tipo" value="crear">
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Aceptar">
                  </div>
              </form>

          </div>

      </div>
  </div>
</div>

    <!-- End of Main Content -->
<?php include "inc/templates/footer.php";?>
