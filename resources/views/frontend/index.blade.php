<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime-chauffeur</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- Owl css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
</head>
<body>
    <!-- START:: Navbar -->
    <section class="pc-navbar container-fluid px-0">
      <nav class="pc-desktop-navbar bg-body-tertiary px-5 py-2 d-flex justify-content-between">
          <!-- LOGO and Name -->
          <div class="pc-navbar-mobile-logo">
              <div class="pc-navbar-logo p-2"><i class="fa-solid fa-car"></i></div>
              <div class="pc-navbar-name"><h5>Prime Chauffeur</h5></div>
          </div>
          <!-- Items -->
          <div class="pc-navbar-list">
              <ul class="list-unstyled d-flex gap-1 align-items-center">
                  <li><b><a href="index.html">Home</a></b></li>
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
                            <li><a class="dropdown-item" href="airport.html">Airport Transfers</a></li>
                            <li><a class="dropdown-item" href="wedding.html">Wedding</a></li>
                            <li><a class="dropdown-item" href="events.html">Events</a></li>
                            <li><a class="dropdown-item" href="business.html">Business</a></li>
                            <li><a class="dropdown-item" href="tours.html">Tours</a></li>
                          </ul>
                      </div>
                  </li>
                  <li>
                      <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="single-blog.html">Single Blog</a></li>
                            <li><a class="dropdown-item" href="blogs.html">All Blogs</a></li>
                          </ul>
                      </div>
                  </li>
                  <li><a href="contact.html" style="margin-right: 10px;">Contact</a></li>
                  <li><a href="about.html" style="margin-right: 10px;">About</a></li>
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
          <li><b><a class="btn" href="index.html">Home</a></b></li>
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
                            <li><a class="dropdown-item" href="airport.html">Airport Transfers</a></li>
                            <li><a class="dropdown-item" href="wedding.html">Wedding</a></li>
                            <li><a class="dropdown-item" href="events.html">Events</a></li>
                            <li><a class="dropdown-item" href="business.html">Business</a></li>
                            <li><a class="dropdown-item" href="tours.html">Tours</a></li>
                          </ul>
                      </div>
          </li>
          <li>
              <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Blog
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="blogs.html">All Blogs</a></li>
                    <li><a class="dropdown-item" href="single-blog.html">Single Blog</a></li>
                  </ul>
              </div>
          </li>
          <li><a class="btn" href="contact.html" style="margin-right: 10px;">Contact</a></li>
          <li><a class="btn" href="about.html" style="margin-right: 10px;">About</a></li>
          <li><button type="button" class="pc-navbar-booknow px-3" onclick="window.location.href='cars.html'">Book Now</button></li>
      </ul>
    </div>
  </section>
  <!-- Mobile Navbar -->
  <!-- END:: Navbar -->
    <!-- START:: Hero -->
    <section class="pc-hero">
      <div class="container">
        <div class="row">
          <!-- Heading -->
          <div class="col-lg-6 pc-hero-heading" data-aos="fade-right" data-aos-delay="1000">
            <p class="text-white h1">Website Heading</p>
            <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore ab velit explicabo adipisci harum eum vitae quae nostrum tenetur libero, consequatur voluptatibus?</p>
          </div>
          <!-- Form -->
          <div class="col-lg-6 pc-hero-form" data-aos="fade-left" data-aos-delay="1000">
            <!-- Form div -->
            <div class="py-2">
              <!-- btns -->
              <div class="pc-hero-form-btns py-2 d-flex gap-1 justify-content-center">
                <h1>Get Quick Quote</h1>
              </div>
              <!-- btns -->
              <!-- 1 -->
              <section class="px-5" id="pc-oneway-form" style="display: block;">
                <form action="#" method="post">
                  <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Pickup Location" required>
                  </div>

                  <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Destination" required>
                  </div>
                  <hr>
                  <!-- Date and Time -->
                  <div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="onewaycheck">
                      <label class="form-check-label" for="flexCheckDefault">
                        One Way
                      </label>
                    </div>
                    <!-- Row -->
                    <div class="row">
                      <!-- Time -->
                      <div class="col-md-8 mb-3">
                          <div class="input-group date" id="datepicker">
                            <input type="date" class="form-control" id="onewaybookingdate"/>
                          </div>
                      </div>
                      <!-- Time -->
                      <div class="col-md-4 mb-3">
                          <div class="input-group date" id="datepicker">
                            <input type="time" class="form-control" id="onewaybookingtime"/>
                          </div>
                      </div>
                      <!-- End -->
                    </div>
                    <!-- Row -->
                  </div>
                  <!-- Date and Time -->
                  <!-- Date and Time -->
                  <div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="returncheck">
                      <label class="form-check-label" for="flexCheckDefault">
                        Return
                      </label>
                    </div>
                    <!-- Row -->
                    <div class="row">
                      <!-- Time -->
                      <div class="col-md-8 mb-3">
                          <div class="input-group date" id="datepicker">
                            <input type="date" class="form-control" id="returnbookingdate"/>
                          </div>
                      </div>
                      <!-- Time -->
                      <div class="col-md-4 mb-3">
                          <div class="input-group date" id="datepicker">
                            <input type="time" class="form-control" id="returnbookingtime"/>
                          </div>
                      </div>
                      <!-- End -->
                    </div>
                    <!-- Row -->
                  </div>
                  <!-- Date and Time -->
                  <div class="pc-hero-submit-btn d-flex justify-content-center" style="cursor: pointer;" onclick="window.location.href='booking.html'"><button class="btn"> Book Now -> </button></div>
                </form>         
              </section>
              <!-- END -->
            </div>
            <!-- Form div -->
          </div>
          <!-- End -->
        </div>
      </div>
    </section>
    <!-- END:: Hero -->

    <!-- START:: Car Card Slider -->
    <section class="mt-4 pc-carCardsSlider-mobile">
      <div class = "title pt-3 d-flex justify-content-center mb-3">
          <h2 class = "position-relative ms-4">Our Cars</h2>
      </div>
      <div class="container"><p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque animi quae vel doloribus magni adipisci explicabo, placeat quos quisquam a rerum alias totam suscipit ab consequatur possimus eius temporibus rem vero nisi tempore magnam voluptates? Dicta, earum.</p></div>
    
    <div class="owl-carousel container">      
        <!-- 1 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img class="card-img-top" src="assets/images/cars/car1.png" alt="Card image" style="width:100%;">
            <!-- Price -->
            <div class="pc-carPriceBadge px-3 py-2"><span>From £200</span></div>
            <!-- Price -->
            <div class="card-body">
              <h5 class="card-title">Mercedes S-Class</h5>
              <hr class="w-25 text-danger">
              <p class="card-text">
                <span class="d-block"><i class="fa-solid fa-check"></i> 4 Passangers </span>
                <span class="d-block"><i class="fa-solid fa-check"></i> 2 Bags </span>
              </p>
              <div class="pc-newsletter-btn mt-4 mx-auto">
                <button class="btn" onclick="window.location.href='cars.html'">Book Now</button>
              </div>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 2 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img class="card-img-top" src="assets/images/cars/car2.png" alt="Card image" style="width:100%;">
            <!-- Price -->
            <div class="pc-carPriceBadge px-3 py-2"><span>From £200</span></div>
            <!-- Price -->
            <div class="card-body">
              <h5 class="card-title">Mercedes V-Class</h5>
              <hr class="w-25 text-danger">
              <p class="card-text">
                <span class="d-block"><i class="fa-solid fa-check"></i> 4 Passangers </span>
                <span class="d-block"><i class="fa-solid fa-check"></i> 2 Bags </span>
              </p>
              <div class="pc-newsletter-btn mt-4 mx-auto">
                <button class="btn" onclick="window.location.href='cars.html'">Book Now</button>
              </div>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 3 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img class="card-img-top" src="assets/images/cars/car3.png" alt="Card image" style="width:100%;">
            <!-- Price -->
            <div class="pc-carPriceBadge px-3 py-2"><span>From £200</span></div>
            <!-- Price -->
            <div class="card-body">
              <h5 class="card-title">Mercedes E-Class</h5>
              <hr class="w-25 text-danger">
              <p class="card-text">
                <span class="d-block"><i class="fa-solid fa-check"></i> 4 Passangers </span>
                <span class="d-block"><i class="fa-solid fa-check"></i> 2 Bags </span>
              </p>
              <div class="pc-newsletter-btn mt-4 mx-auto">
                <button class="btn" onclick="window.location.href='cars.html'">Book Now</button>
              </div>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 4 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img class="card-img-top" src="assets/images/cars/car1.png" alt="Card image" style="width:100%;">
            <!-- Price -->
            <div class="pc-carPriceBadge px-3 py-2"><span>From £200</span></div>
            <!-- Price -->
            <div class="card-body">
              <h5 class="card-title">EQV</h5>
              <hr class="w-25 text-danger">
              <p class="card-text">
                <span class="d-block"><i class="fa-solid fa-check"></i> 4 Passangers </span>
                <span class="d-block"><i class="fa-solid fa-check"></i> 2 Bags </span>
              </p>
              <div class="pc-newsletter-btn mt-4 mx-auto">
                <button class="btn" onclick="window.location.href='cars.html'">Book Now</button>
              </div>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- End -->
    </div>
  </section>
    <!-- END:: Car Card Slider -->

    <!-- START:: Banner -->
    <section class="pc-home-banner p-3 mt-3">
      <div class="container mx-auto py-3">
        <div class="row">
          <!-- 1 -->
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="1000">
            <h2 class="text-white"><b>Now we have <span class="text-red">2000</span> Locations</b></h2>
            <div>
              <p class="text-white">Labore dolore magna aliqua ipsum veniam quis nostrud exercitation voluptate eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod.</p>
            </div>
            <!-- Banner Icons Box --> 
            <div class="pc-bi-box">
              <!-- Icons -->
                <div class="pc-home-banner-icon d-flex gap-2 align-items-center">
                  <div><i class="fa-solid fa-phone fa-2xl"></i></div>
                  <div>
                    <span class="d-block text-white">For Booking Rides</span>
                    <h5 class="text-red">+44 7883 846758</h5>
                    <span class="d-block text-white">We are present 24/7</span>
                  </div>
                </div>
                <!-- Icons -->
                <!-- Icons -->
                <div class="pc-home-banner-icon d-flex gap-2 align-items-center">
                  <div><i class="fa-solid fa-phone fa-2xl"></i></div>
                  <div>
                    <span class="d-block text-white">For Booking Rides</span>
                    <h5 class="text-red">+44 7883 846758</h5>
                    <span class="d-block text-white">We are present 24/7</span>
                  </div>
                </div>
              <!-- Icons -->
            </div>
            <!-- Banner Icons Box --> 
          </div>
          <!-- 2 -->
          <div class="col-lg-6 mt-3" data-aos="fade-left" data-aos-delay="1000">
            <div>
              <img src="assets/images/cars/img-location-map.png" alt="map" class="img-fluid">
              <!-- Numbers -->
              <div class="pc-bannerNumbers">
                <!-- 1 -->
                <div>
                  <h2 class="text-red">
                    1,000
                  </h2>
                  <span class="d-block text-white">Heading 1</span>
                </div>
                <!-- 2 -->
                <div>
                  <h2 class="text-red">
                    1,000
                  </h2>
                  <span class="d-block text-white">Heading 2</span>
                </div>
                <!-- 3 -->
                <div>
                  <h2 class="text-red">
                    1,000
                  </h2>
                  <span class="d-block text-white">Heading 3</span>
                </div>
                <!-- END -->
              </div>
              <!-- Numbers -->
            </div>
          </div>
          <!-- End -->
        </div>
      </div>
    </section>
    <!-- END:: Banner -->

    <!-- START:: Service -->
    <section class="mt-4">
      <div class = "title pt-3 d-flex justify-content-center mb-3">
          <h2 class = "position-relative ms-4">Our Services</h2>
      </div>
      <div class="container"><p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque animi quae vel doloribus magni adipisci explicabo, placeat quos quisquam a rerum alias totam suscipit ab consequatur possimus eius temporibus rem vero nisi tempore magnam voluptates? Dicta, earum.</p></div>
    
    <div class="owl-carousel container">      
        <!-- 1 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img onclick="window.location.href='airport.html'" class="card-img-top img-fluid" src="assets/images/900x600/1.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Airport Transfer</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!... <a href="airport.html" class="text-red">Read More</a>
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 2 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img onclick="window.location.href='wedding.html'" class="card-img-top img-fluid" src="assets/images/900x600/2.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Wedding</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!... <a href="wedding.html" class="text-red">Read More</a>
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 3 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img onclick="window.location.href='events.html'" class="card-img-top img-fluid" src="assets/images/900x600/3.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Events</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!... <a href="events.html" class="text-red">Read More</a>
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 4 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img onclick="window.location.href='business.html'" class="card-img-top img-fluid" src="assets/images/900x600/4.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Business</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!... <a href="business.html" class="text-red">Read More</a>
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 5 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000"
          >
            <img onclick="window.location.href='tours.html'" class="card-img-top img-fluid" src="assets/images/900x600/5.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Tours</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!... <a href="tours.html" class="text-red">Read More</a>
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- End -->
    </div>
  </section>
    <!-- END:: Service -->

    <!-- START:: Why Us -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-calendar4-week"></i>
              <div class="card-body">
                <h5 class="card-title">Corporis dolorem</h5>
                <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab inventore officiis aut voluptatibus.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Voluptates dolores</h5>
                <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-chat-square-text"></i>
              <div class="card-body">
                <h5 class="card-title">Eum ut aspernatur</h5>
                <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>
    <!-- END:: Why Us -->
    
    <!-- START:: Benam Section -->
    <section class="pc-benaam bg-light p-4">
      <!-- LOGO and Name -->
      <div class="pc-navbar-mobile-logo justify-content-center">
        <div class="pc-navbar-logo p-2"><i class="fa-solid fa-car"></i></div>
        <div class="pc-navbar-name"><h5>Prime Chauffeur</h5></div>
      </div>

      <!-- 4 Info Boxes -->
      <div class="mt-4">
        <div class="row gap-3 d-flex justify-content-center">
          <!-- 1 -->
          <div class="col-lg-2 bg-light shadow py-3" data-aos="zoom-in" data-aos-delay="800">
            <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center">
              <li><i class="fa-solid fa-phone fa-2xl text-red"></i></li>
              <li class="mt-4">+44 7883 846758</li>
              <li class="text-red">Round-The-Clock</li>
            </ul>
          </div>
          <!-- 2 -->
          <div class="col-lg-2 bg-light shadow py-3" data-aos="zoom-in" data-aos-delay="800">
            <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center">
              <li><i class="fa-solid fa-location-dot fa-2xl text-red"></i></li>
              <li class="mt-4">702 Main St</li>
              <li>South Carolina, USA</li>
            </ul>
          </div>
          <!-- 3 -->
          <div class="col-lg-2 bg-light shadow py-3" data-aos="zoom-in" data-aos-delay="800">
            <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center">
              <li><i class="fa-solid fa-envelope fa-2xl text-red"></i></li>
              <li class="mt-4">tahir@mtech.com</li>
              <li>afnan@mtech.com</li>
            </ul>
          </div>
          <!-- 4 -->
          <div class="col-lg-2 bg-light shadow py-3" data-aos="zoom-in" data-aos-delay="800">
            <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center">
              <li><i class="fa-solid fa-clock fa-2xl text-red"></i></li>
              <li class="mt-4"><b class="text-red">Mon to Sat:</b> 9AM - 8PM</li>
              <li><b class="text-red">Sunday:</b> 10AM - 6PM</li>
            </ul>
          </div>
          <!-- end -->
        </div>
      </div>
    </section>
    <!-- END:: Benam Section -->
    
    <!-- START:: Testimonials -->
    <section class="pc-testimonial">
      <div class="testimonial-slider">
        <div id="carouselExampleControls" class="carousel carousel-dark">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <div class="testimonial-title">
                  <h2 class="fw-bold display-6">What our customers say?</h2>
                </div>
                <div>
                  <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, eaque? Doloremque provident labore accusantium nostrum architecto? Dolore, sed. Explicabo ipsum et accusantium odio quis hic vero ea obcaecati ullam laboriosam?</p>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class="col-md-8">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="card w-75 mx-auto ">
                      <div class="img-wrapper"><img src="assets/images/person/jasmine.jpg" class="d-block w-100" alt="..."> </div>
                      <div class="card-body">
                        <h5 class="card-title">Mubeen Akbar</h5>
                        <i class="fa fa-star text-warning pe-1"></i>
                        <i class="fa fa-star text-warning pe-1"></i>
                        <i class="fa fa-star text-warning pe-1"></i>
                        <i class="fa fa-star text-warning pe-1"></i>
                        <i class="fa fa-star text-warning pe-1"></i>
                        <p class="card-text">Some quick example text to build on the card title and make up
                          the bulk of the
                          card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card w-75 mx-auto">
                      <div class="img-wrapper"><img src="assets/images/person/momina.jpg" class="d-block w-100" alt="..."> </div>
                      <div class="card-body">
                        <h5 class="card-title">Mehwish Mushtaq</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                          the bulk of the
                          card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card w-75 mx-auto">
                      <div class="img-wrapper"><img src="assets/images/person/nisma.jpg" class="d-block w-100" alt="..."> </div>
                      <div class="card-body">
                        <h5 class="card-title">Saima Asad</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                          the bulk of the
                          card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card w-75 mx-auto">
                      <div class="img-wrapper"><img src="assets/images/person/mewhish.jpg" class="d-block w-100" alt="..."> </div>
                      <div class="card-body">
                        <h5 class="card-title">Momina Hassan</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                          the bulk of the
                          card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card w-75 mx-auto">
                      <div class="img-wrapper"><img src="assets/images/person/tahir.jpg" class="d-block w-100" alt="..."> </div>
                      <div class="card-body">
                        <h5 class="card-title">Tahir Khadim</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                          the bulk of the
                          card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card w-75 mx-auto">
                      <div class="img-wrapper"><img src="assets/images/person/afnan.jpg" class="d-block w-100" alt="..."> </div>
                      <div class="card-body">
                        <h5 class="card-title">Afnan Safder</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                          the bulk of the
                          card's content.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <!-- END:: Testimonials -->
    
    <!-- START:: News Letter -->
    <div class="p-5 bg-light">
      <h3 class="text-center">Subscribe to News Letter</h3>
        <form action="#" method="post">
          <div class="mb-3 mt-4">
            <div class="pc-newsletter" >
              <div>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email">
              </div>
              <div class="pc-newsletter-btn">
                <button class="btn">Subscribe</button>
              </div>
            </div>
          </div>
        </form>
    </div>
    <!-- END:: News Letter -->
    
  <!-- START:: Footer -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="footer-grid-column col-md-1 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="footer-grid-column col-md-1 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="footer-grid-column col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
    </div>
    <!-- Copyright -->
  </footer>
    <!-- END:: Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('frontend/assets/purecounter/purecounter_vanilla.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Odometer JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
    <script>
    $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      autoPlay: 1000,
      items : 6,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        425: {
          items: 1
        },
        768: {
          items: 3
        },
        1024: {
          items: 4
        }
      }
    });
    });
    // Initialize AOS
    AOS.init();
    PureCounter();
    </script>
</body>
</html>