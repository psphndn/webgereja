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
          <li><a href="{{ route('login') }}">Login</a></li>                                                            
          <li class="active"><a href="{{ route('register') }}">Register</a></li>          
      </ul>
  </nav><!-- .nav-menu -->
</div>
</header><!-- End Header -->
<br>

<section class="page-section" id="register">
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <h3 class="text-center">REGISTER</h3>
            <br>                
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="offset-md mt-2">
                    <div class="card-body bg-light text-dark">
                        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="nik"><strong>NIK</strong></label>
                            <input type="text" name="nik" class="form-control" placeholder="NIK" maxlength="12" required="">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Nama Lengkap</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Email</strong></label>
                            <input type="text" name="email" class="form-control" placeholder="Email" required="">
                        </div>                    
                        <div class="form-group">
                            <label for=""><strong>Password</strong></label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Konfirmasi Password</strong></label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password" required="">
                        </div>
                    </div>
                </div>
                <div class="tombol">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                </div>
            </form>
        </div>
    </div>
</section>
<div class="col-md-4 offset-md-4 mt-2">
    <footer>        
        <center><img src="images/logo.png" alt="logo bethany" class="img-fluid" style="height: 40px;"></center>
    </footer>
</div>

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