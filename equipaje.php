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
          <h1>Equipaje</h1>
          <div class="contenido p-6">
        		<form id="formulario" name="formulario" class="form cf" method="post">
          			<div class="plan cf">
          				<h3>Tamaño:</h3>
          				<input type="radio" name="tamaño" id="chico" value="Chico">
                  <label class="free-label four col" for="chico">Chico</label>
          				<input type="radio" name="tamaño" id="mediano" value="Mediano" checked>
                  <label class="basic-label four2 col" for="mediano">Mediano</label>
          				<input type="radio" name="tamaño" id="grande" value="Grande">
                  <label class="premium-label four col" for="grande">Grande</label>
                  <input type="radio" name="tamaño" id="extrag" value="Extra Grande">
                  <label class="premium-label four2 col" for="extrag">Extra Grande</label>
          			</div>
                <br>
                <div class="form-group ">
                  <h3>Precio:</h3>
                    <input type="number" id="precio" name="precio"  class="form-control form-control-user"  placeholder="Precio">
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
