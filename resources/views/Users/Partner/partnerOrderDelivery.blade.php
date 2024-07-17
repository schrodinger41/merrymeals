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
<body style="overflow-x: hidden;">

@section('title')
    Order Status - Partner
@endsection

@extends('Users.Partner.layouts.app')

@section('content')
<div style="min-height: 72.3vh;">
    <div class="fh5co-services-section">
        <div class="container-fluid pt-4">
            <div class="row">
                <div class="delivery-status">
                    <div class="col-md-12 offset-md-0">
                        <div class="mt-5 p-4">
                            <h1 class="text-secondary text-center pt-2 mb-5 display-5" style="font-weight:900;">
                                Order Status - <span style="color: var(--primary-color)">Partner</span>
                            </h1>
                            <div class="row">
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">No.</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Member Name</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Meal Name</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Order Date</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Order Time</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Start Cooking Time</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Menu Status</th>
                                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Order Received Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderData as $order)
                                        <tr>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order -> id }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order -> member_name }}</td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order -> order_menu_name }}</td>
                                            <?php 
                                            $str = $order -> created_at;
                                            $newstr = explode(" ", $str);
                                            $date = $newstr[0];
                                            $time = $newstr[1];
                                            ?>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"><?php echo $date;  ?></td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"><?php echo $time;  ?></td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                                <form action="{{ route('order#updateOrder', $order ->id) }}" method="GET">
                                                <input type="text" name="start_cooking_time" value="{{ $order -> start_cooking_time }}" readonly/>
                                                <button  type="submit" class="btn buttons">Start</button>
                                                </form>
                                            </td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                                <form action="{{ route('order#updateOrder', $order ->id) }}" method="GET">
                                                {{-- <input type="text" name="order_cooking_status" value="{{ $order -> order_cooking_status }}" /> --}}
                                                <select name="order_cooking_status" value="{{ $order -> order_cooking_status }}">
                                                    <option value=""></option>
                                                    <option value="Being prepared">Being prepared</option>
                                                    <option value="Ready to deliver">Ready to delivery</option>
                                                </select>
                                                <button  type="submit" class="btn buttons">Send Status</button>
                                                </form>
                                            </td>
                                            <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                                {{ $order -> order_received_status}}
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


</div>

@endsection