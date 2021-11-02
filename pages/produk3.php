<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Latest Product Begin -->

<section class="latest-products spad">
    <div class="container">
        <div class="product-filter">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Produk</h2>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav justify-content-center nav-pills mb-5">
            <li class="nav-item">
                <a class="nav-link" href="?page=pages/produk">Semua Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="?page=pages/produk1">Kue Wedding</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=pages/produk2">Kue Ulang Tahun</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="?page=pages/produk3">Kue Event</a>
            </li>
        </ul>
        <div class="row" id="product-list">
            <?php
            $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE produk_kat = 'Kue Event'");
            while ($pecah = $ambil->fetch_object()) {
            ?>

                <div class="col-lg-3 col-sm-6 mix all accesories bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="?page=pages/detailproduk&id= <?= $pecah->produk_id ?> "><img style="width:100%; height:280px" src="admin/img/produk/<?php echo $pecah->produk_foto ?>" alt=""></a>
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