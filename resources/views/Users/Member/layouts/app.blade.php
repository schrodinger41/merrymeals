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

    <!-- Styles -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">     
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">  

</head>
<body >
    <header class="header">
        <div class="container_header">
            <div class="logo">
                <a  href="/"    >
                    <img src="{{ asset('images/logo.png') }}" alt="Meals on Wheels Logo">
                </a>
                
            </div>
            
            <div class="user-info">
                <li class="list-item"><a href="{{ route('member#index') }}">Home</a></li>
                <li class="list-item"><a href="{{ route('member#viewAllMenu') }}">Menu</a></li>
                <li class="list-item"><a href="/about">About</a></li>
                <li class="list-item"><a href="/contact">Contact</a></li>
                <div class="user-avatar list-item">
                    <img src="{{ asset('images/user-icon.png') }}" alt="User Avatar">
                </div>
                
                <div class="user-name">{{ Auth()->user()->name }}</div>

                @if (Route::has('login'))
                    <div class="dropdowns">
                        <button class="dropdown-toggles">▼</button>
                        <div class="dropdown-menus">
                            <li><a class="dropdown-item" href="{{ route('member#updateProfile', Auth()->user()->id) }}">Update </a></li>
                            <?php 
                                $order_id = DB::table('orders')->where('user_id',Auth()->user()->id)->value('id');
                            ?>
                            @if($order_id != null)
                            <li><a class="dropdown-item" href="{{ route('order#showOrderDelivery', Auth()->user()->id) }}">My Order</a></li>
                            @endif
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









