@extends('layouts.admintemplate')

@section('content')
    @foreach ($inquiry as $details)
        <div class="container my-2">
            <div class="card p-5">
                <div class="fs-6">HR Representative</div>
                <div class="fs-6">Cobra iTech Services Corporation</div>
                <div class="fs-6 mt-5">Dear HR Representative,</div>
                <div class="fs-6 mt-5">I am {{ $details->name }} and I have question about your company.
                    {{ $details->message }}
                </div>
                <div class="fs-6 mt-5">Sincerely,</div>
                <div class="fs-6">{{ $details->name }}</div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-end w-100">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#replyEmail">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-reply-all-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.021 11.9 3.453 8.62a.719.719 0 0 1 0-1.238L8.021 4.1a.716.716 0 0 1 1.079.619V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                        <path
                            d="M5.232 4.293a.5.5 0 0 1-.106.7L1.114 7.945a.5.5 0 0 1-.042.028.147.147 0 0 0 0 .252.503.503 0 0 1 .042.028l4.012 2.954a.5.5 0 1 1-.593.805L.539 9.073a1.147 1.147 0 0 1 0-1.946l3.994-2.94a.5.5 0 0 1 .699.106z" />
                    </svg>
                    <i class="bi bi-reply-all-fill"></i>Reply</button>
            </div>
        </div>
        <div class="modal fade" id="replyEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.replyToQuery') }}" id="replytoform" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row g-3 justify-content-center mb-2">
                                <div class="col-2">
                                    <label class="col-form-label">To:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="receiver" value="{{ $details->email }}" readonly
                                        class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>
                            <div class="row g-3 justify-content-center my-2">
                                <div class="col-2">
                                    <label class="col-form-label">From:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" id="inputPassword6" value="Cobra iTech Services Corporation" readonly
                                        class="form-control" aria-describedby="passwordHelpInline">
                                    <input type="text" id="inputPassword6" name="id" value="{{ $details->id }}" readonly
                                        class="form-control d-none" aria-describedby="passwordHelpInline">
                                    <input type="text" id="inputPassword6" name="{{ $details->name }}"
                                        value="Cobra iTech Services Corporation" readonly class="form-control d-none"
                                        aria-describedby="passwordHelpInline">
                                </div>
                            </div>
                            <div class="row g-3 justify-content-center my-2">
                                <div class="col-2">
                                    <label class="col-form-label">Message:</label>
                                </div>
                                <div class="col-9">
                                    <textarea rows="4" name="message" class="form-control" id="messageReply" aria-describedby="emailHelp"
                                        name="message"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center w-100">
                                <button class="btn btn-primary w-25" id="submitreply" type="button">Submit</button>
                            </div>
                            {{-- <div class="col-2">
                                    <label class="col-form-label">From</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" id="inputPassword6" value="Cobra iTech Services Corporation" readonly
                                        class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-2">
                                    <label class="col-form-label">Message</label>
                                </div>
                                <div class="col-9">
                                    <textarea rows="4" class="form-control" id="message" aria-describedby="emailHelp" name="message"></textarea>
                                </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/forms.js') }}"></script>
@endsection
