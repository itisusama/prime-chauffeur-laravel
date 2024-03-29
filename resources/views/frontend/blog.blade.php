@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
@include('frontend.components.banner', [
    'pageTitle' => 'All Blogs',
    'bannerText' => 'Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.',
    'breadcrumb' => 'Blogs',
    'showCarsBreadcrumb' => false,
])
  <section class="pc-blogs mt-4 mb-4 container-xl">
    <div class="row">
      <!-- left Side -->
      <div class="col-lg-9">
        <!-- START:: Blog Cards -->
        <div class="row">
          <div class="col-md-4 p-2">
              <!-- card -->
              <div class="card" data-aos="fade-up" data-aos-delay="1000">
                <img onclick="window.location.href='{{route('singleblog')}}'" class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/1.jpg')}}" alt="Card image" style="width:100%;">
                <div class="card-body">
                  <h5 class="card-title">Title Goes Here</h5>
                  <div class="d-flex gap-2">
                    <span class="d-block"><small><i class="fa-solid fa-eye text-red"></i> Reads</small></span>
                    <span class="d-block"><small><i class="fa-solid fa-comment text-red"></i> Comments</small></span>
                  </div>
                  <p class="card-text small">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!...
                    <div class="pc-newsletter-btn">
                      <button onclick="window.location.href='{{route('singleblog')}}'" class="btn">Read More</button>
                    </div>
                  </p>
                </div>
              </div>
              <!-- card -->
          </div>
          <div class="col-md-4 p-2">
            <!-- card -->
            <div class="card" data-aos="fade-down" data-aos-delay="1000">
              <img onclick="window.location.href='{{route('singleblog')}}'" class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/2.jpg')}}" alt="Card image" style="width:100%;">
              <div class="card-body">
                <h5 class="card-title">Title Goes Here</h5>
                <div class="d-flex gap-2">
                  <span class="d-block"><small><i class="fa-solid fa-eye text-red"></i> Reads</small></span>
                  <span class="d-block"><small><i class="fa-solid fa-comment text-red"></i> Comments</small></span>
                </div>
                <p class="card-text small">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!...
                  <div class="pc-newsletter-btn">
                    <button onclick="window.location.href='{{route('singleblog')}}'" class="btn">Read More</button>
                  </div>
                </p>
              </div>
            </div>
            <!-- card -->
        </div>
        <div class="col-md-4 p-2">
          <!-- card -->
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <img onclick="window.location.href='{{route('singleblog')}}'" class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/3.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Title Goes Here</h5>
              <div class="d-flex gap-2">
                <span class="d-block"><small><i class="fa-solid fa-eye text-red"></i> Reads</small></span>
                <span class="d-block"><small><i class="fa-solid fa-comment text-red"></i> Comments</small></span>
              </div>
              <p class="card-text small">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!...
                <div class="pc-newsletter-btn">
                  <button onclick="window.location.href='{{route('singleblog')}}'" class="btn">Read More</button>
                </div>
              </p>
            </div>
          </div>
          <!-- card -->
      </div>
        </div>
        <!-- END:: Blog Cards -->
        <!-- START:: Blog Cards -->
        <div class="row">
          <div class="col-md-4 p-2">
              <!-- card -->
              <div class="card" data-aos="fade-down" data-aos-delay="1000">
                <img onclick="window.location.href='{{route('singleblog')}}'" class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/4.jpg')}}" alt="Card image" style="width:100%;">
                <div class="card-body">
                  <h5 class="card-title">Title Goes Here</h5>
                  <div class="d-flex gap-2">
                    <span class="d-block"><small><i class="fa-solid fa-eye text-red"></i> Reads</small></span>
                    <span class="d-block"><small><i class="fa-solid fa-comment text-red"></i> Comments</small></span>
                  </div>
                  <p class="card-text small">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!...
                    <div class="pc-newsletter-btn">
                      <button onclick="window.location.href='{{route('singleblog')}}'" class="btn">Read More</button>
                    </div>
                  </p>
                </div>
              </div>
              <!-- card -->
          </div>
          <div class="col-md-4 p-2">
            <!-- card -->
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
              <img onclick="window.location.href='{{route('singleblog')}}'" class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/5.jpg')}}" alt="Card image" style="width:100%;">
              <div class="card-body">
                <h5 class="card-title">Title Goes Here</h5>
                <div class="d-flex gap-2">
                  <span class="d-block"><small><i class="fa-solid fa-eye text-red"></i> Reads</small></span>
                  <span class="d-block"><small><i class="fa-solid fa-comment text-red"></i> Comments</small></span>
                </div>
                <p class="card-text small">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!...
                  <div class="pc-newsletter-btn">
                    <button onclick="window.location.href='{{route('singleblog')}}'" class="btn">Read More</button>
                  </div>
                </p>
              </div>
            </div>
            <!-- card -->
        </div>
        <div class="col-md-4 p-2">
          <!-- card -->
          <div class="card" data-aos="fade-down" data-aos-delay="1000">
            <img onclick="window.location.href='{{route('singleblog')}}'" class="card-img-top img-fluid" src="{{asset('frontend/assets/images/900x600/6.jpg')}}" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title">Title Goes Here</h5>
              <div class="d-flex gap-2">
                <span class="d-block"><small><i class="fa-solid fa-eye text-red"></i> Reads</small></span>
                <span class="d-block"><small><i class="fa-solid fa-comment text-red"></i> Comments</small></span>
              </div>
              <p class="card-text small">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis recusandae sint similique!...
                <div class="pc-newsletter-btn">
                  <button onclick="window.location.href='{{route('singleblog')}}'" class="btn">Read More</button>
                </div>
              </p>
            </div>
          </div>
          <!-- card -->
      </div>
        </div>
        <!-- END:: Blog Cards -->
        <div class="container">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Right Side -->
      <div class="col-lg-3 p-2">
        @include('frontend.components.right')
      </div>
      <!-- End -->
    </div>
  </section>
  @include('frontend.components.newsletter')
@endsection
@section('custom-js')
    <script>
        AOS.init();
    </script>
@endsection