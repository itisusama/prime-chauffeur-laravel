<!-- START:: Banner -->
<section class="pc-contact-banner py-3">
    <div class="container mt-3" data-aos="fade-right" data-aos-delay="1000">
        <h1 class="text-red">{{ $pageTitle }}</h1>
        <div class="text-white w-50">
            <p>{{ $bannerText }}</p>
        </div>
        <!-- Bread Crumb -->
        <div>
            <p class="text-white"><a href="{{ route('home') }}">Home</a> > {{ $breadcrumb }}</p>
        </div>
        <!-- Bread Crumb -->
        <!-- Call Us Button -->
        @if(isset($contactNumber) && isset($callUsButtonText))
            <div class="pc-contactus-btn px-4"><a href="tel:{{ $contactNumber }}" class="btn text-white">{{ $callUsButtonText }}</a></div>
        @endif
        <!-- Call Us Button -->
    </div>
</section>
<!-- END:: Banner -->