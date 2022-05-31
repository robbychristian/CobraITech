@extends('layouts.app')

@section('content')
    <!-- Start of Updates -->
    <section id="updates" class="my-5">
        <div class="container">
            <small class="fw-bold custom-txt-color">Updates</small>
            <h2 class="display-6 fw-bold mt-5 mb-4">Latest Articles</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, porro.</p>

            <div class="row mt-4 gy-4">
                @foreach ($blogs as $update)
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
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/4/200/150" class="card-img-top img-fluid" alt="...">
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
                        <img src="https://picsum.photos/id/5/200/150" class="card-img-top img-fluid" alt="...">
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
                        <img src="https://picsum.photos/id/6/200/150" class="card-img-top img-fluid" alt="...">
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
@endsection
