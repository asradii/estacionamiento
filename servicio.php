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
      <div class="col-lg-7">
        <h1>Servicio</h1>
          <div class="p-5">

            <form id="formulario" class="user" method="post" name="formulario">
              <div class="form-group">
                <div>
                  <input type="hidden" id="carga" value="crear">
                  <input type="submit" class="btn btn-primary  btn-block" value="Estacionamiento">
                </div>
              </div>
            </form>

            <form id="formulario1" class="user" method="post" name="formulario">
              <div class="form-group">
                <div>
                  <input type="hidden" id="carga" value="crearCarga">
                  <input type="submit" class="btn btn-primary  btn-block" value="Carga">
                </div>
              </div>
            </form>

            <form id="formulario2" class="user" method="post" name="formulario">
              <div class="form-group">
                <div>
                  <input type="hidden" id="equipaje" value="crear">
                  <input type="submit" class="btn btn-primary btn-block" value="Equipaje">
                </div>
              </div>
            </form>

            <form id="formulario3" class="user" method="post" name="formulario">
              <div class="form-group">
                <div>
                  <input type="hidden" id="pension" value="crear">
                  <input type="submit" class="btn btn-primary  btn-block" value="Pension">
                </div>
              </div>
            </form>

            <form id="formulario4" class="user" method="post" name="formulario">
              <div class="form-group">
                <div>
                  <input type="hidden" id="taxi" value="crear">
                  <input type="submit" class="btn btn-primary btn-block" value="Taxi">
                </div>
              </div>
            </form>

          </div>
      </div>
  </div>
</div>

<?php include "inc/templates/footer.php";?>
