@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
<!-- START:: Banner -->
<section class="pc-contact-banner py-3">
      <div class="container mt-3" data-aos="fade-right" data-aos-delay="1000">
          <h1 class="text-red">Airport</h1>
          <div class="text-white w-50">
              <p>Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.</p>
          </div>
          <!-- Bread Crumb -->
          <div>
            <p class="text-white"><a href="index.html">Home</a> > Airport</p>
          </div>
          <!-- Bread Crumb -->
      </div>
  </section>
  <!-- END:: Banner -->

  <!-- End Hero Section -->
<!-- ========== Start Section first  ========== -->
  <div class="jumbotron jumbotron-fluid feature" id="feature-first">
    <div class="container my-5">
        <div class="row justify-content-between text-center text-md-left">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h2 class="font-weight-bold">Take a look inside</h2>
                <p class="my-4">Te iisque labitur eos, nec sale argumentum scribentur no,
                    <br> augue disputando in vim. Erat fugit sit at, ius lorem deserunt deterruisset no.</p>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <img src="{{asset('frontend/assets/images/cars/car1.png')}}" alt="Take a look inside" class="mx-auto d-block">
            </div>
        </div>
    </div>
</div>
<!-- feature (green background) -->
  <main id="main">
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

            <div class="icon-box" data-aos="fade-up" data-aos-delay="800">
              <div class="icon"><img src="{{asset('frontend/assets/images/svg/card-checklist.svg')}}" alt="icon"></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="800">
              <div class="icon"><img src="{{asset('frontend/assets/images/svg/brightness-high-fill.svg')}}" alt="icon"></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="800">
              <div class="icon"><img src="{{asset('frontend/assets/images/svg/calendar4-week.svg')}}" alt="icon"></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="{{asset('frontend/assets/images/cars/car3.png')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="1000">
            <img src="{{asset('frontend/assets/images/cars/car3.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="1000">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="1000">
            <img src="{{asset('frontend/assets/images/cars/car3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="1000">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
              Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->
    @include('frontend.components.whyus')
  </main>
  <!-- End #main -->
  <!-- ========== End Section  first ========== -->
@endsection
@section('custom-js')
<script>
      AOS.init();
      PureCounter();
  </script>
@endsection