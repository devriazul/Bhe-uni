<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BHE UNI - Home</title>
  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('front/img/bheuni.ico') }}" type="image/x-icon">

  <!-- font family css  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="canonical" href="https://www.fonts.com/font/monotype/century-gothic/story" />

</head>
<body>

  <!-- Header Section -->
  <header class="bg-light">
    <!-- Top Bar -->
    <div class="py-2 highligh-primary d-none d-md-block">
      <div class="container d-flex justify-content-end topbar">
        <div class="me-3">
          <a class="text-reset" href="mailto:info@example.com">ask@bheuni.io</a>
        </div>
        <div class="me-3">
          <a class="text-reset" href="tel:+123456789">+880 1407-093812 (Dhaka)</a>
        </div>
        <div class="me-3">
          <a class="text-reset" href="tel:+123456789">+44 (0) 2033 189 380 (UK) <span class="ps-2">|</span> </a>
        </div>
        <div class="me-3">
          <a class="pe-3" href="#"><img src="{{ asset('front/img/fb.png ') }}" alt=""></a>
          <a class="pe-3" href="#"><img src="{{ asset('front/img/twitter.png ') }}" alt=""></a>
          <a class="pe-3" href="#"><img src="{{ asset('front/img/linkedin.png ') }}" alt=""></a>
          <a class="pe-3" href="#"><img src="{{ asset('front/img/youtube.png ') }}" alt=""></a>
        </div>
      </div>
    </div>

    <!-- Menu Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white menubar">
        <div class="container">
          <!-- Logo -->
          <a class="navbar-brand" href="#"><img src="{{ asset('front/img/logo.png ') }}" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu Items -->
            <ul class="fw-bold navbar-nav ms-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">We Are</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Study Abroad</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Our Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">News &amp; Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <div class="d-block d-md-none">
              <div class="d-flex">
                <!-- Search and Wishlist Icons -->
              <div class="rounded-circle bg-white p-2 me-3">
                <a href=""><i class="fas fa-search"></i></a>
              </div>
              <div class="rounded-circle bg-white p-2 me-3">
                <a href=""><i class="fas fa-heart"></i></a>
              </div>
              <!-- User Icon -->
              <div class="rounded-circle bg-white p-2">
                <a href=""><i class="fas fa-user"></i></a>
              </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-block card rounded-pill px-3 border border-secondary-subtle">
            <div class="d-flex">
              <!-- Search and Wishlist Icons -->
            <div class="rounded-circle bg-white p-2 me-2">
              <!-- <i class="fas fa-search"></i> -->
              <a href=""><img src="{{ asset('front/img/search.png ') }}" alt=""></a>
            </div>
            <div class="rounded-circle bg-white p-2 me-2">
              <!-- <i class="fas fa-heart"></i> -->
              <a href=""><img src="{{ asset('front/img/love.png ') }}" alt=""></a>
            </div>
            <!-- User Icon -->
            <div class="rounded-circle bg-white p-2">
              <!-- <i class="fas fa-user"></i> -->
              <a href=""><img src="{{ asset('front/img/user.png ') }}" alt=""></a>
            </div>
            </div>
          </div>
        </div>
      </nav>

  </header>

  @yield('content')
  <!-- Footer section start -->
  <footer class="highligh-primary pt-5 pb-2 footer-menubar">
    <div class="container py-4">
      <div class="row">
        <!-- Column 1 - Contact Us -->
        <div class="col-md-3 col-12">
          <h6 class="secondary-color">Contact Us</h6>
          <p>11 Beaufort Court, Admirals Way,<br>
            Canary Wharf, London <br> United Kingdom
            E149XL</p>
          <p><img src="{{ asset('front/img/phone-Icon.png ') }}" alt=""> +44 (0) 2033 189 380</p>
          <p><img src="{{ asset('front/img/phone-call.png ') }}" alt=""> ask@bheuni.io</p>
        </div>
        <!-- Column 2 - About -->
        <div class="col-md-3 col-12">
          <h6 class="secondary-color">About</h6>
          <ul class="list-unstyled">
            <li><a class="text-white" href="#">Home</a></li>
            <li><a class="text-white" href="#">We Are</a></li>
            <li><a class="text-white" href="#">Study Abroad</a></li>
            <li><a class="text-white" href="#">Our Service</a></li>
            <li><a class="text-white" href="#">News &amp; Event</a></li>
            <li><a class="text-white" href="#">Contact</a></li>
          </ul>
        </div>
        <!-- Column 3 - Links -->
        <div class="col-md-3 col-12">
          <h6 class="secondary-color">Links</h6>
          <ul class="list-unstyled">
            <li><a class="text-white" href="#">Become a agent</a></li>
            <li><a class="text-white" href="#">Accommodation</a></li>
            <li><a class="text-white" href="#">Privacy Policy</a></li>
            <li><a class="text-white" href="#">Terms of Service</a></li>
            <li><a class="text-white" href="#">FAQ</a></li>
            <li><a class="text-white" href="#">Support</a></li>
          </ul>
        </div>
        <!-- Column 4 - App Download -->
        <div class="col-md-3 col-12">
          <h6 class="secondary-color">Get Mobile App</h6>
          <div class="my-3 d-flex flex-column">
            <img class="img-fluid" src="{{ asset('front/img/Mobile app store badge.png') }}" alt="" width="130px">
            <img class="img-fluid pt-2" src="{{ asset('front/img/Mobile app store badge-ggl.png') }}" alt="" width="130px">
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Bottom - Copyright Text -->
    <div class="container text-center mt-3">
      <small><hr> © Copyright 2023. All Rights Reserved. Developed by <a class="text-reset" href=""><span class="secondary-color"> Digital Planet</span></a></small>
    </div>
  </footer>

  <!-- Footer section end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('front/js/style.js') }}"></script>
</body>
</html>
