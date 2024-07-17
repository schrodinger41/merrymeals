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
    <title>Management</title>

	<style>
		.fixed-size-textarea {
				width: 100%;
				height: 200px;
				resize: none;
				border-color: black
		}
		.description-area{
			border-color: black!important;
			border-width: 1px!important;
			border-radius: 0.25rem!important;
		}

		.update {
			color: var(--primary-color);
		}
	</style>
</head>

<body>
@section('title')
    Update {{ $updateMenu->menu_title }}
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<!-- Superfish -->
<link rel="stylesheet" href="{{ asset('css/superfish.css') }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<!-- Modernizr JS -->
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}" defer></script>



<div style="margin-top: 150px; min-height: 60vh;">
	<div class="container mt-5 mb-5">
			<div class="row justify-content-center">
					<div class="col-md-6">
							<div class="card">
									<div class="card-body">
											<h3 class="card-title text-center" style="font-weight: 900; font-size: var(--h2-font-size);">
													<span class="update">Update</span> Menu
											</h3>
											<form action="{{ route('admin#saveUpdateMenu', $updateMenu->id) }}" method="POST" enctype="multipart/form-data">
													@csrf
													<div class="mb-3">
															<label for="menu_title" class="form-label" style="font-weight: 900;">Menu Title</label>
															<input type="text" style="font-weight: 600;" class="form-control" id="menu_title" name="menu_title" placeholder="Put your menu title here" value="{{ old('menu_title', $updateMenu->menu_title) }}" required>
													</div>
													<div class="mb-3">
															<label for="menu_description" class="form-label" style="font-weight: 900;">Menu Description</label>
															<textarea class="form-control fixed-size-textarea" style="font-weight: 600;" id="menu_description" name="menu_description" placeholder="Put your menu description here" required>{{ old('menu_description', $updateMenu->menu_description) }}</textarea>
													</div>
													<div class="mb-3">
															<label for="menu_image" class="form-label" style="font-weight: 900;">Menu Picture</label>
															<input type="file" style="font-weight: 600; padding-left:5px;" class="form-control description-area" id="menu_image" name="menu_image" value="{{ old('menu_image', $updateMenu->menu_image) }}" required>
													</div>
													<input type="hidden" name="partner" value="{{ $updateMenu->partner_id }}" required>
													<div class="text-end">
															<button type="button" style="font-weight: 700;" class="btn btn-secondary" onclick="history.back()">Cancel</button>
															<button type="submit" style="font-weight: 700;" class="btn btn-success me-2">Save</button>
													</div>
											</form>
									</div>
							</div>
					</div>
			</div>
	</div>
</div>

@endsection
