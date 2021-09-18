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
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1>Precios</h1>

    <?php
   include_once 'bd/conexion.php';
   $objeto = new Conexion();
   $conexion = $objeto->Conectar();

   $consulta = "SELECT id, categoria,tipo, precio, estatus FROM precios";
   $resultado = $conexion->prepare($consulta);
   $resultado->execute();
   $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
   ?>

   <div class="container">
           <div class="row">
               <div class="col-lg-12">
               <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
               </div>
           </div>
   </div>
   <br>
   <div class="container">
           <div class="row">
                   <div class="col-lg-12">
                       <div class="table-responsive">
                           <table id="tablaPrecios" class="table table-striped table-bordered table-condensed" style="width:100%">
                           <thead class="text-center">
                               <tr>
                                   <th>Id</th>
                                   <th>Categoria</th>
                                   <th>Tipo</th>
                                   <th>Precio</th>
                                   <th>Estatus</th>
                                   <th>Acciones</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php
                               foreach($data as $dat) {
                               ?>
                               <tr>
                                   <td><?php echo $dat['id'] ?></td>
                                   <td><?php echo $dat['categoria'] ?></td>
                                   <td><?php echo $dat['tipo'] ?></td>
                                   <td><?php echo $dat['precio'] ?></td>
                                   <td><?php echo $dat['estatus'] ?></td>
                                   <td></td>
                               </tr>
                               <?php
                                   }
                               ?>
                           </tbody>
                          </table>
                       </div>
                   </div>
           </div>
   </div>


   <!--Modal para CRUD-->
   <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel"></h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                   </button>
               </div>

           <form id="formPrecios">
               <div class="modal-body">

                   <div class="form-group">
                     <label for="categoria" class="col-form-label">Categoria:</label>
                     <select class="form-control" id="categoria">
                       <option value="Estacionamiento">Estacionamiento</option>
                       <option value="Pension">Pension</option>
                       <option value="Servicio">Servicio</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label for="tipo" class="col-form-label">Tipo:</label>
                     <input type="text" class="form-control" id="tipo">
                   </div>
                   <div class="form-group">
                     <label for="precio" class="col-form-label">Precio:</label>
                     <input type="number" class="form-control" id="precio">
                   </div>
                   <div class="form-group">
                     <label for="estatus" class="col-form-label">Estatus:</label>
                     <select class="form-control" id="estatus">
                       <option value="ALTA">Alta</option>
                       <option value="BAJA">Baja</option>
                     </select>
                   </div>

               </div>

               <div class="modal-footer">
                   <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                   <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
               </div>

           </form>
           </div>
       </div>
   </div>

</div>
<!-- /.container-fluid -->


<?php include "inc/templates/footer.php";?>
