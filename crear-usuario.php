
<?php
    include 'inc/funciones/funciones.php';
    include 'inc/templates/header.php';

?>

<div class="container">
  <div class="row justify-content-center my-5">
      <div class="col-lg-7">
          <div class="p-5">

              <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Crear Usuario!</h1>
              </div>

              <form id="formulario" class="user" method="post">
                  <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nombre" id="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group row ">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="usuario" id="usuario" placeholder="Usuario">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <select id="tipousuario" name="tipousuario" class="form-control form-control-user" >
                          <option value="usuario">Usuario</option>
                          <option value="Administrador">Administrador</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" class="form-control form-control-user" name="contraseña" id="contraseña" placeholder="Contraseña">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" class="form-control form-control-user" name="autoriza" id="autoriza" placeholder="Contraseña de autorizacion">
                      </div>
                  </div>
                  <div class="form-group">
                      <input type="hidden" id="tipo" value="crear">
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar Usuario">
                  </div>
              </form>

              <hr>

              <div class="text-center">
                  <a class="small" href="login.php">Iniciar sesion!</a>
              </div>

          </div>
      </div>
  </div>
</div>
<?php include "inc/templates/footer.php";?>
