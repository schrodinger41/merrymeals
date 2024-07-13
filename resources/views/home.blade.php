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
            <div class="container_header">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Meals on Wheels Logo">
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
            <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}" style="width:100%">
                <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}" style="width:100%">
                <div class="text">Caption Two</div>
            </div>
        
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}" style="width:100%">
                <div class="text">Caption Four</div>
            </div>
        
            <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </main>

        <footer>
            ©2024 Meals on Wheels
        </footer>      
    </body>
    <script src={{ asset('js/home.js') }}></script>
</html>

