@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- HOME/HERO --}}
        <div class="row w-100" style="height: 80vh">
            <div class="col-xs-12 col-md-6 d-flex flex-column justify-content-center align-items-center px-3">
                <div class=" display-4 text-dark w-100">Welcome to <br><span style="color: #414e8b ">Cobra iTech
                        Services</span></div>
                <div class="text-dark w-100 px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel,
                    illum? Quis
                    nesciunt ab recusandae magnam veritatis, perferendis eos harum voluptates libero animi deserunt
                    aspernatur consequuntur veniam saepe vel magni vitae!</div>
                <div class="d-flex w-100 my-2">
                    <button class="btn text-light  h-100 px-5 py-2 fw-bold" style="background-color: #272f56">About
                        Us</button>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 d-flex justify-content-center align-items-center px-3">
                <img src="{{ asset('images/Welcome1.2.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    {{-- OUR SERVICES --}}
    <div class="row py-3 mt-5" style=" background-color: #272f56" id="scrollToService">
        <div style="height: 10vh"></div>
        <div class="col-xs-12 d-flex flex-column align-items-center justify-content-center" style="height: 100%">
            <div class="display-4 text-light my-2 fw-bold" data-aos="fade-down">Services</div>
            <div class="row d-flex justify-content-around w-100 align-items-center">
                <div class="col-xs-12 col-md-4 my-3" data-aos="fade-in">
                    <div class="d-flex flex-column justify-content-center align-items-center w-100">
                        <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 4rem; height:4rem;">
                            <i class="fa-solid fa-computer fs-1" style="color: #272f56"></i>
                        </div>
                        <div class="fs-5 text-light">
                            Computer repair service
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 my-3" data-aos="fade-in">
                    <div class="d-flex flex-column justify-content-center align-items-center w-100">
                        <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 4rem; height:4rem;">
                            <i class="fa-solid fa-handshake-angle fs-1" style="color: #272f56"></i>
                        </div>
                        <div class="fs-5 text-light">
                            Remote Help Desk
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 my-3" data-aos="fade-in">
                    <div class="d-flex flex-column justify-content-center align-items-center w-100">
                        <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 4rem; height:4rem;">
                            <i class="fa-solid fa-code fs-1" style="color: #272f56"></i>
                        </div>
                        <div class="fs-5 text-light">
                            Support to Programming
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 my-3" data-aos="fade-in">
                    <div class="d-flex flex-column justify-content-center align-items-center w-100">
                        <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 4rem; height:4rem;">
                            <i class="fa-solid fa-database fs-1" style="color: #272f56"></i>
                        </div>
                        <div class="fs-5 text-light text-center">
                            Support to Database Management
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 my-3" data-aos="fade-in">
                    <div class="d-flex flex-column justify-content-center align-items-center w-100">
                        <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 4rem; height:4rem;">
                            <i class="fa-solid fa-lightbulb fs-1" style="color: #272f56"></i>
                        </div>
                        <div class="fs-5 text-light">
                            IT Solutions
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 my-3" data-aos="fade-in">
                    <div class="d-flex flex-column justify-content-center align-items-center w-100">
                        <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 4rem; height:4rem;">
                            <i class="fa-solid fa-microchip fs-1" style="color: #272f56"></i>
                        </div>
                        <div class="fs-5 text-light">
                            Hardware Support
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 10vh"></div>
    </div>
    {{-- ABOUT US --}}
    <div class="row py-3 mt-5" style="height: 100%; background-color: #fff" id="scrollToAbout">
        <div class="col-xs-12 d-flex flex-column align-items-center">
            <div class="display-4 text-dark my-2 fw-bold" data-aos='fade-down'>About Us</div>
            <div class="row d-flex w-100 py-2">
                <div class="col-xs-12 col-md-6">
                    <div class="d-flex flex-column justify-content-center my-3 h-100" data-aos='fade-up'>
                        <div class="fs-4 text-dark" style="font-weight: 600">The Company</div>
                        <div class="fs-6 text-dark" style="font-weight: 300">Cobra Itech Services Corporation got its name
                            from the 2 leading senior
                            consultants and principals of the company namely Craig Covey and Lemuel Braña. This represents
                            the joining of forces of American and Filipino consultants. Our key officers are seasoned
                            technical leaders with more than 50 years experience in I.T. from large information technology
                            service providers and from backgrounds in security and intelligence institutions, including the
                            US Air Force, Central Intelligence Agency (CIA), executive branch of the US government, Supreme
                            Headquarters Allied Powers Europe (SHAPE), and Germany’s Bundesnachrichtendienst.</div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 d-flex justify-content-center align-items-center px-3"
                    data-aos='fade-up'>
                    <img src="{{ asset('images/AboutUs1.jpg') }}" alt="" class="img-fluid mt-5">
                </div>
            </div>
            <div class="row d-flex w-100 py-2">
                <div class="d-none d-md-block col-md-6 d-flex align-items-center h-50 w-50 justify-content-center px-3"
                    data-aos='fade-up'>
                    <img src="{{ asset('images/AboutUs2.jpg') }}" alt="" class="img-fluid mt-5">
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="d-flex flex-column justify-content-center my-3 h-100" data-aos='fade-up'>
                        <div class="fs-4 text-dark" style="font-weight: 600">Mission</div>
                        <div class="fs-6 text-dark" style="font-weight: 300">Our mission is to provide high quality
                            products and services to all entities. We strive to always create error-free, secure products
                            which anticipate the needs of the clients and their customers.</div>
                    </div>
                </div>
            </div>
            <div class="row d-flex w-100 py-2">
                <div class="col-xs-12 col-md-6">
                    <div class="d-flex flex-column justify-content-center my-3 h-100" data-aos='fade-in'>
                        <div class="fs-4 text-dark" style="font-weight: 600">Vision</div>
                        <div class="fs-6 text-dark" style="font-weight: 300">Our vision is to become a business partner of
                            choice to all entities. We partner with a number of organizations and governmental agencies
                            around the world, and welcome the opportunity to share their capabilities with our clients.
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 d-flex justify-content-center align-items-center px-3"
                    data-aos='fade-in '>
                    <img src="{{ asset('images/AboutUs3.jpg') }}" alt="" class="img-fluid mt-5">
                </div>
            </div>
        </div>
    </div>
    {{-- PARTNERS AND CLIENTS --}}
    <div class="row py-3 mt-5" style=" background-color: #272f56" id="scrollToPartners">
        <div class="display-4 text-light my-2 fw-bold text-center" data-aos='fade-down'>Partners and Clients</div>
        <div class="swiper" style="height: 100%; padding-top: 1.5rem; padding-bottom: 1.5rem ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                {{-- slider 1 --}}
                <div class="swiper-slide d-flex justify-content-around">
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/1200px-seal_of_the_office_of_the_president_of_the_philippines-svg.png?w=100&h=100"
                            class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/bureau_of_internal_revenue_bir-svg.png?w=104&h=104"
                            class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/1200px-department_of_finance_dof-svg.png?w=100&h=100"
                            class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                {{-- slider 2 --}}
                <div class="swiper-slide d-flex justify-content-around">
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/1200px-university_of_the_philippines_seal-svg.png?w=100&h=100"
                            class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/uog-seal-4-color.png?w=100&h=181"
                            class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/1200px-new_era_university-svg.png?w=100&h=100"
                            class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                {{-- slider 3 --}}
                <div class="swiper-slide d-flex justify-content-around">
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/220px-adb-logo-block.jpg?w=100&h=100"
                            class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://logodix.com/logo/1948938.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/worldbank-logo.jpg?w=176&h=100"
                            class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                {{-- slider 3 --}}
                <div class="swiper-slide d-flex justify-content-around">
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Accenture.svg/2560px-Accenture.svg.png"
                            class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="https://cobraitech.files.wordpress.com/2018/09/1200px-ibm_logo-svg.png?w=148&h=59"
                            class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="width: 100px; aspect-ratio: 1/1">
                        <img src="http://www.officialgazette.gov.ph/images/uploads/logo-DTI.png" class="img-fluid"
                            alt="" srcset="">
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination" style="color: #fff"></div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <script>
        AOS.init();
        $(document).ready(function() {
            $('#Services').on('click', function() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('#scrollToService').offset().top
                }, 10)
            })
            $('#AboutUs').on('click', function() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('#scrollToAbout').offset().top
                }, 10)
            })
            $('#Partners').on('click', function() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('#scrollToPartners').offset().top
                }, 10)
            })
        })
    </script>
@endsection

{{-- <div class="d-flex flex-column my-3">
        <div class="fs-4 text-light" style="font-weight: 600">Mission</div>
        <div class="fs-6 text-light" style="font-weight: 300">Our mission is to provide high quality
            products and services to all entities. We strive to always create error-free, secure products
            which anticipate the needs of the clients and their customers.
            
        </div>
    </div>
    <div class="d-flex flex-column my-3">
        <div class="fs-4 text-light" style="font-weight: 600">Vision</div>
        <div class="fs-6 text-light" style="font-weight: 300">Our vision is to become a business partner of
            choice to all entities. We partner with a number of organizations and governmental agencies
            around the world, and welcome the opportunity to share their capabilities with our clients.
        </div>
    </div> --}}
