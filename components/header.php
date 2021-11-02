    <!DOCTYPE html>
    <html lang="zxx">

    <body>

        <head>
            <meta charset="UTF-8">
            <meta name="description" content="Yoga Studio Template">
            <meta name="keywords" content="Yoga, unica, creative, html">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Yanti Cake Decoration</title>

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

            <!-- Css Styles -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
            <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
            <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
            <link rel="stylesheet" href="assets/css/style.css" type="text/css">


        </head>


        <header class="header-section">
            <div class="container-fluid">
                <div class="inner-header">
                    <div class="logo">
                        <a href="index.php">
                            <b>
                                <h3>Yanti</h3>
                                <h5 style="margin-left: 25px;"><i>Cake Decoration</i></h5>
                            </b>

                        </a>
                    </div>
                    <?php if (!empty($_SESSION['register'])) { ?>
                        <!-- <div class="user-access">
                            <a href="logout.php">Log out</a>
                        </div> -->

                        <nav class="main-menu mobile-menu">
                            <ul>
                                <li><a class="" href="index.php">Beranda</a></li>
                                <li><a href="?page=pages/produk">Produk</a>
                                    <ul class="sub-menu">
                                        <?php if (!empty($_SESSION['info'])) { ?>
                                            <li><a href="?page=pages/checkout1">Upload Bukti</a></li>
                                        <?php } else { ?>
                                            <li><a href="?page=pages/keranjang">Keranjang</a></li>
                                            <li><a href="?page=pages/checkout">Check out</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a href="?page=pages/contact">Contact</a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><a href="#">Selamat Datang&nbsp;&nbsp; <b><?php echo $_SESSION['register']['register_username'] ?></b></a>
                                    <ul class="sub-menu">
                                        <li><a href="logout.php">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    <?php } else { ?>
                        <div class="user-access">
                            <a href="login.php">Login / Register</a>
                        </div>

                        <nav class="main-menu mobile-menu">
                            <ul>
                                <li><a class="" href="index.php">Beranda</a></li>

                                <li><a href="?page=pages/produk">Produk</a></li>
                                <li><a href="?page=pages/contact">Contact</a></li>
                            </ul>
                        </nav>
                    <?php } ?>
                </div>
            </div>
        </header>