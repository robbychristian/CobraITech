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

    {{-- ANIMATE ON SCROLL --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg shadow-sm navbar-dark" style="background-color: #272f56">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Logo
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                        <ul class="navbar-nav mx-5">
                            <li class="nav-item">
                                <a href="/home" id="Home" class="nav-link mx-2">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.applicants') }}" id="Home" class="nav-link mx-2">Applicants</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav mx-5">
                            <li class="nav-item">
                                <a href="/" id="Home" class="nav-link mx-2">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" id="Services" class="nav-link mx-2">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" id="AboutUs" class="nav-link mx-2">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" id="Partners" class="nav-link mx-2">Partners & Clients</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('welcome.updates') }}" id="Updates" class="nav-link mx-2">Updates</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('welcome.support') }}" id="Support" class="nav-link mx-2">Support</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('welcome.joinus') }}" id="JoinUs" class="nav-link mx-2">Join Us</a>
                            </li>
                        </ul>
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
