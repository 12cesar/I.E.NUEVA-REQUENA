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
                                    <h3 class="card-title">Registrar Nuevo Usuario</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formusuario" method="post" >
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Ingresar Nombre</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="nombre">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Ingresar Apellido</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="apellido">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Crear Usuario</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="usuario">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Crear Contraseña</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="password">
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <div class="row justify-content-end" >
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tipousua" value="crearusuario">
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
