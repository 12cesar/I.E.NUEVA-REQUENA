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
                                    <h3 class="card-title">Registrar Nueva Acta</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formacta" method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Seleccione un Colegiado</label>
                                                        <select class="form-control select2" style="width: 100%;" id="colegiado">
                                                        <option selected="selected" disabled value="0">Seleccione una opcion</option>
                                                        <?php
                                                        $cole=mostrarcolegiado();
                                                        if($cole->num_rows)
                                                        {
                                                            foreach ($cole as $cole1) { ?>
                                                                <option><?php echo $cole1['nombre_colegiado']; ?></option>

                                                            <?php }
                                                        }
                                                        ?>
                                                        </select>

                                                    </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Ingresar Codigo</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="codigo">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <label>Date:</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="fecha"/>
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Seleccione Estado</label>
                                                        <select class="form-control select2" style="width: 100%;" id="estado">
                                                        <option selected="selected" disabled value="0">Seleccione una opcion</option>
                                                        <?php
                                                        $esta=mostrarestado();
                                                        if($esta->num_rows)
                                                        {
                                                            foreach ($esta as $esta1) { ?>
                                                                <option><?php echo $esta1['nombre_estado']; ?></option>

                                                            <?php }
                                                        }
                                                        ?>
                                                        </select>

                                                    </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card card-outline card-info">
                                                    <div class="card-header">
                                                    <h3 class="card-title">
                                                    <small>INGRESAR CONTENIDO DE LA AGENDA</small> 
                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                        <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                        <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body pad">
                                                    <div class="mb-3">
                                                        <textarea class="textarea" placeholder="Place some text here"
                                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="contenido"></textarea>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            

                                        </div>
                                        <div class="row justify-content-end" >
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tipoacta" value="crearacta">
                                            <button type="submit" class="btn btn-block btn-outline-info">Registrar</button>
                                            </div>
                                        </div>
                                    </form>
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
