@extends('layouts.app')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <strong>Success!</strong> Your query has been sent!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section id="support" class="my-5">

        <div class="container">
            <small class="fw-bold custom-txt-color">Contact Us</small>
            <h1 class="display-6 fw-bold my-5">Get in Touch</h1>
            <div class="row align-items-start">
                <div class="col-lg-6 border border-top-0 border-start-0 border-bottom-0 pe-5">
                    <h6 class="fw-bold">Send a Message</h6>
                    <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas fugit
                        est earum deleniti distinctio eaque ad quibusdam adipisci aperiam?</p>

                    <!-- Support Form -->
                    <form action="{{ route('welcome.query') }}" id="applicationForm" class="my-4" method="POST">
                        @csrf
                        @method('POST')

                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control" id="nameSupport"
                                    placeholder="Enter your name">
                            </div>
                            <div class="col">
                                <label for="" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control" id="emailSupport"
                                    placeholder="Enter your email">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="" class="form-label fw-bold">Message</label>
                            <textarea class="form-control" name="message" id="messageSupport" rows="7" id="messageSupport"
                                placeholder="Enter your message"></textarea>
                        </div>

                        <button type="button" id="submitQuery"
                            class="btn btn-custom rounded-pill mt-4 float-end">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 ps-5">
                    <div class="call-us">
                        <h6 class="fw-bold">Call Us</h6>
                        <p class="text-muted w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, facere.
                        </p>
                        <p class="custom-txt-color">
                            <i class="bi bi-telephone-fill me-3"></i>(02) 577 4822
                        </p>
                    </div>
                    <div class="visit-us">
                        <h6 class="fw-bold">Visit Us</h6>
                        <p class="text-muted w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, facere.
                        </p>
                        <p class="custom-txt-color">
                            <i class="bi bi-geo-alt-fill me-3"></i>Suite 402, Jade Place Condominium,
                            33 Visayas Avenue, Bgy. Vasra, QC
                        </p>
                    </div>
                    <div class="email-us">
                        <h6 class="fw-bold">Email Us</h6>
                        <p class="text-muted w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, facere.
                        </p>
                        <p class="custom-txt-color">
                            <i class="bi bi-envelope-fill me-3"></i>cobraitechservices@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <iframe class="mt-5" style="border:0; width: 100%; height: 270px;"
                src="https://maps.google.com/maps?q=cobra%20itech&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                allowfullscreen></iframe>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/forms.js') }}"></script>
@endsection
