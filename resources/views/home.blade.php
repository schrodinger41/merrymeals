<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- CSS -->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">        
    </head>
    <body>     
        <header class="header">
            <div class="container">
                <div class="logo">
                    <img src="path/to/logo.png" alt="MerryMeals Logo">
                </div>
                <div class="user-info">
                    <div class="user-avatar">
                        <img src="path/to/user-avatar.png" alt="User Avatar">
                    </div>
                    <div class="user-name">Public User</div>
                    @if (Route::has('login'))
                        <div class="dropdown">
                            <button class="dropdown-toggle">▼</button>
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

        <main>
            <h1>utot</h1>
        </main>

        <footer>
            ©2024 Meals on Wheels
        </footer>      
    </body>
</html>
