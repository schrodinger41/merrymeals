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
</head>

<body>
@section('title')
    Welcome
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
<div id="fh5co-services-section">

	@if (Session::has('dataInform'))
		<h4 class="alert alert-warning animate-box text-center" role="alert">
			{{ Session::get('dataInform') }}
		</h4>
	@endif
	<div class="container">
		<div class="row display-flex justify-content">
			<div class="col-md-6 col-sm-6 col-md-offset-3">
				<div class=" animate-box">
					<div class="col-md-12 ">
						<h3>General Information</h3>
						<form action="{{ route('admin#userUpdated', $userData->id) }}" method="POST">
							@csrf
							<label class="userManagement">Name</label><br>
							<input name="name" class="input-md col-md-12" type="text" value="{{ old('name', $userData->name) }}"/>

							{{-- <label class="userManagement">Gender</label><br> --}}
							<input name='gender' class="input-md col-md-12" type="hidden" value="{{ old('gender', $userData->gender) }}"/><br><br>

							<label class="userManagement">Age</label><br>
							<input name="age" class="input-md col-md-12" type="text" value="{{ old('age', $userData->age) }}"/><br><br>

							<label class="userManagement">Contact</label><br>
							<input name='phone' class="input-md col-md-12" type="text" value="{{ old('phone', $userData->phone) }}"/><br><br>

							<label class="userManagement">Address</label><br>
							<input name="address" class="input-md col-md-12" type="text" value="{{ old('address', $userData->address) }}"/><br><br>

							<label class="userManagement">Email</label><br>
							<input name='email' class="input-md col-md-12" type="text" value="{{ old('email', $userData->email) }}"/><br><br>

							<div class="text-center"> 
								<button class="btn-primary">Update</button> &nbsp;
								<a href="{{ route('admin#allMembers') }}">Cancel</a>
							</div>
						</form>
					</div>
				</div>
				<div class=" animate-box">
					<div class="col-md-12 ">
						<h3 class="mt-5 pt-5">Volunteer Details</h3>
						<form action="{{ route('admin#memberUpdated', $userData->id) }}" method="POST">
							@csrf
							{{-- <label class="userManagement">Vaccination</label><br> --}}
							<input name="volunteer_vaccination" class="input-md col-md-12" type="hidden" value="{{ old('volunteer_vaccination', $volunteerData->volunteer_vaccination) }}"/>

							<label class="userManagement">Duration</label><br>
							<input name="volunteer_duration" class="input-md col-md-12" type="text" value="{{ old('volunteer_duration', $volunteerData->volunteer_duration) }}"/><br><br>

							<label class="userManagement">Available</label><br>
							<input name="volunteer_available" class="input-md col-md-12" type="text" value="{{ old('	volunteer_available', $volunteerData->volunteer_available) }}"/><br><br>

							<div class="text-center"> 
								<button class="btn-primary">Update</button> &nbsp;
								<a href="{{ route('admin#allMembers') }}">Cancel</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END What we do -->

@endsection