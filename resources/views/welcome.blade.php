<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('template')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#">Udacoding<span style="color: blue">.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="{{asset('template')}}/assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li></li>
          <a style="border-radius: 15px;" href="{{ url('login') }}" type="button" class="btn btn-outline-success btn-lg">Login</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Halo...!
        <br> Selamat datang
        <br> di perusahaan kami</h1>
      <h2>Kami siap melayani dan membatu dengan hati <br>
        unutuk mengembangkan bisnis yang ada inginkan</h2>

        <a href="#" class="btn btn"
        style="line-height: 50px; height: 65px; width: 20%;  color: #fff; background-color:#20bf06;
        border-radius: 30px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Berkunjung Sekarang!</a>



    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-award"></i></div>
              <h4 class="title"><a href="">Quality Drive</a></h4>
              <p class="description">Udacoding memberikan kualitas terbaik untuk setiap costumer kami</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-umbrella"></i></div>
              <h4 class="title"><a href="">Customer Focused</a></h4>
              <p class="description">Kami berfokus Pada Costumers kami untuk memberikan pelayan terbaik dan kualitas terbaik</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-globe"></i></div>
              <h4 class="title"><a href="">Global Level</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Odit, ducimus.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('template')}}/assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-1">
          </div>
          <div  class="col-lg-5 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <p style="color: #27AE60;">About Us</p>
            <h3 style="line-height: 40px;">IT Training Center & <br>
                Software Development</h3> <br>
            <p style="line-height: 35px;">
                Udacoding saat ini memiliki beberapa jasa di bidang <br>
                 Teknologi diantaranya IT Training Center & Software <br>
                 Development (Saat ini di bidang web development, <br>
                 mobile development, UI Design dan Data Science)
            </p>
            <div class="d-flex">
                <a href="#" class="btn btn scrollto" style="width: 30%; color: #fff; background-color:#20bf06; border-radius: 30px;">GET STARTED</a>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="text-left">
          <p style="color:#20bf06;">Contact Us</p>
          <p style="font-weight: bold; font-size: 180%; font-family: Poppins;">We are always ready & <br>
            there to grow your business</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12" >
            <div class="info-box mb-4" style="background-color: #20bf06;  border-radius:12px;">
                <div class="row">
                    <div class="col-md-1 mt-3 mb-3"></div>
                    <div class="col-md-5 mt-3 mb-3">
                       <div class="text-white">
                        <p style="font-weight: bold; font-size:150%;">+0822 1376 1973</p>
                        <p>Phone Number</p>
                       </div>
                    </div>
                    <div class="col-md-5 mt-3 mb-3">
                        <div class="text-white">
                           <p style="font-weight: bold; font-size:150%;"> info@udacoding.com</p>
                           <p>Email account</p>
                        </div>
                    </div>
                    <div class="col-md-1 mt-3 mb-3"></div>
                </div>

            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Udacoding<span>.</span></h3>
            <p>
                South Tangsel, Dhayapesona <br> Indonesia.
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>About Us</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Investor</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Get Help</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Order Status</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Delivery</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">admin@mail.com</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">+624239849248</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; 2023 Copyright <strong></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('template')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('template')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('template')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template')}}/assets/js/main.js"></script>

</body>

</html>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Buku Tamu</h1>
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="" style="font-size: 80%">NAMA LENGKAP</label>
          <input class="form-control mt-1" type="text">
          <label class="mt-3" for="" style="font-size: 80%">ALAMAT</label>
          <textarea name="" class="form-control mt-1" id="" cols="30" rows="3"></textarea>
          <label class="mt-3" for="" style="font-size: 80%">NO HP</label>
          <input class="form-control mt-1" type="number">
          <label class="mt-3" for="" style="font-size: 80%">KEPERLUAN</label>
          <select class="form-control mt-1" name="" id="">
            <option value="">Training</option>
            <option value="">Bootcamp</option>
            <option value="">Magang</option>
          </select>
          <div class="row">
            <div class="col-md-6">
                <label class="mt-3" for="" style="font-size: 80%">TANGGAL</label>
                <input class="form-control mt-1" type="date" name="" id="">
            </div>
            <div class="col-md-6">
                <label class="mt-3" for="" style="font-size: 80%">JAM</label>
                <input class="form-control mt-1" type="time" name="" id="">
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" >Save</button>
        </div>
      </div>
    </div>
</div>
