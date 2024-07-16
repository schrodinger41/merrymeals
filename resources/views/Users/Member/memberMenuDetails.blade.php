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
		<link href="{{ asset('css/menuDetails.css') }}" rel="stylesheet">
</head>
<body>
	
	@section('title')
	{{ $viewMenu->menu_title }} Details
@endsection

@extends('Users.Member.layouts.app')

@section('content')
<?php $partner_id = DB::table('menus')->where('id',$viewMenu->id)->value('partner_id');
									//echo $partner_id;
									$partner_user_id = DB::table('partners')->where('id',$partner_id)->value('user_id');
									//echo $partner_user_id;
									$partner_geolocation = DB::table('users')->where('id',$partner_user_id)->value('geolocation');
									//echo $partner_geolocation;
									$user_geolocation = DB::table('users')->where('id',Auth()->user()->id)->value('geolocation');
									//echo $user_geolocation;

									$user_arr = preg_split ("/\,/", $user_geolocation); 
									$partner_arr = preg_split ("/\,/", $partner_geolocation);

									$Lat1 = $user_arr[0];
									$Long1 =  $user_arr[1];
									$Lat2 = $partner_arr[0] ;
									$Long2 = $partner_arr[1];
									$DistanceKM = 0;
									$DistanceMeter = 0;

									if (isset($_POST['Lat1'])) {

									$Lat1 = $_POST['Lat1'];
									$Long1 = $_POST['Long1'];
									$Lat2 = $_POST['Lat2'];
									$Long2 = $_POST['Long2'];
									}

									$R = 6371;

									$Lat = $Lat2 - $Lat1;
									$Long = $Long2 - $Long1;

									$dLat1 = deg2rad($Lat);
									$dlong1 = deg2rad($Long);

									$a =
									sin($dLat1 / 2) * sin($dLat1 / 2) +
									cos(deg2rad($Lat1)) * cos(deg2rad($Lat2)) *
									sin($dlong1 / 2) * sin($dlong1 / 2);

									$c = 2 * atan2(sqrt($a), sqrt(1 - $a));

									$DistanceKM = $R * $c;

									$DistanceMeter = $DistanceKM * 1000;

									$DistanceKM = round($DistanceKM, 3);

									if ($DistanceKM > 10 ) {
										$message ="Out Of Delivery Range";
									}else{
										$message ="Within Delivery Range";
									}
							
										$weekday=date("w");
										//  echo $weekday."<br>";
										if ($weekday == 0 ||$weekday == 6 ) {
											if ($DistanceKM > 10) {
												$meal_type = "Frozen";
												$message = "This Meal is available today";
											}else{
												// sat or sun and distance less than 10 km
												$meal_type = "Hot";
												$message = "This Meal available only from Monday through Friday";
											}
										}else{
											if ($DistanceKM > 10) {
												$meal_type = "Frozen";
												$message = "Support over weekend only";
											}else{
												$meal_type = "Hot";
												$message = "This Meal is available today";
											}
										}

									
						 ?>
						
						<div class="food-card-container" style="margin-top:70px;">
							<div class="common-container">
									<div class="alert alert-warning" role="alert">
											<p>Based on your location, menu is available according to the day you are ordering and if your distance is within 10 km from our food service partner provider.</p>
									</div>
					
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
													<h2 class="user-names">Time Availability</h2>
													<p class="food-description">{{ $message }}</p>
													<h2 class="user-names">Meal Type</h2>
													<p class="food-description">{{ $meal_type }}</p>
													@if( $memberData->member_meal_duration != 0 )
															@if($message == "This Meal is available today")
																	<div class="button-container">    
																			<a href="{{ route('member#orderConfirmation', [ 'partner_id' => $viewMenu -> partner_id, 'menu_id' => $viewMenu-> id, 'user_id' => Auth()->user()->id]) }}">
																					<button type="submit" value="Order" class="update-button">Order</button>
																			</a>
																	</div>
															@endif
													@endif
											</div>
									</div>
							</div>
					</div>
			
				
	

@endsection
</body>