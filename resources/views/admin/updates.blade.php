@extends('layouts.admintemplate')

@section('content')
    <div class="container">
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
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs-3 my-2">Updates Table</div>
            <button data-bs-toggle="modal" data-bs-target="#addUpdate" class="btn btn-primary h-50">Add an Update</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Publisher</th>
                    <th scope="col">Title</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog_list as $blog)
                    <tr>
                        <td>{{ $blog->publisher }}</td>
                        <td>{{ $blog->title }}</td>
                        <td id="updateTableMessage{{ $blog->id }}">{{ $blog->body }}</td>
                        <td id="dateTime{{ $blog->id }}">{{ $blog->created_at }}</td>
                        <td>
                            <div class="d-flex flex-row gap-1">
                                <form action="/deleteblog/{{ $blog->id }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash3-fill text-light" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                        <i class="bi bi-trash3-fill" style="color: red"></i>
                                    </button>
                                </form>
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#view{{ $blog->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </td>
                        <div class="modal fade" id="view{{ $blog->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ $blog->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('storage/blog_image/' . $blog->title . '/' . $blog->img_heading) }}"
                                            alt="" srcset="" class="img-fluid">
                                        <div class="fs-4 fw-bold my-2" style="height: 4rem">{{ $blog->title }}</div>
                                        <div style="font-size: 12px my-2" id="blogBody{{ $blog->id }}">
                                            {{ $blog->body }}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                                        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script>
                        const substring{{ $blog->id }} = $("#updateTableMessage{{ $blog->id }}").html().substring(0, 25) + '...'
                        $("#updateTableMessage{{ $blog->id }}").html(substring{{ $blog->id }})

                        const dateTime{{ $blog->id }} = $("#dateTime{{ $blog->id }}").html()
                        console.log(dateTime{{ $blog->id }})
                        $("#dateTime{{ $blog->id }}").html(moment(dateTime{{ $blog->id }}).format('LL'))
                    </script>
                @endforeach
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="addUpdate" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.addUpdate') }}" method="POST" id="addUpdateForm"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Publisher</label>
                                <input type="text" id="publisher" name="publisher" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Body</label>
                                <textarea rows="6" id="body" name="body" class="form-control" aria-describedby="emailHelp" name="message"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Blog Heading</label>
                                <input class="form-control" id="img_heading" name="img_heading" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="addUpdateButton">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/updates.js') }}"></script>
    </div>
@endsection
