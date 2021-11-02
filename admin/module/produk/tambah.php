<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Produk</li>
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
                Data Produk
            </div>
            <div class="card-body">

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="produk_nama">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="produk_harga">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="produk_stok">
                    </div>

                    <div class="form-group">
                        <label>Detail</label>
                        <textarea name="produk_detail" id="editor1" cols="30" rows="10"></textarea>
                        <script>
                            CKEDITOR.replace('editor1');
                        </script>
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="produk_foto">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kat" class="form-control">
                            <option value="Kue Wedding">Kue Wedding</option>
                            <option value="Kue Ulang Tahun">Kue Ulang Tahun</option>
                            <option value="Kue Event">Kue Event</option>
                        </select>
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
    $produk_nama =  $_POST['produk_nama'];
    $produk_harga =  $_POST['produk_harga'];
    $produk_stok =  $_POST['produk_stok'];
    $produk_detail =  $_POST['produk_detail'];
    $kat =  $_POST['kat'];
    $produk_foto =  $_FILES['produk_foto']['name'];
    $lokasi_foto =  $_FILES['produk_foto']['tmp_name'];

    //gantinamagambar   

    $file_name = explode('.', $produk_foto);
    $nama_file = end($file_name);
    $file_ext = strtolower($nama_file);
    $nama_file = date('YmdHis') . "_" . substr(uniqid('', true), -5) . "." . $file_ext;

    move_uploaded_file($lokasi_foto, "img/produk/$nama_file");

    $simpan = $koneksi->query("INSERT INTO tb_produk(produk_nama, produk_harga, produk_stok, produk_detail, produk_foto, produk_kat) VALUES ('$produk_nama', '$produk_harga', '$produk_stok', '$produk_detail', '$nama_file', '$kat')");


    if ($simpan) {
        echo "
        <script>alert('Tambah Data Berhasil')</script>
        <script>window.location='index.php?page=module/produk/index';</script>
        ";
    } else {
        echo "
        <script>alert('Tambah Data Gagal')</script>
        <script>window.location='index.php?page=module/produk/index';</script>
        ";
    }
}
?>