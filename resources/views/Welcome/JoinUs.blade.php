@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-around align-items-center">
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
                <strong>Success!</strong> Your applicaation has been sent and will be reviewed!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-xs-12 col-md-6 custom-class-2">
        </div>
        <div class="col-xs-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <form id="applicationForm" action="/submitapplication" method="POST" enctype="multipart/form-data"
                class="p-3" style="height: 100%; width: 90%">
                @csrf
                @method('POST')
                <div class="fs-1 text-dark fw-bold">Send your application below</div>
                <div class="fs-6 fw-bold mb-3 fst-italic" style="color: #a0a0a0">Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Blanditiis
                    consequuntur rerum labore ad excepturi repellendus eos officiis unde id! Doloribus ea enim rem atque
                    veritatis neque nobis non iste sapiente!</div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name <span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address <span
                            class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Message <span
                            class="text-danger">*</span></label>
                    <textarea rows="4" class="form-control" id="message" aria-describedby="emailHelp" name="message"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Job Category <span
                            class="text-danger">*</span></label>
                    <select class="form-select" id="job" name="job_category">
                        <option selected value="Consultant">Consultant</option>
                        <option value="Data Scientist">Data Scientist</option>
                        <option value="Designer">Designer</option>
                        <option value="Developer">Developer</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Curriculum Vitae <span class="text-danger">*</span></label>
                    <br>
                    <input type="file" name="curriculum_vitae" id="curriculumVitae" accept="application/pdf,application">
                </div>
                <button type="button" class="btn btn-primary" id="submitApplication">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/forms.js') }}"></script>
@endsection
