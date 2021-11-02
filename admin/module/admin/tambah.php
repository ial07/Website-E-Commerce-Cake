<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Admin</li>
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

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="admin_nama">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="admin_email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="admin_password">
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="admin_foto">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
                </form>


            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->
<?php
if (isset($_POST['simpan'])) {
    $admin_nama =  $_POST['admin_nama'];
    $admin_email =  $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $admin_foto =  $_FILES['admin_foto']['name'];
    $lokasi_foto =  $_FILES['admin_foto']['tmp_name'];

    //gantinamafoto

    $file_name = explode('.', $admin_foto);
    $nama_file = end($file_name);
    $file_ext = strtolower($nama_file);
    $nama_file = date('YmdHis') . "_" . substr(uniqid('', true), -5) . "." . $file_ext;

    move_uploaded_file($lokasi_foto, "img/admin/$nama_file");

    $simpan = $koneksi->query("INSERT INTO tb_admin(admin_toko, admin_email, admin_password, admin_foto) VALUES ('$admin_nama', '$admin_email', '$admin_password', '$nama_file')");


    if ($simpan == true) {
        echo "
        <script>alert('Tambah Data Berhasil')</script>
        <script>window.location='index.php?page=module/admin/index';</script>
        ";
    } else {
        echo "
        <script>alert('Tambah Data Gagal')</script>
        <script>window.location='index.php?page=module/admin/index';</script>
        ";
    }
}
?>