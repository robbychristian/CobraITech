@component('mail::message')
    <div class="fs-6">Dear {{ $data['name'] }},</div>
    <div class="fs-6 mt-5">{{ $data['message'] }}</div>

    Regards,
    HR Representative
@endcomponent
