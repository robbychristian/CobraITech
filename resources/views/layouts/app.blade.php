<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cobra iTech Services Corporation</title>
    <link rel="shortcut icon" href="{{ asset('images/cobra-itech.jpg') }}">

    {{-- SWIPER JS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    {{-- font awesome 5 --}}
    <script src="https://kit.fontawesome.com/03eaa649b2.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATQaXRrTj8RIgtNZtPC0G7VSi2uAS7cPM&callback=initMap&v=weekly"
        defer></script>

    {{-- ANIMATE ON SCROLL --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    {{-- OWL CAROUSEL2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- MAPBOX -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-light navbar-light p-4 sticky-top" id="navbar-scroll">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">
                    <img src="{{ asset('images/cobra-logo.png') }}" alt="" style="width: 1.5rem">
                    Cobra Itech
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pe-5 me-4">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#updates">Updates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#partnerships">Partners & Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome.support') }}">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome.joinus') }}">Join Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main style="overflow-x: hidden">
            @yield('content')
        </main>

    </div>
    @extends('layouts.footer')
</body>

</html>
