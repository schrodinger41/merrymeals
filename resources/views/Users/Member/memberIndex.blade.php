<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Member Home - Meals on Wheels</title>

    <!-- CSS -->
    <link href="{{ asset('css/memberHome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @section('title')
        Welcome Member
    @endsection

    @extends('Users.Member.layouts.app')

    @section('content')
        <div class="background-container">
            <img src="{{ asset('images/member_home_img.jpg') }}" class="background-image">
            <div class="content">
                <h1><span>Nourish</span> Your <span>Day</span> with <span>Our Meals</span></h1>
                <a href="/members-menu" class="button">View Menu</a>
            </div>
        </div>
    @endsection
</body>

</html>