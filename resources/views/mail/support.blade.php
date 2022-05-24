@extends('layouts.email-template')

@section('content')
    <div>Dear HR Representative,</div>
    <div style="margin: 1.5rem 0">
        {{ $data['message'] }}
    </div>
    <div>
        Regards,
    </div>
    <div style="margin-top: 1rem">
        {{ $data['name'] }}
    </div>
@endsection
