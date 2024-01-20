<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.head')
<body>  
    @include('frontend.partials.navbar')
    @yield('prime-chauffeur-content')
    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
    @yield('custom-js')
</body>
</html>