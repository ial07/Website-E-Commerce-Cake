    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Checkout<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->
    <?php $total = $_SESSION['total']; ?>
    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form method="POST" class="checkout-form">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Data Pembeli</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Nama</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="checkout_nama">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Alamat Lengkap</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="checkout_alamat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">No Hp</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="checkout_nohp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">No Rek</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="checkout_norek">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Nama Rek</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="checkout_namarek">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Transfer ke Bank</p>
                            </div>
                            <div class="col-lg-10">
                                <select class="cart-select country-usa" name="checkout_transfer">
                                    <option>BRI - 050401000239300</option>
                                    <option>MANDIRI - 0700001855555</option>
                                    <option>BNI - 0098888819</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="order-table">
                            <div class="cart-item">
                                <center><br>
                                    <h4>CheckOut</h4>
                                </center>
                                <br><br><br><br>
                                <h3>Total Bayar</h3>
                                <h4><b>Rp. <?php echo number_format($total) ?></b></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                            <button type="submit" name="simpan">Checkout Sekarang</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->
    <?php
    if (isset($_POST['simpan'])) {
        $_SESSION['info']['nama'] =  $_POST['checkout_nama'];
        $_SESSION['info']['alamat'] =  $_POST['checkout_alamat'];
        $_SESSION['info']['nohp'] =  $_POST['checkout_nohp'];
        $_SESSION['info']['norek'] =  $_POST['checkout_norek'];
        $_SESSION['info']['nmrek'] =  $_POST['checkout_namarek'];
        $_SESSION['info']['tf'] =  $_POST['checkout_transfer'];
        $_SESSION['info']['tot'] =  $total;

        echo "
         <script>alert('Checkout Berhasil, Silahkan Upload Bukti Bayar')</script>
         <script>window.location='?page=pages/checkout1'</script>
         ";
    }
    ?>