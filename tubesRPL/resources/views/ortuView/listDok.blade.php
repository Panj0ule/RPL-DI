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
  <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('partials.navbar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
          <div>
              <br><br><br>
            <h2 class="titleUser">List Dokter</h2>
          </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main"> 
    
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-15">
                    <div class="card-body text-center">
                        <div class="p-4 border radius-15">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110" class="rounded-circle shadow" alt="">
                            <h5 class="mb-0 mt-5">Dr. Ahmad Susanto, Sp.A</h5>
                            <p class="mb-3">Spesialis Anak</p>
                            <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-15">
                    <div class="card-body text-center">
                        <div class="p-4 border radius-15">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="110" height="110" class="rounded-circle shadow" alt="">
                            <h5 class="mb-0 mt-5">Dr. Arsalan Jaktiguni, Sp.A</h5>
                            <p class="mb-3">Spesialis Anak</p>
                            <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </main><!-- End #main -->

  <br>

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
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Notes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/forumView">Forum</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/articleView">Informasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#details">Rumah Sakit</a></li>
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