@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
<!-- START:: Banner -->
<section class="pc-contact-banner py-3">
        <div class="container mt-3" data-aos="fade-right" data-aos-delay="1000">
            <h1 class="text-red">Contact Us</h1>
            <div class="text-white w-50">
                <p>Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.</p>
            </div>
            <!-- Bread Crumb -->
            <div>
              <p class="text-white"><a href="index.html">Home</a> > Contact</p>
            </div>
            <!-- Bread Crumb -->
            <!-- Call Us Button -->
            <div class="pc-contactus-btn px-4"><a href="tel:+447883846758" class="btn text-white">Call Us</a></div>
            <!-- Call Us Button -->
        </div>
    </section>
    <!-- END:: Banner -->

    <!-- START:: Image with contact Info -->
    <section class="container mt-4">
      <div class="row">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
          <div class="d-flex justify-content-center shadow"><img src="{{asset('frontend/assets/images/900x600/27.jpg')}}" class="img-fluid w-100" style="height: 45vh;" alt="contact"></div>
        </div>
        <div class="col-md-6 bg-light" data-aos="fade-left" data-aos-delay="1000">
          <div class="p-4">
            <h3>Have a Question or Need more information?</h3>
            <p>Give us a call and our experienced and friendly staff would be happy to assist you.</p>
            <!-- icons -->
            <div class="contact-icons mt-4">
              <span class="d-block"><i class="fa-solid fa-phone fa-2xl text-red"></i> +44 7883 846758</span>
              <span class="d-block mt-4"><i class="fa-solid fa-envelope fa-2xl text-red"></i> example@email.com</span>
            </div>
            <!-- icons -->
          </div>
        </div>
      </div>
    </section>
    <!-- END:: Image with contact Info -->

    <!-- START:: 3 info boxes -->
    <section class="pc-contact-infoBoxes container mt-4">
      <div class="row">
        <!-- 1 -->
        <div class="col-lg-4 p-2" data-aos="zoom-in" data-aos-delay="800">
          <div class="bg-light shadow p-4">
            <h3 class="text-red">Coorporate Office</h3>
            <ul class="list-unstyled">
              <li>702 Main St, West Columbia</li>
              <li>South Carolina, 29170</li>
              <li>United States</li>
            </ul>
          </div>
        </div>
        <!-- 2 -->
        <div class="col-lg-4 p-2" data-aos="zoom-in" data-aos-delay="800">
          <div class="bg-light shadow p-4">
            <h3 class="text-red">Get In Touch</h3>
            <ul class="list-unstyled">
              <li><b>+44 7883 846758</b></li>
              <li>tahir@mtech.com</li>
              <li>afnan@mtech.com</li>
            </ul>
          </div>
        </div>
        <!-- 3 -->
        <div class="col-lg-4 p-2" data-aos="zoom-in" data-aos-delay="800">
          <div class="bg-light shadow p-4">
            <h3 class="text-red">Customer Support</h3>
            <ul class="list-unstyled">
              <li><b>Mon to Sat:</b> 09:00am - 08:00pm</li>
              <li><b>Sunday:</b> 10:00am - 06:00pm</li>
              <li>&nbsp;</li>
            </ul>
          </div>
        </div>
        <!-- END -->
      </div>
    </section>
    <!-- END:: 3 info boxes -->

<!-- ======= heading Section ======= -->
<section id="about">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>Heading</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </header>

    <div class="row about-container">

      <div class="col-lg-6 content order-lg-1 order-2">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><img src="{{asset('frontend/assets/images/svg/card-checklist.svg')}}" alt="icon"></div>
          <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
          <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><img src="{{asset('frontend/assets/images/svg/calendar4-week.svg')}}" alt="icon"></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><img src="{{asset('frontend/assets/images/svg/brightness-high-fill.svg')}}" alt="icon"></div>
          <h4 class="title"><a href="">Dolor Sitema</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>

      </div>

      <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
        <img src="{{asset('frontend/assets/images/cars/car3.png')}}" class="img-fluid" alt="">
      </div>
    </div>

  </div>
</section>
<!-- End About Section -->

    <!-- START:: Map and Form -->
    <section class="pc-mapandform mt-4">
      <div class="row">
        <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="800">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" style="border:0; width: 100%; height: auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6 bg-light p-5" data-aos="fade-left" data-aos-delay="800">
          <h2>Send Message</h2>
          <p>Have a query? Submit Us Here.</p>
          <form action="#" method="post">
            <!-- 1 -->
            <div class="row">
              <div class="col-6">
                <!-- First Name -->
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                </div>
                <!-- First Name -->
              </div>
              <div class="col-6">
                <!-- Last Name -->
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                </div>
                <!-- Last Name -->
              </div>
            </div>
            <!-- 2 -->
            <div class="row">
              <div class="col-6">
                <!-- Email -->
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <!-- Email -->
              </div>
              <div class="col-6">
                <!-- Phone -->
                <div class="mb-3">
                  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                </div>
                <!-- Phone -->
              </div>
            </div>
            <!-- 3 -->
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
            </div>
            <!-- 4 -->
            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Question or Request"></textarea>
            </div>
            <!-- end -->
            <input class="pc-contact-submit" type="submit" value="Send Message">
          </form>
        </div>
      </div>
    </section>
    <!-- END:: Map and Form -->
@endsection
@section('custom-js')
<script>
    // Initialize AOS
    AOS.init();
</script>
@endsection