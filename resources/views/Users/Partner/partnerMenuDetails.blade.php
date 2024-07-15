<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/menuDetails.css') }}" rel="stylesheet">
</head>
<body>
@section('title')
THIS WEEK'S MENU!
@endsection

@extends('Users.Partner.layouts.app')

@section('content')
    <div class="food-card-container" style="margin-top: 80px;">
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
                  <a href="{{ route('partner#deleteMenu', $viewMenu->id) }}"><button type="submit" value="Delete" class="delete-button">Delete</button></a>
                  <a href="{{ route('partner#updateMenu', $viewMenu->id) }}"><button type="submit" value="Update" class="update-button">Update</button></a>
              </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
