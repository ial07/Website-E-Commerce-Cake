<!DOCTYPE html>
<html lang="en">
<?php
include "admin/components/koneksi.php";
?>

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/icons/favicon2.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Masukkan username yang valid">
                        <input class="input100" type="text" name="register_username">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Masukkan Nama Lengkap</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Masukkan email yang valid">
                        <input class="input100" type="text" name="register_email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Masukkan Email</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password tidak valid">
                        <input class="input100" type="password" name="register_password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Masukkan Password</span>
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
                        <button name="register" class="login100-form-btn">
                            Daftar
                        </button>
                    </div>


                    <div class="text-center p-t-46 p-b-20">
                        <a href="login.php">Login</a>
                    </div>

                </form>

                <a href="index.php" class="login100-more" style="background-image: url('assets/img/home/login-4.jpg');">
                </a>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="assets/js/main2.js"></script>

</body>

</html>
<?php
if (isset($_POST['register'])) {
    $register_username =  $_POST['register_username'];
    $register_email =  $_POST['register_email'];
    $register_password =  $_POST['register_password'];

    $register = $koneksi->query("INSERT INTO tb_register(register_username, register_email, register_password) VALUES ('$register_username','$register_email','$register_password')");


    if ($register) {
        echo "
        <script>alert('Register Berhasil')</script>
        <script>window.location='login.php'</script>
        ";
    } else {
        echo "
        <script>alert('Register Gagal')</script>
        <script>window.location='register.php'</script>
        ";
    }
}
?>x`