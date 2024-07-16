<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Title -->
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menuDetails.css') }}" rel="stylesheet">
</head>
<body>
    @extends('Users.Partner.layouts.app')

    @section('content')
        <div class="food-card-container" style="margin-top: 80px;">
            <div class="common-container">
                <div class="food-card">
                    <div class="food-image">
                        @if ($viewMenu->menu_image)
                            <img src="{{ asset('uploads/meal/'. $viewMenu->menu_image) }}" class="img-thumbnail" alt="category image">
                        @endif
                    </div>
                    <div class="food-details">
                        <h1 class="food-name">{{ $viewMenu->menu_title }}</h1>
                        <h2 class="user-names">Description</h2>
                        <p class="food-description">{{ $viewMenu->menu_description }}</p>
                        <div class="button-container">
                            <a href="{{ route('partner#deleteMenu', $viewMenu->id) }}"><button type="button" class="btn delete-button">Delete</button></a>
                            <a href="{{ route('partner#updateMenu', $viewMenu->id) }}"><button type="button" class="btn update-button">Update</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    @endsection

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
