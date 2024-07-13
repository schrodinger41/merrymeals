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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    @section('title')
        THIS WEEK'S MENU!
    @endsection

    @extends('layouts.app')
    
    @section('content')
        <div class="container">
		<!-- MENU -->
		<div class="row" style="gap: 60px;">
				<div class="card mb-2" style="width: 335px; background-color: #4A7255; color: white; border: 2px #344d3b solid;
                border-radius: 40px;">
					<img class="card-img-top mt-3" src="https://store-images.s-microsoft.com/image/apps.38456.9007199267003607.4d66cde1-46fd-42b7-93c7-e05d782f5e5d.cfdf91f5-dc2a-4178-96fa-d2c156ae62cd"
					 style="width: 100%; border-radius: 40px;">
					<hr style="color: white;">
					<div class="card-body">
						<h4 class="card-title">Meal Name</h4>
						<div class="card-text d-flex justify-content-between">
							<p> <i class="fas fa-user" style="color: #e4e4e4;"></i> Username </p>
                            <a href="" class="btn btn-outline-light">View
							</a>
                        </div>
					</div>
				</div>
		</div>
    @endsection
</body>
</html>