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
  <link href="{{ asset('assets/css/styleNotes.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('partials.navbar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
          
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- Start Main -->
  <main id="main">
    <section id="profOrtu" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="/assets/img/user.png" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">
                        @if(\Auth::check())
                            <a class="namaUser">{{\Auth::user()->name}}</a>
                        @else
                            <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                        @endif
                    </h5>
                    <div class="d-flex justify-content-center mb-2">
                    <button type="button" class="btn btn-outline-primary ms-1">Edit Profile</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            @if(\Auth::check())
                                <a class="namaUser">{{\Auth::user()->name}}</a>
                            @else
                                <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                            @endif
                        </p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            @if(\Auth::check())
                                <a class="namaUser">{{\Auth::user()->email}}</a>
                            @else
                                <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                            @endif
                        </p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            @if(\Auth::check())
                                <a class="namaUser">{{\Auth::user()->email}}</a>
                            @else
                                <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                            @endif
                        </p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            @if(\Auth::check())
                                <a class="namaUser">{{\Auth::user()->username}}</a>
                            @else
                                <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                            @endif
                        </p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            @if(\Auth::check())
                                <a class="namaUser">{{\Auth::user()->phonenumb}}</a>
                            @else
                                <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                            @endif
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/notesPage.js') }}"></script>

</body>

</html>