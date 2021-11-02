<?php
$id = $_GET['id'];

//cari nama gambar
$cari = $koneksi->query("SELECT produk_foto FROM tb_produk WHERE produk_id ='$id'")->fetch_array();

if (!empty($cari['produk_foto'])) {
    unlink('img/produk/' . $cari['produk_foto']);
}
$hapus = $koneksi->query("DELETE FROM tb_produk WHERE produk_id='$id'");
if ($hapus) {
    echo "<script>
    alert('Data sukses dihapus');
    window.location='index.php?page=module/produk/index';
    </script>";
} else {
    echo "<script>
    alert('Data tidak dihapus');
    window.location='index.php?page=module/produk/index';
    </script>";
}
