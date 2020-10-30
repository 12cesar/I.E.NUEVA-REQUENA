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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Titulo de Colegiado</th>
                    <th>Fecha</th>
                    <th>Codigo</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Reporte</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                  $mosacta=mostraractas();
                  if($mosacta->num_rows){
                    foreach ($mosacta as $mosacta1) {?>

                      <tr>
                        <td> <?php echo $mosacta1['titulo'];?> </td>
                        <td> <?php echo $mosacta1['fecha'];?> </td>
                        <td> <?php echo $mosacta1['codigo'];?> </td>
                        <td> <?php echo $mosacta1['estado'];?> </td>
                        <td><a class="btn btn-app" href="editaracta.php?id=<?php echo $mosacta1['id_acta'];?>">
                          <i class="fas fa-edit" data-toggle="modal" data-target="#modal-secondary"></i> Editar
                        </a></td>
                        <td><a class="btn btn-app" href="reporte.php?id=<?php echo $mosacta1['id_acta'];?>" target="_blank">
                          <i class="fas fa-file-pdf" data-toggle="modal" data-target="#modal-secondary"></i> Reporte
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
