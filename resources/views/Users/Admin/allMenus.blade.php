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

</head>
<body>

@section('title')
	MENU MANAGEMENT
@endsection

@extends('Users.Admin.layouts.app')

@section('content')		

<div style="min-height: 60vh;">
	<div class="container" style="margin-top: 120px;">
			<div class="row p-3 mt-3 mb-1">
					<div class="col-12 text-center">
							<h3 style="font-weight: var(--weight-700); font-size: var(--h2-font-size);"> 
									<span style="color: var(--primary-color);"> MENU </span> 
									<span style="color: var(--primary-color);"> MANAGEMENT </span> 
							</h3>
							<hr>
							
					</div>
			</div>
			
			<!-- MENU -->
			<div class="row" style="gap: 40px; ">
					@foreach ($menuData as $menu)
					<div class="card mb-2 mt-2" style="width: 335px; background-color: var(--primary-color); color: white; border: 2px #344d3b solid; border-radius: 40px;">
						<img class="card-img-top mt-2" src="{{ asset('uploads/meal/' . $menu->menu_image) }}" style="width: 100%; height: 300px; border-radius: 40px; padding-bottom: 10px;">
						<hr style="color: white;">
						<div class="card-body">
								<h4 class="card-title" style="font-size:var(--h2-font-size);font-weight: 800">{{ $menu->menu_title }}</h4>
								<?php
										$partner_id = DB::table('menus')->where('id', $menu->id)->value('partner_id');
										$partner_user_id = DB::table('partners')->where('id', $partner_id)->value('user_id');
										$partner_geolocation = DB::table('users')->where('id', $partner_user_id)->value('geolocation');
										$user_geolocation = DB::table('users')->where('id', Auth()->user()->id)->value('geolocation');
				
										$user_arr = preg_split("/\,/", $user_geolocation);
										$partner_arr = preg_split("/\,/", $partner_geolocation);
				
										$Lat1 = $user_arr[0] ?? null;
										$Long1 = $user_arr[1] ?? null;
										$Lat2 = $partner_arr[0] ?? null;
										$Long2 = $partner_arr[1] ?? null;
										$DistanceKM = 0;
										$DistanceMeter = 0;
				
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
												$DistanceMeter = $DistanceKM * 1000;
				
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
								<div class="card-text">
										<div style="padding-bottom: 8px;">{{ $menu->menu_description }}</div>
										<div class="d-flex justify-content-between align-items-center">
                      @if ( Auth::user() -> role == 'admin')
                      <p class="btn btn-outline-light" ><a href="{{ route('admin#updateMenu', $menu->id) }}">Update Menu</p>
                      <p class="btn btn-outline-light"><a href="{{ route('admin#deleteMenu', $menu->id) }}">Delete Menu</a></p>
                      @endif
										</div>
								</div>
						</div>
				</div>
				
					
					@endforeach
			</div>

			

			
	</div>
</div>
@endsection

</body>