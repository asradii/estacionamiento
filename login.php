<?php
    session_start();
    include 'inc/funciones/funciones.php';
    include 'inc/templates/header.php';
    if(isset($_GET['cerrar_sesion'])) {
        $_SESSION = array();
    }
?>

<div class="container">
    <div class="row justify-content-center shadow-lg my-5  ">
        <div class="col-lg-6">
            <div class="p-5">

                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                </div>

                <form id="formulario" class="user" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="contraseña" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="tipo" value="login">
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Iniciar Sesión">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include "inc/templates/footer.php";?>
