@component('mail::message')
    {{ $data['name'] }}

    {{ $data['message'] }}

    Thanks,<br>
    {{ $data['name'] }}
@endcomponent
