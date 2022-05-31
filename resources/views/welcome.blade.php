@extends('layouts.app')

@section('content')
    <section id="home">
        <div class="container">
            <div class="row py-5 align-items-center">
                <div class="col-lg-6">
                    <div class="header-text">
                        <small class="fw-bold custom-txt-color">Welcome to</small>
                        <h1 class="display-3 fw-bold mt-5">Cobra iTech Services</h1>
                        <p class="text-muted">The quality of our services are beyond expectation as this we hold our name
                            proud. We provide services with relation to technology regardless of the medium. Our services
                            are listed below for further expounding the capabilities of the company. Become our partner or
                            join our company!
                        </p>
                        <a class="btn btn-custom" href="about.html">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/header-img.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Start of Services -->
    <section id="services" class="my-5">
        <div class="container">
            <div class="services-text">
                <small class="fw-bold custom-txt-color">Our Services</small>
                <h2 class="text-capitalize display-6 mt-5 fw-bold">what we offer</h2>
                <p class="text-muted w-75">May it be hardware or software that your require, we can provide! The list below
                    shows the variety of services that the company provides for our clients and partners!</p>
                {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quae quos
                    praesentium quidem! Vel dolorum ut, itaque voluptate explicabo numquam? --}}
            </div>

            <div class="row gy-3 mt-4">
                <div class="col-lg-4">
                    <div class="card">
                        <i class="bi bi-pc-display mx-auto py-2 fs-1 custom-txt-color"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Computer Repair Service</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, amet.
                                Officia qui quaerat mollitia enim laudantium harum corporis, pariatur dicta nemo,
                                consectetur aut recusandae. Libero obcaecati illo ipsum autem distinctio!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <i class="bi bi-question-circle mx-auto py-2 fs-1 custom-txt-color"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Remote Help Desk</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, amet.
                                Officia qui quaerat mollitia enim laudantium harum corporis, pariatur dicta nemo,
                                consectetur aut recusandae. Libero obcaecati illo ipsum autem distinctio!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <i class="bi bi-code-slash mx-auto py-2 fs-1 custom-txt-color"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Support to Programming</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, amet.
                                Officia qui quaerat mollitia enim laudantium harum corporis, pariatur dicta nemo,
                                consectetur aut recusandae. Libero obcaecati illo ipsum autem distinctio!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <i class="bi bi-bar-chart-fill mx-auto py-2 fs-1 custom-txt-color"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Support to Database Management</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, amet.
                                Officia qui quaerat mollitia enim laudantium harum corporis, pariatur dicta nemo,
                                consectetur aut recusandae. Libero obcaecati illo ipsum autem distinctio!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <i class="bi bi-lightbulb-fill mx-auto py-2 fs-1 custom-txt-color"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">IT Solutions</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, amet.
                                Officia qui quaerat mollitia enim laudantium harum corporis, pariatur dicta nemo,
                                consectetur aut recusandae. Libero obcaecati illo ipsum autem distinctio!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <i class="bi bi-motherboard-fill mx-auto py-2 fs-1 custom-txt-color"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Hardware Support</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, amet.
                                Officia qui quaerat mollitia enim laudantium harum corporis, pariatur dicta nemo,
                                consectetur aut recusandae. Libero obcaecati illo ipsum autem distinctio!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services -->
    <!-- Start of About Us -->
    <section id="about-us" class="my-5">
        <div class="container">
            <div class="about-text text-end">
                <small class="fw-bold custom-txt-color">About Us</small>
                <h2 class="text-capitalize display-6 mt-5 fw-bold">who we are</h2>
                <p class="text-muted">The company upholds its mission and vision through providing quality services.</p>
                <small>
                    <a href="about.html" class="custom-txt-color text-decoration-none fw-bold">Read More
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </small>
            </div>

            <div class="row mt-4 align-items-center justify-content-center gy-5">
                <div class="col-lg-6 order-sm-1 order-md-1 order-lg-0">
                    <div class="about-us-txt">
                        <h2 class="display-6 fw-bold mb-4">The Company</h2>
                        <p class="text-muted">
                            Cobra Itech Services Corporation got its name from the 2 leading senior consultants and
                            principals of the company namely Craig Covey and Lemuel Braña. This represents the joining of
                            forces of American and Filipino consultants. Our key officers are seasoned technical leaders
                            with more than 50 years experience in I.T. from large information technology service providers
                            and from backgrounds in security and intelligence institutions, including the US Air Force,
                            Central Intelligence Agency (CIA), executive branch of the US government, Supreme Headquarters
                            Allied Powers Europe (SHAPE), and Germany’s Bundesnachrichtendienst.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-sm-0 order-md-0 order-lg-1">
                    <img src="images/about-us.jpg" alt="" class="img-fluid custom-img">
                </div>
                <div class="col-lg-6 order-sm-2">
                    <img src="images/mission-vision.jpg" alt="" class="img-fluid custom-img">
                </div>
                <div class="col-lg-6 text-end order-sm-3">
                    <h2 class="display-6 fw-bold mb-4">Mission & Vision</h2>
                    <h5 class="fw-bold">Mission</h5>
                    <p class="text-muted">
                        Our mission is to provide high quality products and services to all entities. We strive to always
                        create error-free, secure products which anticipate the needs of the clients and their customers
                    </p>
                    <h5 class="fw-bold">Vision</h5>
                    <p class="text-muted">Our vision is to become a business partner of choice to all entities. We
                        partner with a number of organizations and governmental agencies around the world, and welcome the
                        opportunity to share their capabilities with our clients.We advocate and promote Filipino and
                        American talents as key resource to all local and foreign clients.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->
    <!-- Start of Updates -->
    <section id="updates" class="my-5">
        <div class="container">
            <small class="fw-bold custom-txt-color">Updates</small>
            <h2 class="display-6 fw-bold mt-5 mb-4">Latest Articles</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, porro.</p>
            <small>
                <a href="{{ route('welcome.updates') }}" class="custom-txt-color text-decoration-none fw-bold">Read More
                    <i class="bi bi-arrow-right"></i>
                </a>
            </small>

            <div class="row mt-5 gy-4">
                @foreach ($updates as $update)
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="{{ asset('storage/blog_image/' . $update->title . '/' . $update->img_heading) }}"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold" style="height: 3rem;">{{ $update->title }}</h5>
                                <p class="card-text">{{ Str::substr($update->body, 0, 280) }}...</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="author-date">
                                        <h6 class="fw-bold my-0">Robby De Leon</h6>
                                        <small class="text-muted"
                                            id="blogDate{{ $update->id }}">{{ $update->created_at }}</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-custom-card rounded-pill">
                                            <i class="bi bi-caret-right"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                                        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script>
                        const blogDate{{ $update->id }} = $("#blogDate{{ $update->id }}").html()
                        $("#blogDate{{ $update->id }}").html(moment(blogDate{{ $update->id }}).format('LL'))
                        const blogBody{{ $update->id }} = $("#blogBody{{ $update->id }}").html().substring(0, 280)
                        $("#blogBody{{ $update->id }}").html(blogBody{{ $update->id }} + '...')
                    </script>
                @endforeach
                {{-- <div class="col-lg-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/2/200/150" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Insert Card Title Here</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                laboriosam, facere cum asperiores dignissimos velit sed nostrum perferendis cupiditate
                                aliquid ipsa molestias quidem iusto incidunt quisquam tenetur aut odio ex.</p>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="author-date">
                                    <h6 class="fw-bold my-0">Robby De Leon</h6>
                                    <small class="text-muted">Insert Date Here</small>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-custom-card rounded-pill">
                                        <i class="bi bi-caret-right"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/3/200/150" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Insert Card Title Here</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                laboriosam, facere cum asperiores dignissimos velit sed nostrum perferendis cupiditate
                                aliquid ipsa molestias quidem iusto incidunt quisquam tenetur aut odio ex.</p>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="author-date">
                                    <h6 class="fw-bold my-0">Robby De Leon</h6>
                                    <small class="text-muted">Insert Date Here</small>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-custom-card rounded-pill">
                                        <i class="bi bi-caret-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End of Updates -->
    <!-- Start of Partners & Clients -->
    <section id="partnerships" class="my-5 pt-5">
        <div class="container">
            <div class="text-end">
                <small class="fw-bold custom-txt-color">Partnerships</small>
                <h2 class="display-6 fw-bold mt-5 mb-4">Partners & Clients</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia?</p>
            </div>

            <div class="partnership-carousel owl-theme owl-carousel mt-4">
                <div class="card border-0">
                    <img src="{{ asset('images/president_s-office.webp') }}" class="card-img-top w-25 mx-auto"
                        alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">office of the malacañang palace</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/bir.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">bureau of internal revenue</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/dept-finance.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">department of finance</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/up.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">university of the philippines</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/university of guam.webp') }}" class="card-img-top w-25 mx-auto"
                        alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">university of guam</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/new-era.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">new era university</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/asian-bank.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">asian development bank</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/wells-fargo.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">wells fargo bank</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/world-bank.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">world bank</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/accenture.webp') }}" class="card-img-top w-50 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">accenture</h5>
                    </div>
                </div>
                <div class="card border-0">
                    <img src="{{ asset('images/ibm.webp') }}" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold text-center text-capitalize">ibm</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Partners & Clients -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
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
