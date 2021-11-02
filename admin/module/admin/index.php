<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Admin</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                Data Admin
            </div>
            <div class="card-body">
                <a href="?page=module/admin/tambah" class="btn btn-primary my-4">Tambah Data</a>
                <table class="table table-dark" id="example1">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_admin");
                        foreach ($ambil as $a => $pecah) {
                        ?>
                            <tr>
                                <th><?php echo $a + 1 ?></th>
                                <th><?php echo $pecah['admin_toko'] ?></th>
                                <th><?php echo $pecah['admin_email'] ?></th>
                                <td>
                                    <img src="img/admin/<?php echo $pecah['admin_foto'] ?>" style="width: 100px; height: 100px;">
                                </td>
                                <td>
                                    <a href="index.php?page=module/admin/edit&id=<?= $pecah['admin_id'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="index.php?page=module/admin/hapus&id=<?= $pecah['admin_id'] ?>" class="btn btn-danger">Hapus</a>
                                </td>

                            </tr>

                        <?php } ?>


                    </tbody>
                </table>


            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->