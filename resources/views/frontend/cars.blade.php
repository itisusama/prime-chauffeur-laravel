@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
<!-- START:: Banner -->
<section class="pc-contact-banner py-3">
        <div class="container mt-3" data-aos="fade-right" data-aos-delay="1000">
            <h1 class="text-red">Cars</h1>
            <div class="text-white w-50">
                <p>Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.</p>
            </div>
            <!-- Bread Crumb -->
            <div>
              <p class="text-white"><a href="index.html">Home</a> > Cars</p>
            </div>
            <!-- Bread Crumb -->
        </div>
    </section>
    <!-- END:: Banner -->
    
    <!-- START:: Left-right -->
    <section class="pc-cars mt-4 container-xl">
        <div class="row">
            <!-- Left -->
            <div class="col-md-9">
                <!-- Two Cars -->
                <div class="row">
                    <!-- 1 -->
                    <div class="col-lg-6 mb-3" data-aos="zoom-in" data-aos-delay="800">
                        <!-- Image -->
                        <div class="p-4"><img src="{{asset('frontend/assets/images/cars/car1.png')}}" class="img-fluid w-100 shadow" alt="car"></div>
                        <!-- Name -->
                        <div><h3 class="text-center">Mercedes S-Class</h3></div>
                        <!-- Boxes -->
                        <div class="row px-4">
                            <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Hour</span></div>
                            <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Day</span></div>
                        </div>
                        <!-- Hire Button -->
                        <div class="pc-newsletter-btn mt-4 mx-auto">
                            <button class="btn px-5" onclick="window.location.href='booking.html'">Book Now</button>
                        </div>
                        <!-- End -->
                    </div>
                    <!-- 2 -->
                    <div class="col-lg-6 mb-3" data-aos="zoom-in" data-aos-delay="800">
                      <!-- Image -->
                      <div class="p-4"><img src="{{asset('frontend/assets/images/cars/car2.png')}}" class="img-fluid w-100 shadow" alt="car"></div>
                      <!-- Name -->
                      <div><h3 class="text-center">Mercedes V-Class</h3></div>
                      <!-- Boxes -->
                      <div class="row px-4">
                          <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Hour</span></div>
                          <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Day</span></div>
                      </div>
                      <!-- Hire Button -->
                      <div class="pc-newsletter-btn mt-4 mx-auto">
                          <button class="btn px-5" onclick="window.location.href='booking.html'">Book Now</button>
                      </div>
                      <!-- End -->
                  </div>
                    <!-- end -->
                </div>
                <!-- Two Cars -->
                <!-- Two Cars -->
                <div class="row">
                  <!-- 1 -->
                  <div class="col-lg-6 mb-3" data-aos="zoom-in" data-aos-delay="800">
                      <!-- Image -->
                      <div class="p-4"><img src="{{asset('frontend/assets/images/cars/car3.png')}}"class="img-fluid w-100 shadow" alt="car"></div>
                      <!-- Name -->
                      <div><h3 class="text-center">Mercedes E-Class</h3></div>
                      <!-- Boxes -->
                      <div class="row px-4">
                          <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Hour</span></div>
                          <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Day</span></div>
                      </div>
                      <!-- Hire Button -->
                      <div class="pc-newsletter-btn mt-4 mx-auto">
                          <button class="btn px-5" onclick="window.location.href='booking.html'">Book Now</button>
                      </div>
                      <!-- End -->
                  </div>
                  <!-- 2 -->
                  <div class="col-lg-6 mb-3" data-aos="zoom-in" data-aos-delay="800">
                    <!-- Image -->
                    <div class="p-4"><img src="{{asset('frontend/assets/images/cars/car4.png')}}" class="img-fluid w-100 shadow" alt="car"></div>
                    <!-- Name -->
                    <div><h3 class="text-center">EQV</h3></div>
                    <!-- Boxes -->
                    <div class="row px-4">
                        <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Hour</span></div>
                        <div class="col-md-6 border p-2">Price: <span class="text-red"><b>£200</b> /Day</span></div>
                    </div>
                    <!-- Hire Button -->
                    <div class="pc-newsletter-btn mt-4 mx-auto">
                        <button class="btn px-5" onclick="window.location.href='booking.html'">Book Now</button>
                    </div>
                    <!-- End -->
                </div>
                  <!-- end -->
              </div>
              <!-- Two Cars -->
            </div>
            <!-- Right -->
            <div class="col-lg-3 mt-4">
              @include('frontend.components.right')
            </div>
            <!-- END -->
        </div>
    </section>
    <!-- END:: Left-right -->
    @include('frontend.components.homebanner')
    @include('frontend.components.newsletter')
@endsection
@section('custom-js')
    <script>
        AOS.init();
    </script>
@endsection