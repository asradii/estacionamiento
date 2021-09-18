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
  <div class="row justify-content-center my-5">
      <div class="col-lg-6">

          <div>
              <h1>Buscar registro</h1>
          </div>

          <div class="p-5">
              <form id="formulario" class="" method="post">
                  <div class="form-group">
                      <input type="text" id="folio" name="folio" class="form-control form-control-user"  placeholder="Folio">
                  </div>

                  <div>
                    <input type="hidden" id="tipo" value="buscar">
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Buscar">
                  </div>

              </form>

          </div>
      </div>

  </div>
</div>

<?php include "inc/templates/footer.php";?>
