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
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/parentView">BUNA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#">Notifikasi</a></li>
          <li><a class="nav-link scrollto active" href="/notesView">Notes</a></li>
          <li><a class="nav-link scrollto" href="/forumView">Forum</a></li>
          <li><a class="nav-link scrollto" href="/articleView">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#">Rumah Sakit</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-start">

    <div class="container">
      <div class="row">
          <div>
              <br><br><br>
            <h2 class="titlePage">Notes</h2>
          </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <!-- Start Main -->
  <main id="main"> 
    <div class="page-content container note-has-grid">
      <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
          <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active" id="all-category">
                  <i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span>
              </a>
          </li>
          <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-business"> <i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Business</span></a>
          </li>
          <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social"> <i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
          </li>
          <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important"> <i class="icon-tag mr-1"></i><span class="d-none d-md-block">Important</span></a>
          </li>
          <li class="nav-item ml-auto">
              <a href="javascript:void(0)" class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes"> <i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Add Notes</span></a>
          </li>
      </ul>
      <div class="tab-content bg-transparent">
          <div id="note-full-container" class="note-has-grid row">
              <div class="col-md-4 single-note-item all-category" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Book a Ticket for Movie <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">11 March 2009</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-important" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Go for lunch">Go for lunch <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">01 April 2002</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-social" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Meeting with Mr.Jojo">Meeting with Mr.Jojo <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">19 October 2020</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-business" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give Review for design">Give Review for design <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">02 January 2000</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-social" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Nightout with friends">Nightout with friends <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">01 August 1999</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-important" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Launch new template">Launch new template <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">21 January 2015</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-social" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Change a Design">Change a Design <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">25 December 2016</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-business" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give review for foods">Give review for foods <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">18 December 2020</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-important" style="">
                  <div class="card cardNotes-body">
                      <span class="side-stick"></span>
                      <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give salary to employee">Give salary to employee <i class="point fa fa-circle ml-1 font-10"></i></h5>
                      <p class="note-date font-12 text-muted">15 Fabruary 2020</p>
                      <div class="note-content">
                          <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                      </div>
                      <div class="d-flex align-items-center">
                          <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                          <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                          <div class="ml-auto">
                              <div class="category-selector btn-group">
                                  <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                      <div class="category">
                                          <div class="category-business"></div>
                                          <div class="category-social"></div>
                                          <div class="category-important"></div>
                                          <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                      </div>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                      <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                      </a>
                                      <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                      </a>
                                      <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                          <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Modal Add notes -->
      <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content border-0">
                  <div class="modal-header bg-info text-white">
                      <h5 class="modal-title text-white">Add Notes</h5>
                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="notes-box">
                          <div class="notes-content">
                              <form action="javascript:void(0);" id="addnotesmodalTitle">
                                  <div class="row">
                                      <div class="col-md-12 mb-3">
                                          <div class="note-title">
                                              <label>Note Title</label>
                                              <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" />
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="note-description">
                                              <label>Note Description</label>
                                              <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button id="btn-n-save" class="float-left btn btn-success" style="display: none;">Save</button>
                      <button class="btn btn-danger" data-dismiss="modal">Discard</button>
                      <button id="btn-n-add" class="btn btn-info" disabled="disabled">Add</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
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
  <script type="text/javascript" src="{{ asset('assets/js/notesPage.js') }}"></script>

</body>

</html>