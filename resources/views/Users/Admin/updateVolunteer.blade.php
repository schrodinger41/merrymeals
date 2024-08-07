<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
		
<div id="fh5co-services-section" style="margin-top: 120px; margin-bottom: 30px">

    <div class="row p-3 mt-3 mb-5 container">
        <div class="col-12">
            <h3 style="font-weight: var(--weight-700); color: var(--primary-color)"> EDIT VOLUNTEER DETAILS </h3>
            <hr>
        </div>
    </div>

    @if (Session::has('dataInform'))
        <h4 class="alert alert-warning animate-box text-center" role="alert">
            {{ Session::get('dataInform') }}
        </h4>
    @endif
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-around" style="color: var(--primary-color); font-weight: 600;">
                <div class="animate-box" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 45%">
                    <div class="p-5">
                        <h3 class="text-center pb-3" style="font-size: var(--h3-font-size); font-weight: 900; color: var(--primary-color)">GENERAL INFORMATION</h3>
                        <form action="{{ route('admin#userUpdated', $userData->id) }}" method="POST">
                            @csrf
                            <label class="userManagement">Name</label><br>
                            <input name="name" class="input-md col-md-12" type="text" required="required" value="{{ old('name', $userData->name) }}" style="border: 1px var(--secondary-color) solid; padding: 6px"/>

                            {{-- <label class="userManagement">Gender</label><br> --}}
                            <input name='gender' class="input-md col-md-12" type="hidden" required="required" value="{{ old('gender', $userData->gender) }}" style="border: 1px var(--secondary-color) solid; padding: 6px"/><br><br>

                            <label class="userManagement">Age</label><br>
                            <input name="age" required="required" class="input-md col-md-12" type="text" value="{{ old('age', $userData->age) }}" style="border: 1px var(--secondary-color) solid; padding: 6px"/><br><br>

                            <label class="userManagement">Contact</label><br>
                            <input name='phone' required="required" class="input-md col-md-12" type="text" value="{{ old('phone', $userData->phone) }}" style="border: 1px var(--secondary-color) solid; padding: 6px"/><br><br>

                            <label class="userManagement">Address</label><br>
                            <input name="address" required="required" class="input-md col-md-12" type="text" value="{{ old('address', $userData->address) }}" style="border: 1px var(--secondary-color) solid; padding: 6px"/><br><br>

                            <label class="userManagement">Email</label><br>
                            <input name='email' required="required" class="input-md col-md-12" type="text" value="{{ old('email', $userData->email) }}" style="border: 1px var(--secondary-color) solid; padding: 6px"/><br><br>

                            <div class="text-center p-2"> 
								<button class="btn btn-outline-success">Update</button> &nbsp;
								<a href="{{ route('admin#allMembers') }}" class="btn btn-secondary">Cancel</a>
							</div>
						</form>
					</div>
				</div>
				<div class=" animate-box" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 45%; height: 60%">
					<div class="p-5">
						<h3 class="text-center pb-3" style="font-size: var(--h3-font-size);font-weight: 900; color: var(--primary-color)">VOLUNTEER DETAILS</h3>
						<form action="{{ route('admin#volunteerUpdated', $userData->id) }}" method="POST">
                            @csrf
                            {{-- Vaccination --}}
                            <input name="volunteer_vaccination" class="input-md col-md-12" type="hidden" value="{{ old('volunteer_vaccination', $volunteerData->volunteer_vaccination) }}"/>
                        
                            {{-- Duration --}}
                            <label class="userManagement">Duration</label><br>
                            <input name="volunteer_duration" class="input-md col-md-12" type="text" value="{{ old('volunteer_duration', $volunteerData->volunteer_duration) }}" style="border: 1px var(--secondary-color) solid; padding: 6px"/><br><br>
                        
                            {{-- Available --}}
                            <label class="userManagement">Available</label><br>
                            <div>
                                @php
                                    $availableDays = explode(', ', $volunteerData->volunteer_available); // Convert stored string back to array
                                @endphp
                                <label><input type="checkbox" name="volunteer_available[]" value="Monday" {{ in_array('Monday', $availableDays) ? 'checked' : '' }}> Monday</label>
                                <label><input type="checkbox" name="volunteer_available[]" value="Tuesday" {{ in_array('Tuesday', $availableDays) ? 'checked' : '' }}> Tuesday</label>
                                <label><input type="checkbox" name="volunteer_available[]" value="Wednesday" {{ in_array('Wednesday', $availableDays) ? 'checked' : '' }}> Wednesday</label>
                                <label><input type="checkbox" name="volunteer_available[]" value="Thursday" {{ in_array('Thursday', $availableDays) ? 'checked' : '' }}> Thursday</label>
                                <label><input type="checkbox" name="volunteer_available[]" value="Friday" {{ in_array('Friday', $availableDays) ? 'checked' : '' }}> Friday</label>
                                <label><input type="checkbox" name="volunteer_available[]" value="Saturday" {{ in_array('Saturday', $availableDays) ? 'checked' : '' }}> Saturday</label>
                                <label><input type="checkbox" name="volunteer_available[]" value="Sunday" {{ in_array('Sunday', $availableDays) ? 'checked' : '' }}> Sunday</label>
                            </div>
                        
                            <div class="text-center pt-2"> 
                                <button class="btn btn-outline-success">Update</button> &nbsp;
                                <a href="{{ route('admin#allMembers') }}" class="btn btn-secondary">Cancel</a>
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
