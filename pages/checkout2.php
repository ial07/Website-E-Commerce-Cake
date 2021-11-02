    <!-- Page Add Section Begin -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Konfirmasi<span>.</span></h2>
                </div>
            </div>
            <div class="col-lg-8">
            </div>
        </div>
    </div>
    <!-- Page Add Section End -->
    <?php
    $id = $_SESSION['id'];
    $data = $koneksi->query("SELECT * FROM tb_checkout WHERE checkout_id = '$id'")->fetch_assoc();
    ?>
    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <?php
            if ($data['status'] == 'konfirmasi') { ?>

                <h4>Order Sedang Dikonfirmasi Oleh Admin, Silahkan Tunggu!</h4>
                <img src="assets/img/home/wait.gif" style="margin-left: 500px">
            <?php  } elseif ($data['status'] == 'terima') { ?>
                <h4>Order Telah Dikonfirmasi & Dalam Proses Pengiriman.</h4>
                <img src="assets/img/home/kurir.gif" style="margin-left: 400px">
                <h4 class="mt-3">Klik Tombol Dibawah ini, Jika Barang Telah Diterima!</h4>
                <form method="POST" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-success mt-3" name="save">Barang Sudah Diterima</button>
                </form>
            <?php } elseif ($data['status'] == 'sukses') { ?>
                <img src="assets/img/home/tengkiu.gif">
                <h4>Telah Berbelanja Di Toko Yanti Cake Decoration!</h4>
            <?php } ?>
        </div>
    </section>
    <!-- Cart Total Page End -->
    <?php
    if (isset($_POST['save'])) {


        $simpan = $koneksi->query("UPDATE `tb_checkout` SET status = 'sukses' WHERE checkout_id = '$id'");


        if ($simpan == true) {
            echo "
        <script>window.location='?page=pages/checkout2';</script>
        ";
        } else {
            echo "
        <script>window.location='?page=pages/checkout1';</script>
        ";
        }
    }
    ?>