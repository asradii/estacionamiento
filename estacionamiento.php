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
    $tipo=$conn->query("SELECT tipo FROM precios WHERE estatus='ALTA' and categoria='Estacionamiento' ");
  ?>

  <div class="row justify-content-center my-0">
      <div class="col-lg-5">
        <div>
            <h1>Estacionamiento</h1>
        </div>
          <div class="p-0">

            <form  class="user" method="post" name="formulario" id="formulario">

              <div >

                  <div class="wrapper">
                     <input type="radio" name="tipop" id="auto" value='Auto' checked>
                     <input type="radio" name="tipop" id="camioneta" value='Camioneta'>
                     <input type="radio" name="tipop" id="moto" value='Moto'>
                     <label for="auto" class="option auto">
                        <div class="dot"></div>
                        <span>Auto</span>
                      </label>
                     <label for="camioneta" class="option camioneta">
                        <div class="dot"></div>
                        <span>Camioneta</span>
                     </label>
                     <label for="moto" class="option moto">
                        <div class="dot"></div>
                        <span>Moto</span>
                     </label>
                 </div>
              </div>
              <!--
              <div class="form-check">
                  <div>  <label for="exampleColorInput" class="form-label">Tipo:</label>  </div>
                  <label>
                    <input class="form-check-input" type="radio" name="tipo" value="nissan" checked>
                    <img src="imagen/auto.png">  </label>
                  <label >
                      <input class="form-check-input" type="radio" name="tipo" value="chevrolet">
                      <img src="imagen/camioneta.png"> </label>
                  <label>
                    <input class="form-check-input" type="radio" name="tipo" value="volkswagen">
                    <img src="imagen/moto.png"> </label>

                    <label>
                </div>
              -->
              <div class="form-check">

                  <h4>Marca:</h4>
                  <label>
                    <input class="form-check-input" type="radio" name="marca" value="nissan" checked>
                    <img src="imagen/nissan3.png">  </label>
                  <label >
                      <input class="form-check-input" type="radio" name="marca" value="chevrolet">
                      <img src="imagen/chevrolet.png"> </label>
                  <label>
                    <input class="form-check-input" type="radio" name="marca" value="volkswagen">
                    <img src="imagen/volkswagen.png"> </label>
                  <label>
                    <input class="form-check-input" type="radio" name="marca" value="toyota">
                    <img src="imagen/toyota.png">  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="marca" value="toyota">
                    <img src="imagen/kia.png">  </label>
                  <label >
                    <input class="form-check-input" type="radio" name="marca" value="honda">
                    <img src="imagen/honda.png"> </label>
                  <label>
                    <input class="form-check-input" type="radio" name="marca" value="mazda">
                    <img src="imagen/mazda.png"> </label>
                  <label>
                    <input class="form-check-input" type="radio" name="marca" value="ford">
                    <img src="imagen/ford.png"> </label>
                  <label>
                    <input class="form-check-input" type="radio" name="marca" value="suzuki">
                    <img src="imagen/suzuki.png"> </label>
                  <label>
                    <label>
                      <input class="form-check-input" type="radio" name="marca" value="otro">
                      <img src="imagen/moto.png"> </label>
                    <label>
                </div>

                <div class="form-check">
                  <h4>Color:</h4>
                  <label >
                    <input class="form-check-input" type="radio" name="color" value="negro" checked>
                    <img src="imagen/c-negro.png">
                  </label>
                  <label >
                    <input class="form-check-input" type="radio" name="color" value="blanco">
                    <img src="imagen/c-blanco.png">
                  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="color" value="gris">
                    <img src="imagen/c-gris.png">
                  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="color" value="gris">
                    <img src="imagen/c-plata.png">
                  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="color" value="vino">
                    <img src="imagen/c-vino.png">
                  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="color" value="rojo">
                    <img src="imagen/c-rojo.png">
                  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="color" value="rojo">
                    <img src="imagen/c-naranja.png">
                  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="color" value="azul">
                    <img src="imagen/c-azul.png">
                  </label>
                  <label>
                    <input class="form-check-input" type="radio" name="color" value="otro">
                    <img src="imagen/moto.png"> </label>
                  <label>
                </div>

                <br>

                <div class="form-group">
                    <input type="hidden" id="tipo" value="crear">
                    <input type="submit" class="btn btn-primary btn-block" value="Guardar">
                </div>
            </form>
          </div>
      </div>
  </div>
</div>

<?php include "inc/templates/footer.php";?>
