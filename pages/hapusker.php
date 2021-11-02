<?php
$id = $_GET['idhapus'];

$datagambar  = $koneksi->query("SELECT keranjang_foto FROM tb_keranjang where keranjang_id = '$id'")->fetch_assoc(); //berguna untuk mengambil gambar 
$foto = $datagambar['keranjang_foto'];
unlink("admin/img/produk/" . $foto); //UNLINK berguna untuk menghapus photo di folder  

$hapus = $koneksi->query("DELETE FROM tb_keranjang where keranjang_id = '$id'");

if ($hapus == true) {
    echo "<script>
        alert('Item berhasil dihapus') 
        window.location='?page=pages/keranjang'</script>";
} else {
    echo "<script>
        alert('Item gagal dihapus') 
        window.location='page=pages/keranjang'</script>";
}
