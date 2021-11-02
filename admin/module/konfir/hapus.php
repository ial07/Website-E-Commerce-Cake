<?php
$id = $_GET['id'];

$hapus = $koneksi->query("DELETE FROM tb_checkout WHERE checkout_id='$id'");
if ($hapus) {
    echo "<script>
    alert('Data sukses dihapus');
    window.location='index.php?page=module/konfir/index';
    </script>";
} else {
    echo "<script>
    alert('Data tidak dihapus');
    window.location='index.php?page=module/konfir/index';
    </script>";
}
