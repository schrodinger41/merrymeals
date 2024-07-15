<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Volunteer Home - Meals on Wheels</title>

    <!-- CSS -->
    <link href="{{ asset('css/volunteerHome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @section('title')
        Welcome Volunteer
    @endsection

    @extends('Users.Volunteer.layouts.app')

    @section('content')
        <div class="background-container">
            <img src="{{ asset('images/volunteer_home_img.jpg') }}" class="background-image">
            <div class="content">
                <h1>Delivering <span>More</span> Than Just Meals</h1>
                <a href="{{ route('deliver#AllDeliveryForVolunteer') }}" class="button">View Deliveries</a>
            </div>
        </div>
    @endsection
</body>
</html>