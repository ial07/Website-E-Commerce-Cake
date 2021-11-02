<?php
session_start();
?>
<html>

<head>
    <title>Faktur Pembayaran</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }

        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body style='font-family:tahoma; font-size:8pt;'>
    <center>
        <?php
        //var_dump($_SESSION['info']);
        ?>
        <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                <br><br>
                <h3>Yanti</h3>
                <h4><i>Cake Decoration</i></h4><br><br><br>
                <!-- <span style='font-size:12pt'><b>Semata Wayang</b></span></br><br> -->
                Nama Customer : <?= $_SESSION['info']['nama'] ?></br>
                Alamat : <?= $_SESSION['info']['alamat'] ?>
            </td>
        </table>
        <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                Nohp : <?= $_SESSION['info']['nohp'] ?></br>
                No Rek : <?= $_SESSION['info']['norek'] ?><br><br>
                No Rek Tujuan : <span><b><?= $_SESSION['info']['tf'] ?></b></span>
            </td>
        </table>
        <br><br>
        <table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>

            <tr align='center'>
                <td width='60%'>Nama Barang</td>
                <td width='20%'>Harga</td>
                <td width='7%'>Jumlah</td>
                <td width='20%'>Sub Total</td>
                <?php
                include "../admin/components/koneksi.php";
                @$iduser = $_SESSION['register']['register_id'];
                $ambil = $koneksi->query("SELECT * From tb_keranjang Inner Join tb_produk On tb_keranjang.produk_id = tb_produk.produk_id Inner Join tb_register On tb_keranjang.register_id = tb_register.register_id WHERE tb_keranjang.register_id = '$iduser'");
                while ($pecah = $ambil->fetch_object()) {

                    $subtotal = $pecah->keranjang_harga * $pecah->keranjang_jumlah;
                ?>
            <tr>
                <td><?= $pecah->keranjang_nama ?></td>
                <td><?= $pecah->keranjang_harga ?></td>
                <td><?= $pecah->keranjang_jumlah ?></td>
                <td style='text-align:right'><?php echo $subtotal ?></td>
            <tr>
            <?php } ?>
            <td colspan='3'>
                <div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div>
            </td>
            <td style='text-align:right'><?= $_SESSION['info']['tot'] ?></td>
            </tr>
        </table>
        <br><br>

        <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                Catatan :</br>
                Harap melakukan pembayaran ke no rekening yang telah ditentukan<br>
                Bukti pembayaran kirim ke kontak whatsapp : <span><b>081363884574</b></span><br>
            </td>
        </table>

    </center>
    <!-- <?php var_dump($_SESSION['info']); ?> -->
</body>

</html>

<script>
    window.print();
</script>