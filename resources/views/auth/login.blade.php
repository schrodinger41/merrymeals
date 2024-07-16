<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Styles -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
    @extends('layouts.app')

    @section('title')
        Login
    @endsection

    @section('content')

    <div class="background" style="background-image: url('{{ asset('images/login_img.jpg') }}');">
        <div class="login-container">
            <h2>{{ __('LOGIN') }}</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                    <i class="fas fa-user"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    <i class="fas fa-lock"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="options">
                    <label><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password</a>
                    @endif
                </div>
                <button class="login-button" type="submit">Login</button>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    @endsection
</body>
</html>
