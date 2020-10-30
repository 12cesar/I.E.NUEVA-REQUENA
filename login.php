<?php
    session_start();
    include_once 'inc/templates/header.php';
    if (isset($_GET['cerrar_sesion'])) {
      $_SESSION=array();
    }
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>I.E.N.R</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar Sesion</p>

      <form id="formlogin" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" id="usua">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-4">
            
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <input type="hidden" name="" id="tipolog" value="login">
            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
