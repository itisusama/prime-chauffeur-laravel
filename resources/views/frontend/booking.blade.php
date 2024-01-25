@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
@include('frontend.components.banner', [
    'pageTitle' => 'Book Here',
    'bannerText' => 'Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.',
    'breadcrumb' => 'Booking',
    'showCarsBreadcrumb' => true,
])
    <!-- START:: Form -->
    <section class="container mt-4">
      <h2>Book a Car</h2>
      <hr class="w-75 text-red">
      <form action="#" method="post">
        @csrf
        <!-- Row -->
        <div class="row">
          <!-- left -->
          <div class="col-lg-6">
            <!-- First Name -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">First Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your First Name" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email Address" required>
            </div>
            <!-- Pickup Date -->
              <div class="mb-3">
                <label for="date" class="form-label">Pickup Date</label>
                <div class="input-group date" id="datepicker">
                  <input type="date" class="form-control" id="date"/>
                </div>
              </div>
              <!-- Timings -->
              <div class="mb-3">
                <label for="text" class="form-label">Select Timings</label>
                <div class="input-group date" id="timepicker">
                  <input type="time" class="form-control" id="time" placeholder="Select The Timings"/>
                </div>
              </div>
              <!-- Location -->
              <!-- Pick a location -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Pick a Location</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Location</option>
                <option value="1">Location 1</option>
                <option value="2">Location 2</option>
                <option value="3">Location 3</option>
                <option value="4">Location 4</option>
              </select>
            </div>
              <!-- Create Account -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Create Account
                </label>
              </div>
            <!-- END -->
          </div>
          <!-- Right -->
          <div class="col-lg-6">
            <!-- Last Name -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Last Name" required>
            </div>
            <!-- Phone Number -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Phone</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone Number" required>
            </div>
            <!-- Drop off Date -->
            <div class="mb-3">
              <label for="date" class="form-label">Drop off Date</label>
              <div class="input-group date" id="datepicker2">
                <input type="date" class="form-control" id="date2"/>
              </div>
            </div>
            <!-- Passangers -->
            <!-- Phone Number -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Number of Passangers</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Passangers</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <!-- Destination -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Destinations</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Destination</option>
                <option value="1">Location 1</option>
                <option value="2">Location 2</option>
                <option value="3">Location 3</option>
                <option value="4">Location 4</option>
              </select>
            </div>
            <!-- END -->
          </div>

          <!-- END -->
        </div>
        <!-- Row -->
      </form>
    </section>
    <!-- START:: Form -->

    <!-- START:: Car Card with Payment -->
    <section class="container mt-4 mb-4">
      <div class="row p-2">
        <!-- Left Side -->
        <div class="col-md-6 p-3 mb-3">
            <div class="pc-payment-card bg-light py-3">
              <!-- Image -->
              <div class="p-4 d-flex justify-content-center"><img src="{{asset('frontend/assets/images/cars/car3.png')}}" class="img-fluid w-50" alt="car"></div>
              <!-- Name -->
              <div><h3 class="text-center">Car Name</h3></div>
              <!-- Boxes -->
              <div class="row px-4">
                  <div class="col-md-6 border p-2 text-white">Price: <span class="text-red"><b>£200</b> /Hour</span></div>
                  <div class="col-md-6 border p-2 text-white">Price: <span class="text-red"><b>£200</b> /Day</span></div>
              </div>
              <!-- Hire Button -->
              <div class="pc-newsletter-btn mt-4 mx-auto">
                  <button class="btn px-5" onclick="window.location.href='{{route('booking')}}'">Book Now</button>
              </div>
              <!-- End -->
            </div>
        </div>
        <!-- Right Side -->
        <div class="col-md-6 p-3">
          <div class="bg-light p-3">
            <!-- Check Payment -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Check Payment
              </label>
            </div>
            <!-- Direct Payment -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Direct Bank Transfer
              </label>
            </div>
            <!-- Para -->
            <div class="container">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem vel eligendi quisquam quo nobis, cum magnam doloremque id officiis laboriosam. Debitis voluptatem, dolore ea ex veritatis cum aliquam est exercitationem id impedit ab, vitae quam adipisci? Nihil possimus optio vel ducimus nesciunt! Id eius amet consequatur labore adipisci totam, obcaecati ab a recusandae deleniti architecto voluptate nihil laboriosam quo sed sapiente autem! Quidem nam dolorem ut quaerat qui voluptatibus!</p>
            </div>
            <!-- Direct Payment -->
            <!-- Direct Payment -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Direct Bank Transfer
              </label>
            </div>
            <div><img src="{{asset('frontend/assets/images/cars/payment.png')}}" alt="Payment"></div>
            <!-- Hire Button -->
            <div class="pc-newsletter-btn mt-4">
              <button class="btn px-5" onclick="window.location.href='route('booking')'">Pay Now</button>
            </div>
            <!-- END -->
          </div>
        </div>
        <!-- end -->
      </div>
    </section>
    <!-- END:: Car Card with Payment -->
@endsection
@section('custom-js')
<script>    
    AOS.init();
</script>
@endsection