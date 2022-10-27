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
    <link rel="stylesheet" href="{{ asset('website') }}/login/login.css">
    <title>login</title>
</head>

<body>


    <div id="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-6 col-sm-10 col-11 mx-auto login">
                    <div class="login-content">
                        <h2>Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-area">
                                <i class="fas fa-envelope user"></i>

                                <input id="email" type="email" class=" @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-area">
                                <i class="fa fa-lock lock" aria-hidden="true"></i>

                                <input id="password" type="password"
                                    class="input-pass @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <i class="fa fa-eye icon" aria-hidden="true"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!-- <i class="fa fa-eye-slash icon" aria-hidden="true"></i> -->
                            </div>

                            <input class="" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            <div class="m-2">
                                <button type="submit" class="login-btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                        @if (Route::has('password.request'))
                            <a class="forgot-pass" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        @if (Route::has('register'))
                            
                            <p class="new-member">
                                Not a member? <a href="{{ route('register') }}">Signup</a>
                            </p>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>













    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="{{ asset('website') }}/bs5/js/bootstrap.min.js"></script>
    <script src="{{ asset('website') }}/login/login.js"></script>
</body>

</html>