<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cobra iTech Services Corporation</title>
    <link rel="shortcut icon" href="{{ asset('images/cobra-itech.jpg') }}">

    {{-- font awesome 5 --}}
    <script src="https://kit.fontawesome.com/03eaa649b2.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- ANIMATE ON SCROLL --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="border-end" id="sidenavbar">
            <div class="sidebar-heading text-light" style="background-color: padding: 15.3px">
                <a class="navbar-brand fw-bold" href="#">
                    <img src="{{ asset('images/cobra-logo.png') }}" alt="" style="width: 3rem">
                    Cobra Itech
                </a>
            </div>
            <div class="list-group list-group-flush h-75">
                <div class="d-flex flex-column h-100">
                    <a href="/home"
                        class="list-group-item list-group-item-action p-3 border-0 @if ($active == 'home') active @endif"
                        aria-current="true">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.applicants') }}"
                        class="list-group-item list-group-item-action p-3 border-0 @if ($active == 'applicants') active @endif"
                        aria-current="true">
                        Applicants
                    </a>
                    <a href="{{ route('admin.inquiries') }}"
                        class="list-group-item list-group-item-action p-3 border-0 @if ($active == 'inquiries') active @endif"
                        aria-current="true">
                        Inquiries
                    </a>
                    <a href="{{ route('admin.updates') }}"
                        class="list-group-item list-group-item-action p-3 border-0 @if ($active == 'updates') active @endif"
                        aria-current="true">
                        Updates
                    </a>
                    <a href="{{ route('admin.manageadmin') }}"
                        class="list-group-item list-group-item-action p-3 border-0 @if ($active == 'Manage Admin') active @endif"
                        aria-current="true">
                        Manage Admin
                    </a>
                </div>
                <div class="d-flex align-items-start">
                    <form action="{{ route('logout') }}" method="POST"
                        class="list-group-item list-group-item-action p-3 border-0" aria-current="true">
                        @csrf
                        <button class="border-0 bg-light">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-fill" id="pageContent" style="margin-left: -1px;">
            <nav class="navbar navbar-expand-lg navbar-dark border-bottom shadow-sm" style="background-color: #272f56;">
                <div class="container-fluid">
                    <button class="btn" id="sidebarToggle"><i class="fa-solid fa-arrow-left text-light"
                            id="sidebarIcon"></i></button>
                    <div class="dropdown-toggle text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                                                                                                                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
            <div class="py-3">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let show = true
        $('#sidebarToggle').on('click', function() {
            if (show) {
                show = false
                $('#sidenavbar').hide();
                $('#sidebarIcon').removeClass('fa-arrow-left')
                $('#sidebarIcon').addClass('fa-arrow-right')
                // $("#pageContent").addClass('page-content-show')
                // $("#pageContent").removeClass('page-content-hide')
            } else {
                show = true
                $('#sidenavbar').show();
                $('#sidebarIcon').removeClass('fa-arrow-right')
                $('#sidebarIcon').addClass('fa-arrow-left')
                // $("#pageContent").addClass('page-content-hide')
                // $("#pageContent").removeClass('page-content-show')
            }
        })
    </script>
</body>

</html>
