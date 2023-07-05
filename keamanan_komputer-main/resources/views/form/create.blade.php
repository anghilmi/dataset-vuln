<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Booking GAZEWHY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('PhotoFolio/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('PhotoFolio/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('PhotoFolio/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('PhotoFolio/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('PhotoFolio/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('PhotoFolio/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('PhotoFolio/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('PhotoFolio/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio - v1.1.1
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>GAZEWHY</h1>
      </a>

      <nav id="navbar" class="navbar" id="nav">
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/paket">Paket</a></li>
          <li><a href="/produk">Produk</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/form">Booking Online</a></li>
          <li><a href="login/login2">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://mobile.twitter.com/GAZEWHY" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/9azewhy" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/gazewhystudio?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Formulir Booking Studio Foto GAZEWHY</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            <form action="form/create" method="POST"  class="php-email-form" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama_penyewa" class="form-control" id="name" placeholder="Nama Penyewa" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="int" class="form-control" name="no_hp" id="no" placeholder="Nomor Telepon" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="email" id="email" placeholder="email" required>
              </div>
              <div class="form-group mt-3">
                <label>Booking untuk</label>
                <input type="date" class="form-control" name="bookuntuk" id="booking" placeholder="Booking Untuk Tanggal" required>
              </div>
              <div class="form-group mt-3">
                <label>Jam</label>
                <input type="time" class="form-control" name="jam" id="subject" placeholder="Jam" required>
              </div>
              <div class="my-3">
              </div>
              <div class="form-group mt-3">
                <label>DP</label>
                <input type="file" class="form-control" name="image" id="image" required>
              </div>
              <div class="my-3">
              </div>
              <button type="submit" class="btn btn-primary">Booking</button>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('PhotoFolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('PhotoFolio/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('PhotoFolio/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('PhotoFolio/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('PhotoFolio/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('PhotoFolio/assets/js/main.js')}}"></script>

</body>

<script>

</script>

</html>
