@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
@include('frontend.components.banner', [
    'pageTitle' => 'About Us',
    'bannerText' => 'Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.',
    'breadcrumb' => 'About',
    'showCarsBreadcrumb' => false,
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

      <!-- START: FAQ Section -->
    <div class="container mb-5 mt-5 pc-faq-section">
        <div class = "title pt-3 d-flex justify-content-center mb-3">
            <h2 class = "position-relative ms-4">FAQ</h2>
        </div>
        <div class="container"><p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque animi quae vel doloribus magni adipisci explicabo, placeat quos quisquam a rerum alias totam suscipit ab consequatur possimus eius temporibus rem vero nisi tempore magnam voluptates? Dicta, earum.</p></div>

        <div class="row">
          <!-- Section 1 - Living Room Furniture -->
          <div class="col-md-6"> <!-- Adjusted width to col-md-6 -->
            <div class="card">
              <div class="card-header" id="livingRoomHeader">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#livingRoomCollapse" aria-expanded="true" aria-controls="livingRoomCollapse">
                    Your Order
                  </button>
                </h2>
              </div>
              <div id="livingRoomCollapse" class="collapse show" aria-labelledby="livingRoomHeader" data-parent="#faqAccordion">
                <div class="card-body">
                  <!-- FAQ Item 1 - Where is my order? -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq1Collapse" aria-expanded="true" aria-controls="faq1Collapse">
                        Where is my order?
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq1Collapse" aria-expanded="true" aria-controls="faq1Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faq1Collapse" class="collapse" aria-labelledby="faq1Header" data-parent="#livingRoomCollapse">
                    <p>Once your order has been shipped, you will receive an email with a tracking number. You can use this tracking number to monitor the status of your delivery.</p>
                  </div>

                  <!-- FAQ Item 2 - How can I make a complaint? -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq2Collapse" aria-expanded="true" aria-controls="faq2Collapse">
                        How can I make a complaint?
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq2Collapse" aria-expanded="true" aria-controls="faq2Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faq2Collapse" class="collapse" aria-labelledby="faq2Header" data-parent="#livingRoomCollapse">
                    <p>If you have any issues or complaints about your order, please contact our customer service team through our <a href="contact.html">contact page</a>. We will be happy to assist you.</p>
                  </div>

                  <!-- Add more FAQ items as needed -->
                </div>
              </div>
            </div>
          </div>

          <!-- Section 2 - Delivery -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header" id="deliveryHeader">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#deliveryCollapse" aria-expanded="true" aria-controls="deliveryCollapse">
                    Delivery
                  </button>
                </h2>
              </div>
              <div id="deliveryCollapse" class="collapse show" aria-labelledby="deliveryHeader" data-parent="#faqAccordion">
                <div class="card-body">
                  <!-- FAQ Item 1 - Delivery Options -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery1Collapse" aria-expanded="true" aria-controls="faqDelivery1Collapse">
                        Delivery Options
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery1Collapse" aria-expanded="true" aria-controls="faqDelivery1Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faqDelivery1Collapse" class="collapse" aria-labelledby="faqDelivery1Header" data-parent="#deliveryCollapse">
                    <p>We offer various delivery options, including standard and express delivery. Choose the one that suits you best.</p>
                  </div>

                  <!-- FAQ Item 2 - Tracking Orders -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery2Collapse" aria-expanded="true" aria-controls="faqDelivery2Collapse">
                        Tracking Orders
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery2Collapse" aria-expanded="true" aria-controls="faqDelivery2Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faqDelivery2Collapse" class="collapse" aria-labelledby="faqDelivery2Header" data-parent="#deliveryCollapse">
                    <p>Once your order is shipped, you will receive a tracking number to monitor the delivery status. You can use this tracking number on our website to track your order.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- New Row for Payment and Refunds & Returns -->
        <div class="row mt-4">
          <!-- Section 3 - Payment -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header" id="paymentHeader">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#paymentCollapse" aria-expanded="true" aria-controls="paymentCollapse">
                    Payment
                  </button>
                </h2>
              </div>
              <div id="paymentCollapse" class="collapse show" aria-labelledby="paymentHeader" data-parent="#faqAccordion">
                <div class="card-body">
                  <!-- FAQ Item 1 - Payment Methods -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment1Collapse" aria-expanded="true" aria-controls="faqPayment1Collapse">
                        Payment Methods
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment1Collapse" aria-expanded="true" aria-controls="faqPayment1Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faqPayment1Collapse" class="collapse" aria-labelledby="faqPayment1Header" data-parent="#paymentCollapse">
                    <p>We accept various payment methods, including credit cards, PayPal, and other online payment services.</p>
                  </div>

                  <!-- FAQ Item 2 - Payment Security -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment2Collapse" aria-expanded="true" aria-controls="faqPayment2Collapse">
                        Payment Security
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment2Collapse" aria-expanded="true" aria-controls="faqPayment2Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faqPayment2Collapse" class="collapse" aria-labelledby="faqPayment2Header" data-parent="#paymentCollapse">
                    <p>Your payment information is secure. We use encryption technology to protect your personal and financial information.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Section 4 - Refunds & Returns -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header" id="returnsHeader">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#returnsCollapse" aria-expanded="true" aria-controls="returnsCollapse">
                    Refunds & Returns
                  </button>
                </h2>
              </div>
              <div id="returnsCollapse" class="collapse show" aria-labelledby="returnsHeader" data-parent="#faqAccordion">
                <div class="card-body">
                  <!-- FAQ Item 1 - Return Policy -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns1Collapse" aria-expanded="true" aria-controls="faqReturns1Collapse">
                        Return Policy
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns1Collapse" aria-expanded="true" aria-controls="faqReturns1Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faqReturns1Collapse" class="collapse" aria-labelledby="faqReturns1Header" data-parent="#returnsCollapse">
                    <p>Our return policy allows you to return items within 30 days of purchase. Please review our <a href="return-policy.html">return policy</a> for more details.</p>
                  </div>

                  <!-- FAQ Item 2 - Refund Process -->
                  <div class="faq-item d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                      <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns2Collapse" aria-expanded="true" aria-controls="faqReturns2Collapse">
                        Refund Process
                      </button>
                    </h5>
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns2Collapse" aria-expanded="true" aria-controls="faqReturns2Collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div id="faqReturns2Collapse" class="collapse" aria-labelledby="faqReturns2Header" data-parent="#returnsCollapse">
                    <p>Our refund process is designed to ensure a smooth and timely return of funds in case of a return. Refunds are typically processed within 5 business days.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END: FAQ Section -->
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

<script>
   document.addEventListener('DOMContentLoaded', function () {
    // Get all buttons with the class 'btn-link'
    var accordionButtons = document.querySelectorAll('.btn-link');

    accordionButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        // Toggle the 'fa-plus' and 'fa-minus' classes on the button's child icon
        var icon = this.querySelector('.fas');
        if (icon.classList.contains('fa-plus')) {
          icon.classList.remove('fa-plus');
          icon.classList.add('fa-minus');
        } else {
          icon.classList.remove('fa-minus');
          icon.classList.add('fa-plus');
        }

        // Toggle the collapse element associated with the button
        var targetId = this.getAttribute('data-target');
        var targetCollapse = document.querySelector(targetId);
        if (targetCollapse.classList.contains('show')) {
          targetCollapse.classList.remove('show');
        } else {
          targetCollapse.classList.add('show');
        }
      });
    });
  });
</script>

<script src="{{asset('frontend/assets/js/counter.js')}}"></script>
@endsection
