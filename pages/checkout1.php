 <div class="container mt-3">
     <div class="row">
         <div class="col-lg-4">
             <div class="page-breadcrumb">
                 <h2>Bukti Bayar<span>.</span></h2>
             </div>
         </div>
         <div class="col-lg-8">
         </div>
     </div>
 </div>

 <!-- Page Add Section End -->
 <!-- Cart Total Page Begin -->
 <section class="cart-total-page spad">
     <div class="container">
         <h4>Silahkan lakukan Upload Bukti Bayar Pada Form Berikut Ini!</h4>
         <form method="POST" enctype="multipart/form-data">
             <input type="file" class="form-control" name="admin_foto">
             <button type="submit" class="btn btn-success mt-3" name="save">Upload Bukti</button>
         </form>
     </div>
 </section>
 <!-- Cart Total Page End -->
 <?php
    if (isset($_POST['save'])) {
        $nama = $_SESSION['info']['nama'];
        $alamat = $_SESSION['info']['alamat'];
        $hp = $_SESSION['info']['nohp'];
        $norek = $_SESSION['info']['norek'];
        $narek = $_SESSION['info']['nmrek'];
        $total = $_SESSION['info']['tot'];
        $idreg = $_SESSION['register']['register_id'];

        $admin_foto =  $_FILES['admin_foto']['name'];
        $lokasi_foto =  $_FILES['admin_foto']['tmp_name'];

        //gantinamafoto

        $file_name = explode('.', $admin_foto);
        $nama_file = end($file_name);
        $file_ext = strtolower($nama_file);
        $nama_file = date('YmdHis') . "_" . substr(uniqid('', true), -5) . "." . $file_ext;

        move_uploaded_file($lokasi_foto, "assets/upload/$nama_file");

        $simpan = $koneksi->query("INSERT INTO `tb_checkout`(`nama`, `alamat`, `nohp`, `norek`, `narek`,`total`, `bukti`, `status`, `register_id`) VALUES ('$nama','$alamat','$hp','$norek','$narek','$total','$nama_file','konfirmasi','$idreg')");

        $last_id = $koneksi->insert_id;
        $_SESSION['id'] = $last_id;


        if ($simpan == true) {
            echo "
        <script>alert('Upload Bukti Berhasil!')</script>
        <script>window.location='?page=pages/checkout2';</script>
        ";
        } else {
            echo "
        <script>alert('Upload Bukti Gagal')</script>
        <script>window.location='?page=pages/checkout1';</script>
        ";
        }
    }
    ?>