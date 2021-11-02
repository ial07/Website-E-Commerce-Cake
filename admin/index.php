<?php

include "components/koneksi.php";
session_start();

if (empty($_SESSION['admin'])) {
  echo "<script>
  alert('Silahkan Login Terlebih Dahulu !');
  window.location='login.php';
  </script>";
}

?>
<?php
include "components/header.php";
?>

<?php
include "components/menu.php"
?>

<div class="content-wrapper">

  <?php
  include "content.php"
  ?>

</div>

<?php
include "components/footer.php"
?>