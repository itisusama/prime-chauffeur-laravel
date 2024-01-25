<!-- START:: Navbar -->
<section class="pc-navbar container-fluid px-0">
      <nav class="pc-desktop-navbar bg-body-tertiary px-5 py-2 d-flex justify-content-between">
          <!-- LOGO and Name -->
          <div class="pc-navbar-mobile-logo">
              <div class="pc-navbar-logo p-2" onclick="window.location.href='{{route('home')}}'"><i class="fa-solid fa-car"></i></div>
              <div class="pc-navbar-name" onclick="window.location.href='{{route('home')}}'"><h5>Prime Chauffeur</h5></div>
          </div>
          <!-- Items -->
          <div class="pc-navbar-list">
              <ul class="list-unstyled d-flex gap-1 align-items-center">
                  <li><b><a href="{{ route('home') }}">Home</a></b></li>
                  <li><a href="{{ route('cars') }}" style="margin: 0 10px;">Cars</a></li>
                  <li>
                      <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('airport') }}">Airport Transfers</a></li>
                            <li><a class="dropdown-item" href="{{ route('wedding') }}">Wedding</a></li>
                            <li><a class="dropdown-item" href="{{ route('events') }}">Events</a></li>
                            <li><a class="dropdown-item" href="{{ route('business') }}">Business</a></li>
                            <li><a class="dropdown-item" href="{{ route('tours') }}">Tours</a></li>
                          </ul>
                      </div>
                  </li>
                  <li>
                      <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('singleblog') }}">Single Blog</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog') }}">All Blogs</a></li>
                          </ul>
                      </div>
                  </li>
                  <li><a href="{{ route('contact') }}" style="margin-right: 10px;">Contact</a></li>
                  <li><a href="{{ route('about') }}" style="margin-right: 10px;">About</a></li>
                  <li><button type="button" class="pc-navbar-booknow px-3" onclick="window.location.href='cars.html'">Book Now</button></li>
              </ul>
          </div>
      </nav>
      <div class="pc-navbar-mobile-toggle"><a href="#" id="pc-navbar-mobile-toggle"><i class="fa-solid fa-bars fa-2xl"></i></a></div>
  </section>
  <!-- Mobile Navbar -->
  <section class="pc-mobile-navbar bg-light" id="pc-mobile-navbar">
    <!-- close -->
    <div class="pc-mobile-navbar-close" id="pc-mobile-navbar-close"><i class="fa-solid fa-x"></i></div>

    <div class="container pc-mobile-list">
        <ul class="list-unstyled">
          <li><b><a class="btn" href="{{ route('home') }}">Home</a></b></li>
          <li>
              <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cars
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="cars.html">Our Cars</a></li>
                  </ul>
                </div>
          </li>
          <li>
              <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('airport') }}">Airport Transfers</a></li>
                            <li><a class="dropdown-item" href="{{ route('wedding') }}">Wedding</a></li>
                            <li><a class="dropdown-item" href="{{ route('events') }}">Events</a></li>
                            <li><a class="dropdown-item" href="{{ route('business') }}">Business</a></li>
                            <li><a class="dropdown-item" href="{{ route('tours') }}">Tours</a></li>
                          </ul>
                      </div>
          </li>
          <li>
              <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Blog
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('blog') }}">All Blogs</a></li>
                    <li><a class="dropdown-item" href="{{ route('singleblog') }}">Single Blog</a></li>
                  </ul>
              </div>
          </li>
          <li><a class="btn" href="{{ route('contact') }}" style="margin-right: 10px;">Contact</a></li>
          <li><a class="btn" href="{{ route('home') }}" style="margin-right: 10px;">About</a></li>
          <li><button type="button" class="pc-navbar-booknow px-3" onclick="window.location.href='cars.html'">Book Now</button></li>
      </ul>
    </div>
  </section>
  <!-- Mobile Navbar -->
  <!-- END:: Navbar -->