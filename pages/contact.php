    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Contact<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="contact_nama" placeholder="Nama">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" name="contact_email" placeholder="E-mail">
                                <textarea name="contact_pesan" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-lg-12 text-right">
                                <button type="submit" name="simpan">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="contact-widget">
                        <div class="cw-item">
                            <h5>Pemilik</h5>
                            <ul>
                                <li>Yanti</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>Lokasi</h5>
                            <ul>
                                <li>Jl. Fatmawati, Desa Ujung padang</li>
                                <li>Kab. Muko-Muko, Bengkulu</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>No Hp</h5>
                            <ul>
                                <li>+62 81363884574</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>MAPS</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.897660840134!2d101.11315705872195!3d-2.5731938999999784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e329132db33a53d%3A0x15e0a06eb7810077!2sToko%20kue%20yanti%20mukomuko!5e0!3m2!1sid!2sid!4v1623742384117!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
    <?php
    if (isset($_POST['simpan'])) {
        $contact_nama =  $_POST['contact_nama'];
        $contact_email =  $_POST['contact_email'];
        $contact_pesan =  $_POST['contact_pesan'];

        $simpan = $koneksi->query("INSERT INTO tb_contact(contact_nama, contact_email, contact_pesan) VALUES ('$contact_nama','$contact_email','$contact_pesan')");


        if ($simpan) {
            echo "
        <script>alert('Pesan Terkirim')</script>
        <script>window.location='?page=pages/contact'</script>
        ";
        } else {
            echo "
        <script>alert('Pesan Tidak Terkirim')</script>
        <script>window.location='?page=pages/contact'</script>
        ";
        }
    }
    ?>