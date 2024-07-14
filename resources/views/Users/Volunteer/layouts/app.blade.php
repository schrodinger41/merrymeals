<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body >
    <header class="header">
        <div class="container_header">
            <div class="logo">
                <a  href="{{ route('volunteer#index') }}"    >
                    <img src="{{ asset('images/logo.png') }}" alt="Meals on Wheels Logo">
                </a>
                
            </div>
            
            <div class="user-info">
                <li class="list-item"><a href="{{ route('volunteer#index') }}">Home</a></li>
                <li class="list-item"><a href="{{ route('volunteer#viewAllMenu') }}">Menu</a></li>
                <li class="list-item"><a href="/about">About</a></li>
                <li class="list-item"><a href="/contact">Contact</a></li>
                
                
                @if (Route::has('login'))
                    <div class="dropdowns">
                        <button class="dropdown-toggles"><div class="user-name">{{ Auth()->user()->name }}▼</button>
                        <div class="dropdown-menus">
                            <li><a class="dropdown-item" href="{{ route('member#updateProfile', Auth()->user()->id) }}">Update </a></li>
                            <li><a class="dropdown-item" href="{{ route('deliver#AllDeliveryForVolunteer') }}">Deliveries </a></li>
                            
                            <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a>
                                    <button type="submit" class="btn pt-0 pb-1 px-0 nav-link text-dark" style="button:focus { outline: none; }" >  <i class="fas fa-sign-out-alt" ></i> Logout </button>
                                </a>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </header>

    
<!-- Content -->
@yield('content')
<!-- End Content -->

     <!-- Start footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="{{ route('volunteer#index') }}">Home</a>
            <a href="{{ route('volunteer#viewAllMenu') }}">Menu</a>
            <li class="list-item"><a href="/contact">Contact</a></li>
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








