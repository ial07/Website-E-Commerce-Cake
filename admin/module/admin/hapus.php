<?php
$id = $_GET['id'];

//cari nama gambar
$cari = $koneksi->query("SELECT admin_foto FROM tb_admin WHERE admin_id ='$id'")->fetch_array();

if (!empty($cari['admin_foto'])) {
    unlink('img/admin/' . $cari['admin_foto']);
}
$hapus = $koneksi->query("DELETE FROM tb_admin WHERE admin_id='$id'");
if ($hapus) {
    echo "<script>
    alert('Data sukses dihapus');
    window.location='index.php?page=module/admin/index';
    </script>";
} else {
    echo "<script>
    alert('Data tidak dihapus');
    window.location='index.php?page=module/admin/index';
    </script>";
}
