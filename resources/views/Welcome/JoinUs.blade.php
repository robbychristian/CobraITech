@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-around align-items-center">
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
                    <label for="exampleInputEmail1" class="form-label">Name <span class="text-danger">*</span></label>
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
                        <option selected value="consultant">Consultant</option>
                        <option value="data scientist">Data Scientist</option>
                        <option value="designer">Designer</option>
                        <option value="developer">Developer</option>
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
