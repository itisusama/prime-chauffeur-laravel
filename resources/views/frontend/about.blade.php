@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
@include('frontend.components.banner', [
    'pageTitle' => 'About Us',
    'bannerText' => 'Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.',
    'breadcrumb' => 'About',
])

    <!-- START:: image and info -->
    <section class="container mt-4 mb-4">
        <div class="row">
            <!-- map Image -->
            <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="1000">
                <img src="{{asset('frontend/assets/images/cars/locations-map.png')}}" class="img-fluid" alt="map">
            </div>
            <!-- information -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="1000">
                <h3>About Company</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi sit distinctio consequatur minima, nobis quibusdam perspiciatis maxime aspernatur blanditiis nam voluptate soluta quo possimus quas fugit laudantium, expedita facilis impedit. Harum aliquam at assumenda enim eveniet nisi iusto voluptas!</p>
                <div class="pc-newsletter-btn mt-4">
                   <button class="btn">Hire a Car</button>
                </div>
            </div>
        </div>
    </section>
    <!-- END:: image and info -->

    <!-- START:: Counter -->
    <section class="pc-counter">
        <div class="container mt-4 mb-4">
    
            <div class="col text-center mb-4">
                <h3 class="text-white">Counter Heading</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            
            <div class="row">	
            </div>
                <div class="row text-center">
                    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="800">
                    <div class="counter shadow">
              <i class="fa fa-code fa-2xl"></i>
              <h3 class="timer count-title count-number" data-to="100" data-speed="1500"></h3>
               <p class="count-text ">Our Customer</p>
            </div>
                    </div>
                      <div class="col-md-3" data-aos="zoom-in" data-aos-delay="800">
                       <div class="counter shadow">
              <i class="fa fa-coffee fa-2xl"></i>
              <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
              <p class="count-text ">Happy Clients</p>
            </div>
                      </div>
                      <div class="col-md-3" data-aos="zoom-in" data-aos-delay="800">
                          <div class="counter shadow">
              <i class="fa fa-lightbulb fa-2xl"></i>
              <h3 class="timer count-title count-number" data-to="11900" data-speed="1500"></h3>
              <p class="count-text ">Project Complete</p>
            </div></div>
                      <div class="col-md-3" data-aos="zoom-in" data-aos-delay="800">
                      <div class="counter shadow">
              <i class="fa fa-bug fa-2xl"></i>
              <h3 class="timer count-title count-number" data-to="157" data-speed="1500"></h3>
              <p class="count-text ">Coffee With Clients</p>
            </div>
                      </div>
                 </div>
        </div>
    </section>
    <!-- END:: Counter -->
    <!-- START:: Our Team -->
    <section class="mt-4">
      <div class = "title pt-3 d-flex justify-content-center mb-3">
          <h2 class = "position-relative ms-4">Our Team</h2>
      </div>
      <div class="container"><p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque animi quae vel doloribus magni adipisci explicabo, placeat quos quisquam a rerum alias totam suscipit ab consequatur possimus eius temporibus rem vero nisi tempore magnam voluptates? Dicta, earum.</p></div>
    
    <div class="owl-carousel container">      
        <!-- 1 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/person/person1.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Manan</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!.
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 2 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/person/person2.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Ahmad</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!.
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 3 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/person/person3.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Nauman</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!.
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 4 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/person/person4.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Khizar</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!.
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 5 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/person/person5.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Tahir</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!.
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 6 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/person/person6.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Afnan</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!.
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- 7 -->
        <div class="item">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img class="card-img-top img-fluid" src="{{asset('frontend/assets/images/person/person7.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Moiz</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!.
              </p>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- End -->
    </div>
  </section>
    <!-- END:: Our Team -->
    @include('frontend.components.homebanner')
    <!-- START:: Benam Section -->
    <section class="pc-benaam bg-light p-4">
    
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
            <div class="col-md-2 bg-light shadow py-3" data-aos="zoom-in" data-aos-delay="800">
              <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center">
                <li><i class="fa-solid fa-envelope fa-2xl text-red"></i></li>
                <li class="mt-4">tahir@mtech.com</li>
                <li>afnan@mtech.com</li>
              </ul>
            </div>
            <!-- 4 -->
            <div class="col-md-2 bg-light shadow py-3" data-aos="zoom-in" data-aos-delay="800">
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
    AOS.init();
</script>
<script src="{{asset('frontend/assets/js/counter.js')}}"></script>
@endsection