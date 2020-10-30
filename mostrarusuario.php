<?php
    session_start();
    include_once 'inc/templates/header.php';
    include_once 'inc/templates/navegador.php';
    include_once 'inc/funciones/funciones.php';
    

?>
        <!-- Content Wrapper. Contains page content -->
        <br>
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Mostrar Actas</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-10"></div>
                  <div class="col-sm-2" ><a class="btn btn-app" style="float:right;" href="reporteusuario.php">
                          <i class="fas fa-file-pdf" data-toggle="modal" data-target="#modal-secondary"></i> Generar Reporte
                        </a></div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Firma</th>
                    <th>Editar</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                  $mosusuario=mostrarusuario();
                  if($mosusuario->num_rows){
                    foreach ($mosusuario as $mosusuario1) {?>

                      <tr>
                        <td> <?php echo $mosusuario1['nombre'];?> </td>
                        <td> <?php echo $mosusuario1['apellido'];?> </td>
                        <td> <?php echo $mosusuario1['usuario'];?> </td>
                        <td> <?php echo $mosusuario1['password'];?> </td>
                        <td> <?php echo $mosusuario1['firma'];?> </td>
                        <td><a class="btn btn-app" href="editarusuario.php?id=<?php echo $mosusuario1['id_usuario'];?>">
                          <i class="fas fa-edit" data-toggle="modal" data-target="#modal-secondary"></i> Editar
                        </a></td>
                        
                      </tr>

                      <?php
                  }
                  }?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<?php
    include_once 'inc/templates/footer.php';
?>
