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

      <a href="#about" class="get-started-btn scrollto">Daftar Ibadah</a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('home') }}">Ibadah</a></li>                                                            
          <li><a href="#contact">Kontak</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>          
      </ul>
  </nav><!-- .nav-menu -->
</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>HALO, <strong class="text-uppercase">{{ Auth::user()->name }}!</strong></h1>
          <h2>Selamat Datang Di Halaman Utama</h2>
          <a href="#about" class="btn-get-started scrollto">Daftar Ibadah</a>
      </div>
  </div>
</div>

</section><!-- End Hero -->

<!-- modal 1 -->
<div class="modal fade" id="exampleModal256" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-dark">
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/ir1" method="post">
                    {{ csrf_field() }}
                    <div class="form-group text-center">
                        <label for="exampleInputEmail1">Anda yakin ingin mendaftar?</label>
                        <input type="input" class="form-control" name="nik" value="{{ Auth::user()->nik }}" readonly>
                        <br>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="button" name="tidak" class="btn btn-secondary btn-lg btn-block tidak" data-dismiss="modal">Batal</button>
                        </div>
                        <div class="col">
                            <button type="submit" name="iya" class="btn btn-primary btn-lg btn-block iya">Daftar</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- modal 2 -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-dark">
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/ir2" method="post">
                    {{ csrf_field() }}
                    <div class="form-group text-center">
                        <label for="exampleInputEmail1">Anda yakin ingin mendaftar?</label>
                        <input type="input" class="form-control" name="nik" value="{{ Auth::user()->nik }}" readonly>
                        <br>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="button" name="tidak" class="btn btn-secondary btn-lg btn-block tidak" data-dismiss="modal">Batal</button>
                        </div>
                        <div class="col">
                            <button type="submit" name="iya" class="btn btn-primary btn-lg btn-block iya">Daftar</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">    
        <div class="section-title">
          <h2>KETENTUAN IBADAH</h2>
          <center>
            <div class="row">
              <div class="col-md-4">
                <div class="icon-box">
                    <img src="images/maskerr.png"  class="img-fluid" style="height: 100px;"/>
                    <h4 class="my-3">Masker</h4>
                    <p class="text-muted">Wajib menggunakan masker saat beribadah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="images/face.png" class="img-fluid" style="height: 100px;"/>
                    <h4 class="my-3">Face Shield</h4>
                    <p class="text-muted">Wajib menggunakan face shield saat beribadah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="images/long.png" class="img-fluid" style="height: 100px;"/>
                    <h4 class="my-3">Lengan Panjang</h4>
                    <p class="text-muted">Wajib menggunakan lengan panjang saat beribadah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="images/wash.png" class="img-fluid" style="height: 100px;"/>
                    <h4 class="my-3">Cuci Tangan</h4>
                    <p class="text-muted">Sebelum masuk ke hall gereja, jemaat wajib mencuci tangan di wastafel yang sudah disediakan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="images/distance.png" class="img-fluid" style="height: 100px;"/>
                    <h4 class="my-3">Jaga Jarak</h4>
                    <p class="text-muted">Jagalah jarak, hindari kerumunan untuk meminimalisir penyebaran COVID-19.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <img src="images/no.png" class="img-fluid" style="height: 100px;"/>
                    <h4 class="my-3">Tidak Berjabat Tangan</h4>
                    <p class="text-muted">Lakukanlah salam dengan tidak berjabat tangan.</p>
                </div>
            </div>   
        </div>
    </center>          
</div>
</section><!-- End Clients Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row no-gutters">
      <div class="content col-xl-5 d-flex align-items-stretch">
        <div class="content">
          <h3>Jadwal Ibadah Raya</h3>
          <p>
            Silahkan melihat ketentuan ibadah terlebih dahulu.
        </p>
        <a href="#clients" class="about-btn"><span>Ketentuan Ibadah</span> <i class="bx bx-chevron-right"></i></a>
    </div>
</div>
<div class="col-xl-7 d-flex align-items-stretch">
    <div class="icon-boxes d-flex flex-column justify-content-center">
      <div class="row">        
          <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">              
              <h4>Ibadah Raya 1</h4>
              <div class="timeline-body">
                <?php
                echo "Minggu".date(' j, F Y', time()+(60 * 60 * 24 * 2));
                ?>
            </div>
            <h7 class="subheading"><strong>Sisa Kuota : {{ $quota }}</strong></h7>
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" data-toggle="modal" data-target="#exampleModal256">
                    Daftar
                </button>
            </div>
        </div>
        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">          
          <h4>Ibadah Raya 2</h4>
          <div class="timeline-body">
            <?php
            echo "Minggu".date(' j, F Y', time()+(60 * 60 * 24 * 2));
            ?>

        </div>
        <h7 class="subheading"><strong>Sisa Kuota : {{ $quota2 }}</strong></h7>
        <div class="card-body">
            <button type="button" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" data-toggle="modal" data-target="#exampleModal">
                Daftar
            </button>
        </div>                        
    </div>
</div>
</div><!-- End .content-->
</div>
</div>

</div>
</section><!-- End About Section -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Kontak</h2>
        <p>Informasi lebih lanjut dapat menghubungi kontak dibawah ini atau dapat datang langsung ke gereja.</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-12">
            <div class="row">
              <div class="col-md-4">
                <div class="info-box mt-4">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Jend. Sudirman 105</p>              
              </div>
          </div>
          <div class="col-md-4">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>mmbethanysala3@gmail.com</p>
          </div>
      </div>
      <div class="col-md-4">
        <div class="info-box mt-4">
          <i class="bx bx-phone-call"></i>
          <h3>Telepon</h3>
          <p>0856-9722-2222</p>
      </div>
  </div>
</div>

</div>

</div>

</div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">    
          <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->            
          </div>
      </div>
      <center>
        <div class="social-links text-center"> 
            <h4>Ikuti Kami</h4>
            <a href="https://www.instagram.com/bethanysalatiga/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.youtube.com/c/GerejaBethanySalatiga/featured" class="google-plus"><i class="bx bxl-youtube"></i></a>    <a href="https://www.facebook.com/bethanysala3" class="facebook"><i class="bx bxl-facebook"></i></a>                    
        </div>
    </center>

    <br><br>
    <div class="copyright text-center">
        <img src="images/logo.png" alt="logo bethany" class="img-fluid" style="height: 40px;">
    </div>
</footer><!-- End Footer -->

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