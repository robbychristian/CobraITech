@extends('layouts.admintemplate')

@section('content')
    <div class="container">
        <div class="fs-3">Inquiries</div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date Sent</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->name }}</td>
                        <td>{{ $inquiry->email }}</td>
                        <td id="dateTime{{ $inquiry->id }}">{{ $inquiry->created_at }}</td>
                        <td><span
                                class="badge 
                        @if ($inquiry->status == 'Pending') bg-warning
                        @else
                            bg-success @endif 
                        
                        text-light">{{ $inquiry->status }}</span>
                        </td>
                        <td>
                            <form action="/showinquiry/{{ $inquiry->id }}" method="GET">
                                <button class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                                        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script>
                        const dateTime{{ $inquiry->id }} = $("#dateTime{{ $inquiry->id }}").html()
                        console.log(dateTime{{ $inquiry->id }})
                        $("#dateTime{{ $inquiry->id }}").html(moment(dateTime{{ $inquiry->id }}).format('LL'))
                        // const dateTime{{ $inquiry->id }} = document.getElementById('dateTime{{ $inquiry->id }}').innerHTML
                        // dateTime{{ $inquiry->id }}.innerHTML = moment(dateTime{{ $inquiry->id }}).format('LL')
                    </script>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            <div>
                {{ $inquiries->links() }}
            </div>
        </div>
    </div>
@endsection
