<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM tb_admin WHERE admin_id = '$id'")->fetch_array();

?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Data Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Data Admin</li>
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
                        <input type="text" class="form-control" name="admin_nama" value="<?php echo $data['admin_toko'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>

                        <input type="email" class="form-control" name="admin_email" value="<?php echo $data['admin_email'] ?>">
                    </div>

                    <div class=" form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" value="<?php echo $data['admin_password'] ?>" name="admin_password">
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <br>
                        <img src="img/admin/<?php echo $data['admin_foto'] ?>" alt="" class="text-center" style="width: 100px; height: 100px;">
                        <input type="file" class="form-control" name="admin_foto">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
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
    $admin_id = $id;

    //ganti pass jadi md5
    $password = $admin_password;

    $file_name = explode('.', $admin_foto);
    $nama_file = end($file_name);
    $file_ext = strtolower($nama_file);
    $nama_file = date('YmdHis') . "_" . substr(uniqid('', true), -5) . "." . $file_ext;


    //cari foto
    $gambar = $koneksi->query("SELECT admin_foto FROM tb_admin WHERE admin_id = '$admin_id'")->fetch_array();

    //Jika user tidak edit password dan foto
    if ($admin_password == null && $admin_foto == null) {
        $simpan = $koneksi->query("UPDATE tb_admin SET admin_nama = '$admin_nama',
                                                      admin_email = '$admin_email' 
                                                   WHERE admin_id = '$admin_id'");
    }

    //Jika user tidak edit password tapi edit foto
    elseif ($admin_password == null && $admin_foto != null) {
        move_uploaded_file($lokasi_foto, "img/admin/$nama_file");

        if (!empty($gambar['admin_foto'])) {
            unlink('img/admin/' . $gambar['admin_foto']);
        }

        $simpan = $koneksi->query("UPDATE tb_admin SET admin_toko = '$admin_nama',
                                                      admin_email = '$admin_email',
                                                       admin_foto = '$nama_file' 
                                                   WHERE admin_id = '$admin_id'");
    }

    //Jika user edit password tapi tidak edit foto
    elseif ($admin_password != null && $admin_foto == null) {
        $simpan = $koneksi->query("UPDATE tb_admin SET admin_toko = '$admin_nama',
                                                      admin_email = '$admin_email',
                                                   admin_password = '$password' 
                                                   WHERE admin_id = '$admin_id'");
    }
    // Jika user edit password dan juga foto
    elseif ($admin_password != null && $admin_foto != null) {
        move_uploaded_file($lokasi_foto, "img/admin/$nama_file");

        if (!empty($gambar['admin_foto'])) {
            unlink('img/admin/' . $gambar['admin_foto']);
        }
        $simpan = $koneksi->query("UPDATE tb_admin SET admin_toko = '$admin_nama',
                                                      admin_email = '$admin_email',
                                                   admin_password = '$password', 
                                                       admin_foto = '$nama_file'
                                                   WHERE admin_id = '$admin_id'");
    }

    if ($simpan) {
        echo "
        <script>alert('Edit Data Berhasil')</script>
        <script>window.location='index.php?page=module/admin/index';</script>
        ";
    } else {
        echo "
        <script>alert('Edit Data Gagal')</script>
        <script>window.location='index.php?page=module/admin/index';</script>
        ";
    }
}
?>