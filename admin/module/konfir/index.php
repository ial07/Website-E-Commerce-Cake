<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Konfirmasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Konfirmasi</li>
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
                Daftar Konfirmasi
            </div>
            <div class="card-body">
                <table class="table table-dark" id="example2">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">No Rekening</th>
                            <th scope="col">Nama Rekening</th>
                            <th scope="col">Total Bayar</th>
                            <th scope="col">Bukti Transfer</th>
                            <th scope="col">Status</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_checkout");
                        foreach ($ambil as $a => $pecah) {
                        ?>
                            <tr>
                                <th><?php echo $a + 1 ?></th>
                                <th><?php echo $pecah['nama'] ?></th>
                                <th><?php echo $pecah['alamat'] ?></th>
                                <th><?php echo $pecah['nohp'] ?></th>
                                <th><?php echo $pecah['norek'] ?></th>
                                <th><?php echo $pecah['narek'] ?></th>
                                <th><?php echo $pecah['total'] ?></th>
                                <th><img src="../assets/upload/<?php echo $pecah['bukti'] ?>" width="100px" height="100px"></th>
                                <td>

                                    <?php

                                    if ($pecah['status'] == 'konfirmasi') { ?>
                                        <form method="post">
                                            <button name="konfirmasi" class="btn btn-primary">Konfirmasi</button>
                                        </form>

                                    <?php
                                        if (isset($_POST['konfirmasi'])) {
                                            $id = $pecah['checkout_id'];

                                            $update = $koneksi->query("UPDATE tb_checkout SET status = 'terima' WHERE checkout_id = '$id'");

                                            echo "
                                            <script>alert('Konfirmasi Berhasil')
                                            window.location.reload();
                                            </script>
                                            
                                            ";
                                        }
                                    } elseif ($pecah['status'] == 'terima') {
                                        echo "<h5 style='color:yellow;'>Sedang Menunggu Konfirmasi Dari Pelanggan!</h5>";
                                    } else {
                                        echo "<h5 style='color:green;'>Order Selesai!</h5>";
                                    } ?>
                                </td>
                                <a href="index.php?page=module/konfir/hapus&id=<?= $pecah['checkout_id'] ?>" class="btn btn-danger">Hapus</a>


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