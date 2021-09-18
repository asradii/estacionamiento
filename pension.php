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
      <div class="col-lg-5">
          <h1>Pension</h1>
          <div class="contenido p-4">
        		<form id="formulario" name="formulario" class="form cf" method="post">
          			<div class="plan cf">

          				<input type="radio" name="pension" id="dia" value="Pension dia">
                  <label class="free-label  " for="dia">Pension Dia</label>
          				<input type="radio" name="pension" id="noche" value="Pension noche" checked>
                  <label class="basic-label  " for="noche">Pension Noche</label>
          				<input type="radio" name="pension" id="moto" value="Pension moto">
                  <label class="premium-label " for="moto">Pension Moto</label>

          			</div>
                
                <br>

                <div>
                  <input type="hidden" id="tipo" value="crear">
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Guardar">
                </div>
        		</form>
        </div>
      </div>
    </div>
</div>

<?php include "inc/templates/footer.php";?>
