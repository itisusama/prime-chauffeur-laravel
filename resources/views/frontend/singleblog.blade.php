@extends('frontend.layouts.master')
@section('prime-chauffeur-content')
    <!-- START:: Banner -->
    <section class="pc-contact-banner py-3">
        <div class="container mt-3" data-aos="fade-right" data-aos-delay="1000">
            <h1 class="text-red">Blog</h1>
            <div class="text-white w-50">
                <p>Incididunt ut laboret dolore magna aliqua enim minim veniam nostrud ullamco laboris nisi aliquip ex loea.</p>
            </div>
            <!-- Bread Crumb -->
            <div>
              <p class="text-white"><a href="index.html">Home</a> > Single Blog</p>
            </div>
            <!-- Bread Crumb -->
        </div>
    </section>
    <!-- END:: Banner -->
@endsection
@section('custom-js')
    <script>
        AOS.init();
    </script>
@endsection