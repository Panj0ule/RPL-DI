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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
            <h2 class="titlePage">Tambah Data Bayi</h2>
          </div>
      </div>
    </div>
  </section><!-- End Hero -->


  <!-- Main Section -->
  <main id="main"> 
    <div class="mt-4 ms-4">
       <div class="container">
            <div class="form-group">
            <form action="/dashboard/restaurant/store" method="post">
                {{ csrf_field() }}
                <div class="form-field col-lg-4">
                    <label for="namaBayi">Nama Bayi</label> <input type="text" name="namaBayi" id="namaBayi" required="required" class="form-control">
                    <br><br>
                </div>
                <label for="jKelamin">Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="radioP">Perempuan</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioP" value="Perempuan">
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioP" value="Laki">
                        <label class="form-check-label" for="radioP">Laki-Laki</label>
                    </div>
                <br><br>
                <div class="form-field col-lg-4">
                    <label for="tglLahir">Tanggal Lahir</label> 
                    <input type="date" class="form-control" id="tgllahir" name="tgllahir">
                    <br><br>
                </div>
                <div class="contact-form row">
                    <div class="form-field col-lg-2">
                        <label class="form-control-label px-3">Tinggi Badan
                            <span class="text-danger"> *</span>
                        </label> 
                        <input type="text" class="form-control" id="tBadan" name="tBadan"> 
                    </div>
                    <div class="form-field col-lg-2">
                        <label class="form-control-label px-3">Berat Badan
                            <span class="text-danger"> *</span>
                        </label> 
                        <input type="text" class="form-control" id="bBadan" name="bBadan"> 
                    </div>
                </div>
                <br><br>
                <div class="contact-form row">
                    <div class="form-field col-lg-2">
                        <label class="form-control-label px-3">Lingkar Kepala</label> 
                        <input type="text" class="form-control" id="tBadan" name="tBadan"> 
                    </div>
                    <div class="form-field col-lg-2">
                        <label class="form-control-label px-3">Lingkar Lengan</label> 
                        <input type="text" class="form-control" id="bBadan" name="bBadan"> 
                    </div>
                </div>
                <br><br>
                <input type="submit" value="Simpan Data" class="btn btn-danger">
        
            </form>
            </div>
        </div>
    </div>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('partials.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</body>

</html>