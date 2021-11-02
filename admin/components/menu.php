<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <br>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="img/admin/<?php echo $_SESSION['admin']['admin_foto'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['admin']['admin_toko'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="?page=module/admin/index" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=module/produk/index" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Produk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=module/customer/index" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Customer
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=module/konfir/index" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Konfirmasi
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="?page=module/pesan/index" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a href="?page=module/pesan/index" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pesan
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>