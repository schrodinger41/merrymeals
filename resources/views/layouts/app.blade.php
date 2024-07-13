<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">     
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">  
</head>
<body>
    <!-- Start nav -->
    <header class="header">
        <div class="container_header">
            <div class="logo">
                <a  href="/"    >
                    <img src="{{ asset('images/logo.png') }}" alt="Meals on Wheels Logo">
                </a>
                
            </div>
            <div class="user-info">
                <div class="user-avatar">
                    <img src="{{ asset('path/to/user-avatar.png') }}" alt="User Avatar">
                </div>
                <div class="user-name">Public User</div>
                @if (Route::has('login'))
                    <div class="dropdowns">
                        <button class="dropdown-toggles">▼</button>
                        <div class="dropdown-menu">
                            @auth
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </header>
    <!-- END nav -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    <!-- Start footer -->
    <footer>
        ©2024 Meals on Wheels
    </footer> 
    <!-- END footer -->
</body>
</html>
