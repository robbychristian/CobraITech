@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">

                    <img src="{{ asset('images/cobra-logo.png') }}" alt="" class="img-fluid mb-5">
                    <h1 class="fw-bold mb-3">Welcome Back!</h1>

                    <div class="d-flex align-items-center w-75 mb-3">
                        <hr>
                        <small class="text-muted mx-3">Enter your Credentials</small>
                        <hr>
                    </div>

                    <form action="" class="w-75 mb-4">
                        <div class="mb-4">
                            <label for="" class="form-label fw-bold">Name</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-4">
                            <label for="" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password">
                        </div>

                        <button class="btn btn-custom w-100">Sign In</button>

                    </form>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
                    <img src="{{ asset('images/login1.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
