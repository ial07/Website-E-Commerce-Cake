<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
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
                <a href="?page=module/produk/tambah" class="btn btn-primary my-4">Tambah Produk</a>
                <table class="table table-dark" id="example1">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_produk");
                        foreach ($ambil as $a => $pecah) {
                        ?>
                            <tr>
                                <th><?php echo $a + 1 ?></th>
                                <th><?php echo $pecah['produk_nama'] ?></th>
                                <th>Rp. <?php echo number_format($pecah['produk_harga']) ?></th>
                                <th><?php echo $pecah['produk_stok'] ?></th>
                                <th><?php
                                    $kalimat = $pecah['produk_detail'];
                                    $cetak = substr($kalimat, 0, 50);
                                    echo $cetak;
                                    ?></th>
                                <td>
                                    <img src="img/produk/<?php echo $pecah['produk_foto'] ?>" alt="" style="width: 100px; height: 100px;">
                                </td>
                                <th><?php echo $pecah['produk_kat'] ?></th>
                                <td>
                                    <a href="index.php?page=module/produk/edit&id=<?= $pecah['produk_id'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="index.php?page=module/produk/hapus&id=<?= $pecah['produk_id'] ?>" class="btn btn-danger">Hapus</a>
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