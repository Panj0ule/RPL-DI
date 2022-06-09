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
            <h2 class="titleUser">Hello, <span class="Buna">
                    @if(\Auth::check())
                      <a class="namaUser">{{\Auth::user()->name}}</a>
                    @else
                      <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                    @endif
            </span>!</h2>
          </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <!-- Main Section -->
  <main id="main"> 

    <!-- Input Data Bayi Section -->
    <section id="databayi">
      <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
          <div style="height:200px; width: 200px; margin:auto">
        <canvas id="barChart">

        </canvas>
        </div>
      
        <script>
          $(function(){
            var barCanvas = $("#barChart");
            var barChart = new Chart(barCanvas,{
              type:'bar',
              data:{
                labels:['Jan','Feb','Mar','Apr','Mei','Jun','Jul']
                datasets:[
                  {
                    label: 'Pertumbuhan Balita',
                    backgroundColor:['red','orange','yellow','green','blue','indigo','violet']
                  }
                ]
              },
              options:{
                scales:{
                  yAxes:[{
                    ticks:{
                      beginAtZero:true
                    }
                  }]
                }
              }
            });
          })
        </script>
          </div>
          <div class="col-md-4" data-aos="fade-up">
          <div class="square rounded p-3 bg-light">Detail Data Bayi</div>
            <a href="/parentView/addDataBayi" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Tambah Data Bayi</a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- End Input Data Bayi Section -->

    <!-- Artikel Section -->
    <section id="artikel">
      <div class="section-title">
          <h2 class="">Artikel</h2>
          <div class="container-fluid">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Cari Artikel" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
          </div>
      </div>

      <div class="container">
        <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card">
          <img src="assets/img/artikel1.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Lorem Ipsum</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="bi-heart"></i></a>
          </div>
        </div>
        </div>
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="assets/img/artikel2.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Lorem Ipsum</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="bi-heart"></i></a>
          </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="assets/img/artikel3.jpeg" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Lorem Ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
              <a href="" class="btn btn-outline-success btn-sm">Read More</a>
              <a href="" class="btn btn-outline-danger btn-sm"><i class="bi-heart"></i></a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- End Artikel Section -->

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

</body>

</html>