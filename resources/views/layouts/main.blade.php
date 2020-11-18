<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS Link -->
    <link rel="stylesheet" href="{{ asset('public/theme/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/css/responsive.css') }}">

    @yield('styles')

    <title>StartP - IT Startups and Digital Services HTML Template</title>

    {{-- <link rel="icon" type="image/png" href="{{ asset('public/theme/img/favicon.png"> --}}
</head>

<body>
  @include('partials.header')
  @yield('content')
  @include('partials.footer')

    <script src="{{ asset('public/theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/appear.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/odometer.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/slick.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/feather.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('public/theme/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('public/theme/js/startp-map.js') }}"></script>
    <script src="{{ asset('public/theme/js/main.js') }}"></script>
@yield('script')
</body>
