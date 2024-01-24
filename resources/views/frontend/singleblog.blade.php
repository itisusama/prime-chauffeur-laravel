@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
@include('frontend.components.banner', [
    'pageTitle' => 'Blog',
    'bannerText' => 'Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.',
    'breadcrumb' => 'Single Blog',
    'showCarsBreadcrumb' => false,
])
    <section class="mt-4 mb-4 container-xl">
    <div class="row">
        <!-- Left Side -->
        <div class="col-lg-9 p-4">
            <!-- Top Image -->
            <div class="pc-singleBlog-image">
                <img src="{{asset('frontend/assets/images/900x600/42.jpg')}}" class="img-fluid w-100 shadow-sm" alt="single-blog-image">
            </div>
            <!-- Top Image -->
            <!-- Title -->
            <div class="mt-4">
                <h2>The Blog Title Goes Here</h2>
                <hr class="w-75 text-red">
            </div>
            <!-- Title -->
            <!-- (date posted, number of comments, category) -->
            <div class="pc-dnc d-flex gap-3">
                <span class="d-block p-2"><small><i class="fa-solid fa-calendar-days"></i> 12-January-2024</small></span>
                <span class="d-block p-2"><small><i class="fa-solid fa-comment"></i> 999</small></span>
                <span class="d-block p-2"><small><i class="fa-solid fa-folder"></i> <a href="blogs.html" class="text-white" style="text-decoration: none;">Category Name</a></small></span>
            </div>
            <!-- (date posted, number of comments, category) -->
            <!-- Post -->
            <div class="pc-singleBlog-post mt-4">
              <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat.</p>
              <p>Non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnisiste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaeab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
              <!-- block images -->
              <div class="row">
                <!-- 1 -->
                <div class="col-lg-6 p-2">
                  <img src="{{asset('frontend/assets/images/900x600/7.jpg')}}" class="img-fluid shadow-sm" alt="blog-image">
                </div>
                <!-- 2 -->
                <div class="col-lg-6 p-2">
                  <img src="{{asset('frontend/assets/images/900x600/8.jpg')}}" class="img-fluid shadow-sm" alt="blog-image">
                </div>
                <!-- End -->
              </div>
              <!-- block images -->
              <p class="mt-4">Aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</p>
              <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat Non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnisiste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaeab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
            </div>
            <!-- Post -->
            <!-- Comments -->
            <div>
              <h2>Comments (999)</h2>
              <hr class="w-75 text-red">
              <!-- comments box -->
              <div class="pc-singleBlog-comments">
                <!-- Image -->
                <div class="d-flex justify-content-center"><img style="border-radius: 50%; width: 45%;" src="{{asset('frontend/assets/images/person/person10.jpg')}}" class="img-fluid" alt="comment"></div>
                <!-- Text -->
                <div>
                  <!-- Head -->
                  <div class="d-flex gap-3">
                    <span class="d-block"><b>John Doe</b></span>
                    <span class="d-block">12-January-2024</span>
                    <span class="d-block"><a href="#" class="text-red">Reply</a></span>
                  </div>
                  <!-- Head -->
                  <!-- comment -->
                  <div class="mt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolor ab quidem iure? Soluta, accusantium.</p>
                  </div>
                  <!-- comment -->
                </div>
                <!-- End -->
              </div>
              <!-- comments box -->
              <!-- comments box -->
              <div class="pc-singleBlog-comments">
                <!-- Image -->
                <div class="d-flex justify-content-center"><img style="border-radius: 50%; width: 45%;" src="{{asset('frontend/assets/images/person/person11.jpg')}}" class="img-fluid" alt="comment"></div>
                <!-- Text -->
                <div>
                  <!-- Head -->
                  <div class="d-flex gap-3">
                    <span class="d-block"><b>John Doe</b></span>
                    <span class="d-block">12-January-2024</span>
                    <span class="d-block"><a href="#" class="text-red">Reply</a></span>
                  </div>
                  <!-- Head -->
                  <!-- comment -->
                  <div class="mt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolor ab quidem iure? Soluta, accusantium.</p>
                  </div>
                  <!-- comment -->
                </div>
                <!-- End -->
              </div>
              <!-- comments box -->
              <div class="d-flex justify-content-center"><a href="#" class="text-red">Read More</a></div>
            </div>
            <!-- Comments -->
            <!-- Post Comment -->
            <div class="w-auto mt-4">
              <h2>Post a Comment</h2>
              <hr class="w-75 text-red">
              <div class="container">
                <!-- Form -->
              <form action="#" method="post">
                <!-- Name and Email -->
                <div class="row">
                  
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>

                </div>
                <!-- Name and Email -->

                <!-- Text Area -->
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Post Your Comment</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <!-- Text Area -->
                <input class="pc-contact-submit" type="submit" value="Comment">
              </form>
              <!-- Form -->
              </div>
            </div>
            <!-- Post Comment -->
        </div>
        <!-- Left Side -->
        <!-- Right Side -->
        <div class="col-lg-3 p-2 mt-4">
          @include('frontend.components.right')
        </div>
        <!-- Right Side -->
    </div>
 </section>

 @include('frontend.components.newsletter')
@endsection
@section('custom-js')
    <script>
        AOS.init();
    </script>
@endsection