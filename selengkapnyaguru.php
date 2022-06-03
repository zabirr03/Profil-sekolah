<!DOCTYPE html>
<html lang="en">

<head>
    <title>Guru</title>
    <link rel="icon" href="asset/frontend/img/logo1.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="asset/frontend/fonts/fontawesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/fonts/pe-icon/pe-icon.css">
    <!-- Vendors-->
    <link rel="stylesheet" type="text/css" href="asset/frontend/vendors/bootstrap/grid.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="asset/frontend/vendors/swiper/swiper.css">
    <!-- App & fonts-->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Oswald:400,600|Playfair+Display:400i">
    <link rel="stylesheet" type="text/css" href="asset/frontend/css/main.css">
</head>

<body>
    <header class="header header-fixheight header--fixed">
        <div class="container">
            <div class="header__inner">
                <div class="header-logo">
                    <h1 style="color : white">SMKN 1 SINTOGA</h1>
                </div>

                <!-- raising-nav -->
                <nav class="raising-nav">

                    <!-- raising-menu -->
                    <ul class="raising-menu">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="backend/login.php">Login</a>
                        </li>
                    </ul><!-- raising-menu -->

                    <div class="navbar-toggle"><i class="fa fa-bars"></i></div>
                </nav><!-- End / raising-nav -->
            </div>
        </div>
    </header><!-- End / header -->
    <section class="md-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">

                    <!-- sec-title -->
                    <div class="sec-title sec-title__lg-title md-text-center">
                        <h2 class="sec-title__title">Guru</h2><span class="sec-title__divider"></span>
                    </div><!-- End / sec-title -->

                </div>
            </div>
            <style>
                table {
                    width: 100%;
                }
            </style>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Status/Mapel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        include 'koneksi.php';	
       	$sql = $koneksi ->query("SELECT * FROM guru");		
           foreach ($sql as $g => $guru) {
	?>
                    <tr>
                        <td align="center"><?= $g+1 ?></td>
                        <td align="center"><img src="backend/dokumentasi/guru/<?php echo $guru['gambar'] ?>" alt=""
                                width="170" height="20" /></td>
                        <td align="center"><?php echo $guru['nama'] ?></td>
                        <td align="center"><?php echo $guru['mapel'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
        </div>
    </section>
</body>

</html>