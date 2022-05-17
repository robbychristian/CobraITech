# Hi, Applicant!

{{ $data['message'] }}

@component('mail::button', ['url' => ''])
    Button Text
@endcomponent

<a href="http://127.0.0.1:8000/api/downloadpdf/{{ $pdf }}/{{ $data['email'] }}">PRESS PLS</a>

Thanks,<br>
{{ config('app.name') }}
