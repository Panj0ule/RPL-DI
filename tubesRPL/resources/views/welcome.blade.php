<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to BUNA!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="welcome">BUNA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#features">Fitur</a></li>
          <li><a class="nav-link scrollto" href="#details">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          <li><a class="getstarted scrollto" href="#hero">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h2>Selamat Datang di <span class="Buna">Buna</span></h2>
            <h3>Pantau pertumbuhan kembang si kecil, Jelajahi informasi mengenai tumbuh kembang si kecil, dan Konsultasi dengan dokter anak ter-ahli mengenai permasalahan tumbuh kembang si kecil</h3>
            <a class="btn btn-outline-light" href="/register" role="button">Register</a>
            <a class="btn btn-outline-light" class="btnlog" href="/login" role="button">Login</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/moms.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>App Features</h2>
          <p>Dengan BUNA, kamu bisa melakukan Pemantauan Tumbuh Kembang Balitamu, Mencari Informasi Terkait Tumbuh Kembang Balita, Konsultasi dengan Dokter dan Anak, dan masih banyak lagi!</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-shield"></i>
                  <h4>Memantau Tumbuh Kembang Balita</h4>
                  <p>Visual grafik dengan menampilkan data balita berupa Tinggi dan Berat Badan</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-chat"></i>
                  <h4>Berkonsultasi dengan Dokter Ahli Anak secara Online</h4>
                  <p>Konsultasikan masalah balitamu kepada Dokter Ahli Anak yang tersedia</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-receipt"></i>
                  <h4>Artikel Tentang Tumbuh Kembang Balita</h4>
                  <p>Cari informasi terbaru mengenai Informasi Tumbuh Kembang Balitamu</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-map"></i>
                  <h4>Mencari Lokasi Fasilitas Kesehatan Terdekat</h4>
                  <p>Cari Rumah Sakit/Klinik terdekat dari Lokasimu</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/features.svg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/mom3-rb.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Memantau Tumbuh Kembang Balita dengan Visual Grafik</h3>
            <p class="fst-italic">
              Visualisasi grafik tumbuh kembang balita dengan menampilkan data Tinggi Badan dan Berat Badan balita terbaru sesuai data yang dimasukkan.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/mom2-rb.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Berkonsultasi dengan Dokter Ahli Anak yang Tersedia di BUNA 24H</h3>
            <p class="fst-italic">
              Konsultasi dengan Dokter Ahli Anak melalui <b>live chat message</b>.
            </p>
            <p>
              Adanya fitur konsultasi dengan Dokter Ahli Anak yang akan mempermudah kamu untuk mengatasi
              masalah pertumbuhan balita mu.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/mom1-rb.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Artikel Tumbuh Kembang Balita Terupdate</h3>
            <p>Cari dan dapatkan informasi mengenai Tumbuh Kembang Balita yang dibuat oleh Dokter Ahli Anak.</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/hospital2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Mencari Informasi Fasilitas Kesehatan di Sekitarmu</h3>
            <p class="fst-italic">
              Cari rumah sakit hingga klinik yang memiliki Dokter ahli Anak yang berada di area sekitarmu dengan mudah.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BUNA</h3>
            <p>
              <strong>OUR TEAM</strong> <br>
              Adinda Putri Rosyadi<br>
              Anak Agung Istri Arinta Maharani <br>
              Dhialif Fajarrahman<br>
              Nia Madu Marliana<br>
              Rafi Rizkya Aryanta<br><br>
              <strong>Kelas:</strong> IF-43-08<br>
              <strong>Asisten Praktikum:</strong> Billy Anthony Christian M.<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Fitur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#details">Informasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>