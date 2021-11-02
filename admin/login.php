<?php
include "components/koneksi.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../assets/img/icons/favicon2.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST">
                    <center>
                        <img src="../assets/img/user.png" width="250px" height="150px">
                    </center>
                    <br><br>
                    <span class="login100-form-title p-b-43">
                        Login Administrator
                    </span>
                    <br>

                    <div class="wrap-input100 validate-input" data-validate="Email tidak valid">
                        <input class="input100 email" type="text" name="admin_email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password tidak valid">
                        <input class="input100 pass" type="password" name="admin_password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn buton" name="login_admin">
                            Login
                        </button>
                    </div>

                </form>

                <?php if (isset($_POST['login_admin'])) {

                    $admin_email           = $_POST['admin_email'];
                    $admin_password         = md5($_POST['admin_password']);



                    $cek =  $koneksi->query("SELECT * FROM tb_admin WHERE admin_email = '$admin_email' AND admin_password  = '$admin_password '");

                    $pecah = $cek->fetch_assoc();
                    $validasi = $cek->num_rows;

                    if ($validasi >= 1) {

                        $_SESSION['admin'] = $pecah;

                        echo   "<script>
                        alert('Anda Berhasil Login');
                        window.location='index.php';
                        </script>";
                    } else {
                        echo   "<script>
                        alert('Password Salah, Silahkan Login Lagi');
                        window.location='login.php';
                        </script>";
                    }
                } ?>
                <a href="index.php" class="login100-more" style="background-image: url('../assets/img/home/login-4.jpg');">
                </a>
            </div>
        </div>
    </div>
    <script src="app.js"></script>

    <!--===============================================================================================-->
    <script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/vendor/bootstrap/js/popper.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/js/main2.js"></script>

</body>

</html>