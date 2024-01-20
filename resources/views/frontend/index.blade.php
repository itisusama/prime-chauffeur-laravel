@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
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
            <img class="card-img-top" src="{{asset('frontend/assets/images/cars/car1.png')}}" alt="Card image" style="width:100%;">
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
            <img class="card-img-top" src="{{asset('frontend/assets/images/cars/car2.png')}}" alt="Card image" style="width:100%;">
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
            <img class="card-img-top" src="{{asset('frontend/assets/images/cars/car3.png')}}" alt="Card image" style="width:100%;">
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
            <img class="card-img-top" src="{{asset('frontend/assets/images/cars/car1.png')}}" alt="Card image" style="width:100%;">
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
    @include('frontend.components.homebanner')
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
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/1.jpg')}}" alt="Card image" style="width:100%;">
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
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/2.jpg')}}" alt="Card image" style="width:100%;">
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
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/3.jpg')}}" alt="Card image" style="width:100%;">
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
            <img onclick="window.location.href='business.html'" class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/4.jpg')}}" alt="Card image" style="width:100%;">
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
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/5.jpg')}}" alt="Card image" style="width:100%;">
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

    @include('frontend.components.whyus')
    
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
    @include('frontend.components.testimonial')
    @include('frontend.components.newsletter')
@endsection
@section('custom-js')
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
@endsection