<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--  Enable Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .buttons {
            background-color: var(--accent-color);
            color: white;
            font-weight: 800;
            margin-left: 10px;
        }

        .buttons:hover {
            background-color: var(--primary-color);
            color: white;
        }
    </style>
</head>
<body>

@section('title')
    Delivery Status - Volunteer
@endsection

@extends('Users.Volunteer.layouts.app')

@section('content')
<div id="fh5co-services-section" style="margin-top: 30px; min-height: 70vh;">
    <div class="container-fluid pt-4">
       
            <div class="row">
                <div class="delivery-volunteer">
                    <div class="col-md-12 offset-md-0">
                        <div class="mt-5 p-4">
                            <h1 class="text-secondary text-center mb-5 display-5" style="font-size: var(--h1-font-size); font-weight: 900;">
                                Delivery Status - <span style="color: var(--primary-color)">Volunteer </span>
                            </h1>
                            <div class="row">
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">No.</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Member Name</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Meal Name</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Restaurant</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Restaurant address</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Order date</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Order Time</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Rider</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Start Delivery Time</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Delivery Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($deliveryData as $delivery)
                                        <tr>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $delivery->id }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $delivery->member_name }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $delivery->member_address }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $delivery->partner_restaurant_name }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $delivery->partner_address }}</td>
                                            <?php 
                                            $str = $delivery->created_at;
                                            $newstr = explode(" ", $str);
                                            $date = $newstr[0];
                                            $time = $newstr[1];
                                            ?>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $date }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $time }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                                <form action="{{ route('delivery#updateDelivery', $delivery->id) }}" method="GET">
                                                    <input type="text" name="volunteer_name" value="{{ $delivery->volunteer_name }}" readonly/>
                                                    <button type="submit" class="btn buttons">Accept request</button>
                                                </form>
                                            </td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                                <form action="{{ route('delivery#updateDelivery', $delivery->id) }}" method="GET">
                                                    <input type="text" name="start_deliver_time" value="{{ $delivery->start_deliver_time }}" readonly/>
                                                    <button type="submit" class="btn buttons">Start</button>
                                                </form>
                                            </td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                                <form action="{{ route('delivery#updateDelivery', $delivery->id) }}" method="GET">
                                                    <select name="delivery_status" value="{{ $delivery->delivery_status }}">
                                                        <option value=""></option>
                                                        <option value="Pick the meal">Pick up the meal</option>
                                                        <option value="On the way to destination">On the way to destination</option>
                                                        <option value="Arrived at destination">Arrived at destination</option>
                                                    </select>
                                                    <button type="submit" class="btn buttons">Send Status</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>  
</div>
@endsection
</body>
</html>
