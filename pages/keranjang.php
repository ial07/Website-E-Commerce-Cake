<?php
if (empty($_SESSION['register'])) {
    echo "<script>
                        alert('Login Terlebih Dahulu')
                        window.location='login.php'
                        </script>";
}
?>

<!-- Page Add Section Begin -->
<section class="page-add cart-page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Keranjang<span>.</span></h2>
                    <a href="#">Beranda</a>
                    <a href="#">Keranjang</a>
                </div>
            </div>
            <div class="col-lg-8">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->
<!-- Cart Page Section Begin -->
<div class="cart-page">
    <div class="container">
        <div class="cart-table">
            <table>
                <thead>
                    <tr>
                        <th class="product-h">Produk</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Sub Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    @$iduser = $_SESSION['register']['register_id'];
                    $ambil = $koneksi->query("SELECT * From tb_keranjang Inner Join tb_produk On tb_keranjang.produk_id = tb_produk.produk_id Inner Join tb_register On tb_keranjang.register_id = tb_register.register_id WHERE tb_keranjang.register_id = '$iduser'");
                    while ($pecah = $ambil->fetch_object()) {

                        $subtotal = $pecah->keranjang_harga * $pecah->keranjang_jumlah;

                    ?>
                        <tr>
                            <td class="product-col">
                                <img src="admin/img/produk/<?= $pecah->produk_foto ?>" alt="">
                            </td>
                            <td>
                                <div class="p-title">
                                    <h5><?= $pecah->keranjang_nama ?></h5>
                                </div>
                            </td>
                            <td class="price-col">Rp. <?= number_format($pecah->keranjang_harga) ?></td>
                            <td class="price-col">
                                <?= $pecah->keranjang_jumlah ?>
                            </td>
                            <td class="price-col">Rp. <?php echo number_format($subtotal) ?></td>
                            <td><a href="?page=pages/hapusker&idhapus=<?= $pecah->keranjang_id ?>"><img src="admin/img/x.svg" width="29px" alt=""></a></td>
                        </tr>
                        <?php
                        @$total += $subtotal;
                        ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="shopping-method">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="total-info">
                        <div class="total-table">
                            <table>

                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th class="total-cart">Total Belanja</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="total"></td>
                                        <td class="sub-total"></td>
                                        <td class="shipping"></td>
                                        <td class="total-cart-p">Rp. <?php echo number_format(@$total) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a href="?page=pages/checkout" class="primary-btn chechout-btn">Checkout</a>
                            </div>
                            <?php $_SESSION['total'] = @$total; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Cart Page Section End -->