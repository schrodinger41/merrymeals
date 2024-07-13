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
    @section('title')
    Welcome
    @endsection
    
    @extends('layouts.app')
    
    @section('content')

        <main>
            <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}">
                <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}">
                <div class="text">Caption Two</div>
            </div>
        
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}">
                <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="{{ asset('images/img2.jpg') }}">
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

    <script src="{{ asset('js/home.js') }}"></script>     
    </body>
    @endsection
</html>

