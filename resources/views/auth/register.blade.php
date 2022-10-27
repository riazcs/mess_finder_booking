<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('website') }}/bs5/css/bootstrap.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('website') }}/fa5/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/fa5/css/fontawesome.min.css">
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('website') }}/signup/signup.css">
    <title>Signup</title>
</head>

<body>


    <div id="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-6 col-sm-10 col-11 mx-auto login">
                    <div class="login-content">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <h2>Signup</h2>
                            <div class="input-area">
                                <i class="fa fa-user user" aria-hidden="true"></i>
                                <input id="name" placeholder="Full Name" type="text"
                                    class=" @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-area">
                                <i class="fa fa-user user" aria-hidden="true"></i>

                                <input id="email" placeholder="Gmail" type="email"
                                    class=" @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-area">
                                <i class="fa fa-lock lock" aria-hidden="true"></i>
                                
                                <input id="password" type="password" placeholder="Password"
                                    class="input-pass1 @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">
                                <i class="fa fa-eye icon" id="icon1" aria-hidden="true"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-area">
                                <i class="fa fa-lock lock" aria-hidden="true"></i>
                                
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="input-pass2" name="password_confirmation" required autocomplete="new-password">
                                <i class="fa fa-eye icon" id="icon2" aria-hidden="true"></i>
                            </div>

                            <button type="submit" class="login-btn">
                                {{ __('Register') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="{{ asset('website') }}/bs5/js/bootstrap.min.js"></script>
    <script src="{{ asset('website') }}/signup/signup.js"></script>
</body>

</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
