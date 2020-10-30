<body class="hold-transition sidebar-mini layout-footer-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
                    </div>
                </div>
            </form>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="img/icono7.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Administrador</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="img/icono5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['nombre'];?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="producto.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Registro Principal
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="crearactas.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Actas </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crearusuario.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="subcategoria.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Colegiados</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Mostrar Registro
                                    <i class="fas fa-angle-left right"></i>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="mostraracta.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mostrar Actas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mostrarusuario.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mostrar Usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mostrar Colegiados</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                        <a href="login.php?cerrar_sesion=true" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Cerrar Sesion</p>
                        </a>
                    </li>
                    </ul>
                    
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
