@extends('layouts.app')

@section('content')
    <div class="custom-class-3">

    </div>

    <div class="row justify-content-center">
        <div class="d-flex justify-content-center align-items-center flex-column my-5">
            <div class="display-4 fw-bold">Updates</div>
        </div>
        <div class="row justify-content-center align-items-center gap-4">
            @foreach ($blogs as $blog)
                <div class="col-xs-12 col-md-5 col-lg-3 d-flex flex-column">
                    <img src="{{ asset('storage/blog_image/' . $blog->title . '/' . $blog->img_heading) }}"
                        class="img-fluid" style="width: 2730px; aspect-ratio: 4:3" alt="" srcset="">
                    <div class="my-3" style="font-size: 10px; color: #808080;"><b>{{ $blog->publisher }}</b> |
                        <span id="blogDate{{ $blog->id }}">{{ $blog->created_at }}</span>
                    </div>
                    <div class="fs-4 fw-bold my-2" style="height: 4rem">{{ $blog->title }}</div>
                    <div class="my-2" style="font-size: 12px" id="blogBody{{ $blog->id }}">
                        {{ $blog->body }}
                    </div>
                    <a href="#" class="btn w-50 my-3" style="background-color: #272f56; color: #fff">Read More</a>
                    <hr style="height: 3px">
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <script>
                    const blogDate{{ $blog->id }} = $("#blogDate{{ $blog->id }}").html()
                    console.log(blogDate{{ $blog->id }})
                    $("#blogDate{{ $blog->id }}").html(moment(blogDate{{ $blog->id }}).format('LL'))

                    const blogBody{{ $blog->id }} = $("#blogBody{{ $blog->id }}").html().substring(0, 280)
                    $("#blogBody{{ $blog->id }}").html(blogBody{{ $blog->id }} + '...')
                </script>
            @endforeach
        </div>
    </div>
@endsection
