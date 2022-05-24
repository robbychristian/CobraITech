@extends('layouts.email-template')

@section('content')
    <div>Dear {{ $data['name'] }},</div>
    <div style="margin: 1.5rem 0">
        {{ $data['message'] }}
    </div>
    <div>
        Regards,
    </div>
    <div style="margin-top: 1rem">
        HR Representative
    </div>
@endsection
