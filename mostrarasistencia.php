<?php
    session_start();
    include_once 'inc/templates/header.php';
    include_once 'inc/templates/navegadorasis.php';
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
                                    <table id="example1" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Titulo de Colegiado</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Marcar Asistencia</th>
                                      </tr>
                                      </thead>

                                      <tbody>
                                      <?php
                                      $mosasis=mostrarasistencias();
                                      if($mosasis->num_rows){
                                        foreach ($mosasis as $mosasis1) {?>

                                          <tr>
                                            <td> <?php echo $mosasis1['titulo'];?> </td>
                                            <td> <?php echo $mosasis1['fecha'];?> </td>
                                            <td> <?php echo $mosasis1['estado'];?> </td>
                                            <td><a class="btn btn-app" href="registrarasis.php?id_acta=<?php echo $mosasis1['id_acta'];?>&id_usuario=<?php echo $_SESSION['id']?>">
                                              <i class="fas fa-check-square" data-toggle="modal" data-target="#modal-secondary"></i> Asistencia
                                            </a></td>
                                          </tr>

                                          <?php
                                      }
                                      }?>

                                      </tbody>
                                    </table>
                                  </div>
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
