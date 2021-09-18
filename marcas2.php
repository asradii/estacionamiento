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

<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <h1><span>Marcas</span></h1>
<div class=>

      <form id="formulario" method="post" class="agregar-marca centrar captura">
            <div >
                <input id="marca" type="text" placeholder="Marca de auto" class="entrada-captura form-captura">

                <input type="hidden" id="tipo" value="crear">
                <input type="submit" class="bot btn-enviar btn-captura btn-tam"  value="Agregar">

            </div>

      </form>

</div>

      </div>


</div>
<div>
  <h2>Listado de marcas:</h2>

  <div class="listado-marcas">
      <ul>

          <li id="tarea:<?php echo $tarea['id'] ?>" class="tarea">

              <p>Cambiar el Logotipo</p>

              <div class="acciones">
                  <i class="far fa-check-circle"></i>
                  <i class="fas fa-trash"></i>
              </div>

          </li>
      </ul>
  </div>
</div>

<?php include "inc/templates/footer.php";?>
