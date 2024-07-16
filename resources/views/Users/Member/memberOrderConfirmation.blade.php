<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Enable Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Confirm Your Order</title>
</head>
<body>

@extends('Users.Member.layouts.app')

@section('content')
<?php
$partner_id = DB::table('menus')->where('id', $partnerData->id)->value('partner_id');
$partner_user_id = DB::table('partners')->where('id', $partner_id)->value('user_id');
$partner_geolocation = DB::table('users')->where('id', $partner_user_id)->value('geolocation');
$user_geolocation = DB::table('users')->where('id', Auth()->user()->id)->value('geolocation');

$user_arr = preg_split("/\,/", $user_geolocation);
$partner_arr = preg_split("/\,/", $partner_geolocation);

$Lat1 = isset($user_arr[0]) ? $user_arr[0] : null;
$Long1 = isset($user_arr[1]) ? $user_arr[1] : null;
$Lat2 = isset($partner_arr[0]) ? $partner_arr[0] : null;
$Long2 = isset($partner_arr[1]) ? $partner_arr[1] : null;

$DistanceKM = 0;

if ($Lat1 !== null && $Long1 !== null && $Lat2 !== null && $Long2 !== null) {
    $R = 6371; // Radius of the Earth in km

    $Lat = $Lat2 - $Lat1;
    $Long = $Long2 - $Long1;

    $dLat1 = deg2rad($Lat);
    $dlong1 = deg2rad($Long);

    $a = sin($dLat1 / 2) * sin($dLat1 / 2) +
        cos(deg2rad($Lat1)) * cos(deg2rad($Lat2)) *
        sin($dlong1 / 2) * sin($dlong1 / 2);

    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    $DistanceKM = $R * $c;
    $DistanceKM = round($DistanceKM, 3);
} else {
    $DistanceKM = 'Unknown';
}

$weekday = date("w");

if ($weekday == 0 || $weekday == 6) {
    if ($DistanceKM > 10) {
        $meal_type = "Cold";
        $message = "This Meal is available today";
    } else {
        // sat or sun and distance less than 10 km
        $meal_type = "Hot";
        $message = "This Meal available only from Monday through Friday";
    }
} else {
    if ($DistanceKM > 10) {
        $meal_type = "Cold";
        $message = "Support over weekend only";
    } else {
        $meal_type = "Hot";
        $message = "This Meal is available today";
    }
}
?>

<div class="container mt-5 mb-5 px-5">
    <a href="javascript:history.go(-1)" class="text-decoration-underline text-primary">Click here to cancel order and go back to menu</a>

    <div class="row mt-3">
        <div class="col-12">
            <h1 class="text-center">Confirm Your Order</h1>
        </div>

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('order#saveOrder') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="mb-5 fs-4 fw-bold text-uppercase text-center">Your Details</h3>
                                <div class="mb-4 fs-5">
                                    <label class="form-label" for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input class="form-control" type="text" id="fname" name="member_name" value="{{ $userData->name }}" readonly>
                                </div>
                                <div class="mb-4 fs-5">
                                    <label class="form-label" for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input class="form-control" type="text" id="email" name="email" value="{{ $userData->email }}" readonly>
                                </div>
                                <div class="mb-4 fs-5">
                                    <label class="form-label" for="adr"><i class="fa fa-address-card"></i> Address</label>
                                    <input class="form-control" type="text" id="adr" name="member_address" value="{{ $userData->address }}" readonly>
                                </div>
                                <div class="mb-4 fs-5">
                                    <label class="form-label" for="phone"><i class="fa fa-phone"></i> Phone</label>
                                    <input class="form-control" type="text" id="phone" name="member_phone" value="{{ $userData->phone }}" readonly>
                                </div>
                                <div class="row fs-5">
                                    <div class="col-6 mb-4">
                                        <label class="form-label" for="caregiver">Caregiver Name</label>
                                        <input class="form-control" type="text" id="caregiver" name="caregiver" value="{{ $memberData->member_caregiver_name }}" readonly>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label class="form-label" for="relation">Caregiver Relation</label>
                                        <input class="form-control" type="text" id="relation" name="relation" value="{{ $memberData->member_caregiver_relation }}" readonly>
                                    </div>
                                      <img src="{{ asset('images/quote.png') }}" class="img-fluid mx-auto mt-5 d-block" alt="Placeholder Image" style="width: 80%;">
                                </div>
                            </div>                            

                            <div class="col-md-6">
                                <h3 class="mb-3 fs-4 fw-bold text-uppercase text-center">Menu To Order</h3>
                                <div class="mb-3 text-center">
                                    @if ($menuData->menu_image)
                                        <img src="{{ asset('uploads/meal/' . $menuData->menu_image) }}" class="img-thumbnail" alt="menu image">
                                    @endif
                                    <input type="hidden" name="order_menu_image" value="{{ $menuData->menu_image }}">
                                    <input type="hidden" name="menu_id" value="{{ $menuData->id }}">
                                    <input type="hidden" name="partner_id" value="{{ $partnerData->id }}">
                                    <input type="hidden" name="member_id" value="{{ $memberData->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                                    <input type="hidden" name="partner_address" value="{{ $partnerData->partnership_address }}">
                                </div>
                                
                                <div class="mb-4 fs-5">
                                    <label class="form-label" for="cname">Menu Name</label>
                                    <input class="form-control" type="text" id="cname" name="order_menu_name" value="{{ $menuData->menu_title }}" readonly>
                                </div>
                                <div class="mb-4 fs-5">
                                    <label class="form-label" for="ccnum">Menu Type</label>
                                    <input class="form-control" type="text" id="ccnum" name="order_menu_type" value="{{ $meal_type }}" readonly>
                                </div>
                                <div class="mb-4 fs-5">
                                    <label class="form-label" for="expmonth">Menu Prepared By</label>
                                    <input class="form-control" type="text" id="expmonth" name="order_menu_restaurant" value="{{ $partnerData->partnership_restaurant }}" readonly>
                                </div>
                                <div class="row fs-5">
                                    <div class="col-6 mb-4">
                                        <label class="form-label" for="expyear">Delivered By</label>
                                        <input class="form-control" type="text" id="expyear" name="volunteer_name" value="Volunteer to be assigned" readonly>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label class="form-label" for="cvv">Meal Plan</label>
                                        <input class="form-control" type="text" id="cvv" name="menu_plan" value="{{ $memberData->member_meal_duration - 1 }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Confirm Order" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
<script src="{{ asset('js/sticky.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}" defer></script>
<script src="{{ asset('js/hoverIntent.js') }}" defer></script>
<script src="{{ asset('js/superfish.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>

@endsection
</body>
</html>
