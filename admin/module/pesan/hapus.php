<?php
$id = $_GET['id'];

$hapus = $koneksi->query("DELETE FROM tb_contact WHERE contact_id='$id'");
if ($hapus) {
    echo "<script>
    alert('Data sukses dihapus');
    window.location='index.php?page=module/pesan/index';
    </script>";
} else {
    echo "<script>
    alert('Data tidak dihapus');
    window.location='index.php?page=module/pesan/index';
    </script>";
}
