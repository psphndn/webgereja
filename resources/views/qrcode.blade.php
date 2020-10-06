<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Home</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{ asset('presento/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  
	<link href="{{ asset('presento/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">  
	<link href="{{ asset('presento/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('presento/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('presento/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
	<link href="{{ asset('presento/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
	<link href="{{ asset('presento/assets/vendor/aos/aos.css') }}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{ asset('presento/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v2.0.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">
			<h1 class="logo mr-auto"><a href="index.html">Bethany</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li><a href="{{ route('logout') }}">Logout</a></li>          
				</ul>
			</nav><!-- .nav-menu -->
		</div>
	</header><!-- End Header -->
	<br>

	<section id="pricing" class="page-section">
		<div class="container" data-aos="fade-up">

			<div class="section-title text-center" >
				<div class="col-md-4 offset-md-4 mt-5">
					<div class="card-body bg-light">
						<h4><strong>Anda Berhasil Terdaftar!</strong></h4>		

						<div class="visible-print text-center">
							
							{!! QrCode::size(200)->generate($nik); !!}
							

						</div>
						<br>
						<p>(Silahkan di<i>screenshot</i>)</p>
						<div class="card-body">
							<button type="button" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" data-toggle="modal" data-target="#exampleModal256">
								<a class="text-white" href="{{ route('home') }}">Selesai</a>
								
							</button>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section><!-- End Pricing Section -->


	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{ asset('presento/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/php-email-form/validate.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/counterup/counterup.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/venobox/venobox.min.js') }}"></script>
	<script src="{{ asset('presento/assets/vendor/aos/aos.js') }}"></script>

	<!-- Template Main JS File -->
	<script src="{{ asset('presento/assets/js/main.js') }}"></script>

</body>

</html>