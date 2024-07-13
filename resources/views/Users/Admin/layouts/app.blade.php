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

    <script defer src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Styles -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">   
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
                <li class="list-item"><a href="{{ route('admin#index') }}">Home</a></li>
                <div class="dropdowns">
                    <button class="dropdown-toggles">Manage Users▼</button>
                    <div class="dropdown-menus">
                        <a href="{{ route('admin#allMembers') }}">Member and Care Giver</a>
                        <a href="{{ route('admin#allPartners') }}">Partners</a>
                        <a href="{{ route('admin#allVolunteers') }}">Volunteers</a>
                        <a href="{{ route('admin#allDonors') }}">Donors</a>
                    </div>
                </div>
                <li class="list-item">><a href="{{ route('admin#allMenus') }}">Manage Menus</a></li>
                <li class="list-item">><a href="{{ route('admin#allDeliveries') }}">Manage Deliveries</a></li>
                <li class="list-item"><a href="/about">About</a></li>
                <li class="list-item"><a href="/contact">Contact</a></li>
                
                
                @if (Route::has('login'))
                    <div class="dropdowns">
                        <button class="dropdown-toggles"><div class="user-name">{{ Auth()->user()->name }}▼</button>
                        <div class="dropdown-menus">
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
<footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
        </div>
        <div class="footer-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class="footer-social">
            <a href="#"><box-icon class="social-link" type='logo' name='facebook-circle' size='50px'></box-icon></a>
            <a href="#"><box-icon class="social-link" name='instagram-alt' type='logo' size='50px'></box-icon></a>
        </div>
    </div>
    <div class="footer-bottom">
        &copy;2024 Meals on Wheels
    </div>
</footer>
<!-- END footer -->
</body>
</html>
