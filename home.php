<!-- Search model end -->
<!-- Header Section Begin -->

<!-- Header Info Begin -->
<!-- Header End -->

<!-- Hero Slider Begin -->
<section class="hero-slider">
    <div class="hero-items owl-carousel">
        <div class="single-slider-item set-bg" data-setbg="assets/img/home/home.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="color: black;"><i>YANTI</i></h1>
                        <h2 style="color: black;"><i> Cake Decoration</i></h2>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Hero Slider End -->

<!-- Features Section Begin -->
<section class="features-section spad">
    <div class="features-ads">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-features-ads first">
                        <img src="assets/img/icons/f-delivery.png" alt="">
                        <h4>Pengiriman</h4>
                        <p>Hanya menerima pemesanan atau pengiriman dalam Kabupaten Muko-Muko</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-features-ads second">
                        <img src="assets/img/icons/coin.png" alt="">
                        <h4>Uang Kembali</h4>
                        <p>Apabila ada kerusakaan saat produk telah sampai ke tujuan</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-features-ads">
                        <img src="assets/img/icons/chat.png" alt="">
                        <h4>Customer Services</h4>
                        <p>Silahkan bertanya atau memberi kritik saran kepada toko kami</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Box -->
    <div class="features-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <div class="single-box-item first-box">
                        <img src="assets/img/home/cake1.JPG" height="600px">
                        <div class="box-text mt-5">
                            <h1 class="mt-5" style="color: white;">Decoration</h1>
                            <span class="trend-alert text-center">Terbaru</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-12">
                        <div class="single-box-item large-box">
                            <img src="assets/img/home/cake2.jpg" height="600px">
                            <div class="box-text"><br>
                                <h2>TERJAMIN</h2>
                                <span class="trend-alert">Produk Berkualitas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Latest Product Begin -->
<section class="latest-products spad">
    <div class="container">
        <div class="product-filter">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section- title">
                        <h2>Produk Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="product-list">
            <?php
            $ambil = $koneksi->query("SELECT * FROM tb_produk ORDER BY produk_id DESC LIMIT 4");
            while ($pecah = $ambil->fetch_object()) {
            ?>
                <div class="col-lg-3 col-sm-6 mix all dresses bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="?page=pages/detailproduk&id= <?= $pecah->produk_id ?> "><img style="width:100%; height:280px" src="admin/img/produk/<?php echo $pecah->produk_foto ?>" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <a href=" ?page=pages/detailproduk&id= <?= $pecah->produk_id ?> ">
                                <h6><?php echo $pecah->produk_nama ?></h6>
                            </a>
                            <p>Rp. <?php echo number_format($pecah->produk_harga) ?></p>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>
</section>

<!-- Latest Product End -->

<!-- Lookbok Section Begin -->
<section class=" lookbok-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="lookbok-left">
                    <div class="section-title">
                        <h2>Sejarah <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Singkat</h2>
                    </div>
                    <p>Yanti Cake Decoration adalah Toko yang menjual berbagai jenis cake seperti cake Ulang tahun, Wedding, dan event-event lainnya. Untuk Toko Yanti Cake Decoration beralamat di jalan Fatmawati, Desa Ujung Padang, Muko Muko, Bengkulu. <br> Toko didirikan pada tanggal 18 januri 2016, ibu yanti pertama kali memulai bisnisnya dari berjualan di sosial media karena banyak peminat dari kuenya sehingga ibu yanti mendirikan sebuah toko yang bernama Yanti Cake Decoration Muko Muko</p>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 mt-3">
                <div class="mt-5">
                    <img src="assets/img/home/seje.jpg" height="550px">
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br>
<!-- Lookbok Section End -->