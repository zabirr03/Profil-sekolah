<!DOCTYPE html>
<html>

<head>
	<title>SMKN 1 SINTOGA</title>
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
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
</head>

<body>
	<?php 
    		include 'koneksi.php';
            $sql1 = mysqli_query($koneksi, "SELECT * FROM tb_profile1");
            $isi = mysqli_fetch_array($sql1);
			$sql2 = mysqli_query($koneksi, "SELECT * FROM tb_profile2 ORDER BY id_pf DESC");
			$profil = mysqli_fetch_array($sql2);
			$sql3 = mysqli_query($koneksi, "SELECT * FROM visi_misi WHERE id_vm='1'");
		    $vm = mysqli_fetch_array($sql3);
			$sql4 = mysqli_query($koneksi,"SELECT * FROM guru WHERE id_guru LIMIT 3");		
			$guru = mysqli_fetch_array($sql4);
			$sql5 = mysqli_query($koneksi, "SELECT * FROM sejarah");
		    $sejarah = mysqli_fetch_array($sql5);
			$sql6 = mysqli_query($koneksi, "SELECT * FROM sarana_prasarana LIMIT 9");
			$sp = mysqli_fetch_array($sql6);
			$sql7 = mysqli_query($koneksi, "SELECT * FROM kontak");
			$kontak = mysqli_fetch_array($sql7);
            ?>

	<!-- preload -->
	<div class="preload" id="preload">
		<div class="cssload-spin-box"></div>
	</div><!-- End / preload -->

	<div class="page-wrap">

		<!-- header -->
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
							<li class="current"><a href="#id1">Home</a>
							</li>
							<li><a href="#id2">Profil</a>
							</li>
							<li><a href="#id3">Visi Misi</a>
							</li>
							<li><a href="#id4">Gallery</a>
							</li>
							<li><a href="#id5">Sejarah</a>
							</li>
							<li><a href="#id6">Guru</a>
							</li>
							<li><a href="#id7">Kontak</a>
							</li>
							<li><a href="backend/login.php">Login</a>
							</li>
						</ul><!-- raising-menu -->

						<div class="navbar-toggle"><i class="fa fa-bars"></i></div>
					</nav><!-- End / raising-nav -->
				</div>
			</div>
		</header><!-- End / header -->

		<!-- Content-->
		<div class="md-content">

			<!-- hero -->
			<hero class="hero" id="id1" style="background-color:#fff;">

				<!-- swiper swiper-container -->
				<div class="swiper swiper-container">
					<div class="swiper-wrapper">
						<div class="hero__wrapper">
							<div class="hero__inner">
								<div class="container">
									<img src="asset/frontend/img/SMK.png" alt="">
								</div>
							</div>
						</div>
						<div class="hero__wrapper">
							<div class="hero__inner">
								<div class="container">
									<img src="asset/frontend/img/labor.jpeg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination-custom"></div>
					<div class="swiper-button-custom">
						<div class="swiper-button-prev-custom"><i class="fa fa-angle-left"></i></div>
						<div class="swiper-button-next-custom"><i class="fa fa-angle-right"></i></div>
					</div>
				</div><!-- End / swiper swiper-container -->

			</hero><!-- End / hero -->


			<!-- cta-02 -->
			<div class="cta-02">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 ">
						</div>
						<div class="col-lg-3  md-text-right">
						</div>
					</div>
				</div>
			</div><!-- End / cta-02 -->


			<!-- Section -->
			<section class="md-section" id="id2" style="background-color:#fff;">
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<center>
								<img src="backend/dokumentasi/foto/<?php echo $isi['gambar'] ?>" alt=""
									style="width:800px; height:600px; border-radius: 100px" />
							</center>
							<div>
							</div><br>
							<div class="row">
								<div class="col-md-6">
									<!-- sec-title -->
									<div class="sec-title sec-title__lg-title">
										<h2 class="sec-title__title"><span><?php echo $isi['judul'] ?></span></h2>
										<span></span>
									</div><!-- End / sec-title -->

									<h3><?php echo $isi['akreditas'] ?></h3>
									<p><?php echo $isi['isi'] ?></p>

									<!-- sec-title -->

								</div><!-- End / sec-title -->
								<div class="col-md-6">
									<h2 style="color : #f0542c">PROFIL</h2>
									<p>NPSN :<span style="color : #f0542c"><?php echo $profil['npsn'] ?></span></p>
									<p>Status : <span style="color : #f0542c"><?php echo $profil['status'] ?></span></p>
									<p>Bentuk Kependidikan : <span
											style="color : #f0542c"><?php echo $profil['pendidikan'] ?></span></p>
									<p>Status kepemilikan : <span
											style="color : #f0542c"><?php echo $profil['kepemilikan'] ?></span></p>
									<p>SK Pendirian Sekolah : <span
											style="color : #f0542c"><?php echo $profil['sk_pendirian'] ?></span></p>
									<p>Tanggal SK Pendirian : <span
											style="color : #f0542c"><?php echo $profil['tanggal_sk_pendirian'] ?></span>
									</p>
									<p>SK Izin Operasional : <span
											style="color : #f0542c"><?php echo $profil['sk_izin'] ?></span>
									</p>
									<p>Tanggal SK Izin Operasional : <span
											style="color : #f0542c"><?php echo $profil['tanggal_sk_izin'] ?></span></p>
								</div>
								<!-- <style type="text/css">
								.lingkaran{
									width: 400px;
									height: 400px;
									background : white;
									border-radius: 100px;
								}
							</style> -->



							</div>
						</div>
					</div>
			</section>
			<!-- End / Section -->

			<!-- Section -->
			<!-- <section class="md-section" id="id0" style="background-color:#fff ">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">

							
						</div>
					</diV>
				</div>

			</section> -->
			<!-- End / Section -->

			<!-- Section -->
			<section class="md-section" id="id3">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">

							<!-- sec-title -->
							<div class="sec-title sec-title__lg-title md-text-center">
								<h2 class="sec-title__title">Visi Misi</h2><span class="sec-title__divider"></span>
							</div><!-- End / sec-title -->
							<h3>Visi</h3>
							<p><?php echo $vm['visi'] ?></p>
							<h3>Misi</h3>
							<p><?php echo $vm['misi'] ?></p>
						</div>
					</div>

				</div>
		</div>
	</div>
	</div>
	</section>
	<!-- End / Section -->


	<!-- Section -->
	<section class="md-section" id="id4" style="background-color:#fff;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">

					<!-- sec-title -->
					<div class="sec-title sec-title__lg-title md-text-center">
						<h2 class="sec-title__title">Gallery</h2><span class="sec-title__divider"></span>
					</div><!-- End / sec-title -->

				</div>
			</div>

			<!-- gallery-wrap -->
			<div class="gallery-wrap gallery-album">
				<div class="grid-css grid-css--grid" data-col-lg="4" data-col-md="2" data-col-sm="2" data-col-xs="1"
					data-gap="30">
					<div class="grid__inner">
						<div class="grid-sizer"></div>

						<?php
								foreach ($sql6 as $sp => $sp1) {
								?>

						<!-- grid-item -->
						<div class="grid-item">
							<div class="grid-item__inner">
								<div class="grid-item__content-wrapper">

									<!-- gallery -->
									<div class="gallery gallery--grid">
										<div class="gallery__image bg-image"
											style="background-image: url(backend/foto/<?php echo $sp1['foto'] ?>);">
											<img src="backend/foto/<?php echo $sp1['foto'] ?>"
												alt="How to Create and" /><a class="gallery__overlay mfp-image"
												href="backend/foto/<?php echo $sp1['foto'] ?>">
												<div class="md-tb">
													<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i>
													</div>
												</div>
											</a>
										</div>
									</div><!-- End / gallery -->

								</div>
							</div>
						</div><!-- End / grid-item -->

						<?php } ?>


					</div>
				</div>
			</div><!-- End / gallery-wrap -->

		</div>
	</section>
	<!-- End / Section -->


	<!-- Section -->
	<section class="md-section" id="id5">
		<div class="container">
			<div class="row">
				<div class="col-6 ">

					<!-- sec-title -->
					<div class="sec-title sec-title__lg-title md-text-center">
						<h2 class="sec-title__title">Sejarah</h2><span class="sec-title__divider"></span>
					</div><!-- End / sec-title -->
					<p><?php echo $sejarah['isi'] ?></p>
				</div>
			</div>


		</div>
	</section>
	<!-- End / Section -->


	<!-- Section -->
	<section class="md-section md-skin-dark" id="id6"
		style="background-image:url(&quot;asset/frontend/img/smk2.jpg&quot;);padding-bottom:50px;">
		<div class="md-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">

					<!-- sec-title -->
					<div class="sec-title sec-title__lg-title md-text-center">
						<h2 class="sec-title__title">Guru</h2><span class="sec-title__divider"></span>
					</div><!-- End / sec-title -->

				</div>
			</div>

			<?php			
foreach ($sql4 as $g => $guru) {
	?>
			<div class="row">
				<div class="col-md-4 ">
					<!-- team -->
					<div class="team">
						<div class="team__img"><img src="backend/dokumentasi/guru/<?php echo $guru['gambar'] ?>" alt=""
								width="300" height="30" />

							<!-- social-icon 
												<a class="social-icon social-icon__style-03" href="#"><i
														class="social-icon__icon fa fa-facebook"></i>
												</a>

												<a class="social-icon social-icon__style-03" href="#"><i
														class="social-icon__icon fa fa-twitter"></i>
												</a>End / social-icon 


												
												<a class="social-icon social-icon__style-03" href="#"><i
														class="social-icon__icon fa fa-linkedin"></i>
												</a> -->


						</div>

						<h3><?php echo $guru['nama'] ?></h3>
						<p><?php echo $guru['mapel'] ?></p>

					</div><!-- End / team -->

				</div>

				<?php } ?>
			</div>
			<div align="center">
				<a href="selengkapnyaguru.php">Selengkapnya</a>
			</div>
		</div>
		</div>
	</section>
	<!-- End / Section -->


	<!-- Section -->
	<section class="md-section" id="id7" style="background-color:#fff;padding:60px 0 0;">
		<div class="row">
			<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">

				<!-- sec-title -->
				<div class="sec-title sec-title__lg-title md-text-center">
					<h2 class="sec-title__title">Kontak</h2><span class="sec-title__divider"></span>
				</div><!-- End / sec-title -->

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9  col-lg-push-3">
					<div class="main-content">
						<div class="row">
							<div class="col-md-6 ">
								<form class="contact-form">
									<div>
										<div class="widget-contact__item"><span class="fa fa-phone"
												style="color: #f0542c"> Tel:</span>
											<p class="widget-contact__text"><?php echo $kontak['telpon'] ?></p>
										</div>
										<div class="widget-contact__item"><span class="fa fa-envelope"
												style="color :  #f0542c"> Email:</span>
											<p class="widget-contact__text"><a
													href="#"><?php echo $kontak['email'] ?></a></p>
										</div>
										<div class="widget-contact__item"><span class="fa fa-home"
												style="color :  #f0542c"> Alamat :</span>
											<p class="widget-contact__text"><?php echo $isi['alamat'] ?></p>
										</div>
									</div><!-- End /   -->

	</section><!-- End / widget -->

	</div>
	</div>
	</div>
	</div>
	</section>
	<!-- End / Section -->

	</div>
	<!-- End / Content-->
	<!-- copyright-01 -->
	<div class="copyright-01 md-text-center">
		<div class="container">
			<p class="copyright-01__copy">2022 &copy; Copyright SMKN 1 SINTOGA. All rights Reserved.</p>
		</div>
	</div><!-- End / copyright-01 -->

	</footer><!-- End / footer-01 -->

	</div>
	<!-- Vendors-->
	<script type="text/javascript" src="asset/frontend/vendors/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/isotope-layout/isotope.pkgd.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/masonry-layout/masonry.pkgd.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/swiper/swiper.jquery.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/jquery-one-page/jquery.nav.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/menu/menu.js"></script>
	<script type="text/javascript" src="asset/frontend/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
	<!-- App-->
	<script type="text/javascript" src="asset/frontend/js/main.js"></script>
</body>

</html>