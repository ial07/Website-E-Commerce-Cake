<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM tb_produk WHERE produk_id = '$id'")->fetch_object();
?>

<!-- Page Add Section Begin -->
<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-breadcrumb">
                    <h2>Detail Produk<span>.</span></h2>
                    <a href="#">Beranda</a>
                    <a href="#">Detail Produk</a>
                </div>
            </div>
            <div class="col-lg-8">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->

<!-- Product Page Section Beign -->
<section class="product-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-slider owl-carousel">
                    <div class="product-img">
                        <figure>
                            <img style="" src="admin/img/produk/<?php echo $data->produk_foto ?>" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="product-content">
                        <input type="hidden" name="produk_id">
                        <h2><?php echo $data->produk_nama ?></h2>
                        <div class="pc-meta">
                            <h5>Rp. <?php echo number_format($data->produk_harga) ?></h5>
                            <!-- <?php var_dump($_SESSION['register']); ?> -->
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <p><?php echo $data->produk_detail ?></p>
                        <ul class="tags">
                            <li><span>Stok : </span><?php echo $data->produk_stok ?></li>
                            <li><span>Kategori : </span><?php echo $data->produk_kat ?></li>
                        </ul>
                        <div class="product-quantity">
                            <div class="pro-qty">
                                <input type="text" value="1" name="keranjang_jumlah">
                            </div>
                        </div>
                        <button type="submit" name="simpan" class="primary-btn pc-btn">Tambah Keranjang</button>
                </form>

                <?php
                if (isset($_POST['simpan'])) {
                    $id = $data->produk_id;
                    $register_id = $_SESSION['register']['register_id'];
                    $keranjang_nama = $data->produk_nama;
                    $keranjang_harga = $data->produk_harga;
                    $keranjang_jumlah = $_POST['keranjang_jumlah'];
                    $keranjang_foto =  $data->produk_foto;
                    $lokasi_foto =  $data->produk_foto['tmp_name'];

                    //gantinamafoto

                    $file_name = explode('.', $keranjang_foto);
                    $nama_file = end($file_name);
                    $file_ext = strtolower($nama_file);
                    $nama_file = date('YmdHis') . "_" . substr(uniqid('', true), -5) . "." . $file_ext;


                    move_uploaded_file($lokasi_foto, "admin/img/keranjang/$nama_file");

                    $simpan = $koneksi->query("INSERT INTO tb_keranjang(register_id,keranjang_nama, keranjang_harga, keranjang_jumlah, keranjang_foto, produk_id) VALUES ('$register_id','$keranjang_nama', '$keranjang_harga', '$keranjang_jumlah', '$nama_file','$id')");


                    if ($simpan) {
                        echo "
        <script>window.location='?page=pages/keranjang'</script>
        ";
                    } else {
                        echo "
        <script>alert('Tambah Keranjang Gagal')</script>
        <script>window.location='?page=pages/keranjang'</script>
        ";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>
</section>


<!-- Product Page Section End -->