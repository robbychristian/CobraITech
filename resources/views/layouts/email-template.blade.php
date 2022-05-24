<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: #484848; background-color: #F2F3F7">
    <div style="margin: 0 auto; background-color: #fff; width: 33rem; padding: 1rem 0">
        <div style="text-align: center; font-weight: 700; font-size: 1.5rem;">
            Cobra iTech Services Corporation
        </div>
        <img src="{{ public_path('images/EmailTemplate1.png') }}" style="margin: 0 auto; display: block" width="300">
        <div style="padding: 1rem">
            @yield('content')
        </div>
        <div style="border-bottom: 0.5px solid #e0e0e0; width: 85%; display: block; margin: 1rem auto"></div>

        <div style="text-align: center; font-size: 11px">
            Copyright 2022&copy; <a href="{{ route('welcome.home') }}"> Cobra iTech Services Corporation. </a> All
            Rights Reserved
            <br>
            Suite 402, Jade Place Condominium,
            33 Visayas Avenue, Bgy. Vasra, QC
            <br>
            (02) 577 4822
        </div>

    </div>
</body>

</html>
