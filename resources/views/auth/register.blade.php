<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Styles -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
</head>
<body>
    @extends('layouts.app')
    
    @section('title')
    Register
    @endsection

    @section('content')
    <div class="background" style="background-image: url('{{ asset('images/login_img.jpg') }}')">
        <div class="register-container">
            <h2>{{ __('REGISTER WITH US!') }}</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-group">
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                    <i class="fas fa-venus-mars"></i>
                </div>
                <div class="input-group">
                    <input type="number" name="age" id="age" placeholder="Age" required>
                    <i class="fas fa-calendar"></i>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="input-group">
                    <input type="tel" name="phone" id="phone" maxlength="11" placeholder="Phone Number" required>
                    <i class="fas fa-phone"></i>
                </div>
                <div class="input-group">
                    <textarea name="address" id="address" placeholder="Address" required></textarea>
                    <i class="fas fa-home"></i>
                </div>
                <div class="input-group">
                    <input type="text" name="geolocation" id="location" placeholder="Geo Location">
                    <input type="button" value="Get Location" onclick="getlocation()" />
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <script>
                    function getlocation() {
                        navigator.geolocation.getCurrentPosition(showLoc);
                    }
    
                    function showLoc(pos) {
                        var lat = pos.coords.latitude;
                        var log = pos.coords.longitude;
                        document.getElementById("location").value = lat + "," + log;
                    }
                </script>
                <div class="input-group">
                    <select name="role" required>
                        <option value="">Register as:</option>
                        <option value="member">Member</option>
                        <option value="partner">Partner</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                    <i class="fas fa-users"></i>
                </div>
    
                <!-- Member box -->
                <div class="member box" style="display: none;">
                    <div class="input-group">
                        <input type="text" name="member_caregiver_name" id="member_caregiver_name" placeholder="Care Giver Name">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="input-group">
                        <input type="text" name="member_caregiver_relation" id="member_caregiver_relation" placeholder="Care Giver Relationship">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="input-group">
                        <input type="text" name="member_medical_condition" id="member_medical_condition" placeholder="Requestor Medical Condition">
                        <i class="fas fa-notes-medical"></i>
                    </div>
                    <div class="input-group">
                        <input type="number" name="member_medical_number" id="member_medical_number" placeholder="Medical Card ID">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="input-group">
                        <label>Meal Plan Duration (days):</label>
                        <input type="number" name="member_meal_duration" value="30" readonly placeholder="Meal Plan Duration (days)">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </div>
    
                <!-- Partner box -->
                <div class="partner box" style="display: none;">
                    <div class="input-group">
                        <input type="text" name="partnership_restaurant" placeholder="Restaurant Name">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="input-group">
                        <input type="text" name="partnership_duration" placeholder="Partnership Duration (days)">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
    
                <!-- Volunteer box -->
                <div class="volunteer box" style="display: none;">
                    <div class="input-group">
                        <label>Volunteer Vaccination Status:</label>
                        <div>
                            <label><input type="radio" name="volunteer_vaccination" value="0"> Yes</label>
                            <label><input type="radio" name="volunteer_vaccination" value="1"> No</label>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" name="volunteer_duration" placeholder="Volunteer Duration (days)">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="input-group">
                        <label>Available day/s:</label>
                        <div>
                            <label><input type="checkbox" name="volunteer_available[]" value="Monday"> Monday</label>
                            <label><input type="checkbox" name="volunteer_available[]" value="Tuesday"> Tuesday</label>
                            <label><input type="checkbox" name="volunteer_available[]" value="Wednesday"> Wednesday</label>
                            <label><input type="checkbox" name="volunteer_available[]" value="Thursday"> Thursday</label>
                            <label><input type="checkbox" name="volunteer_available[]" value="Friday"> Friday</label>
                            <label><input type="checkbox" name="volunteer_available[]" value="Saturday"> Saturday</label>
                            <label><input type="checkbox" name="volunteer_available[]" value="Sunday"> Sunday</label>
                        </div>
                    </div>
                </div>
    
                <button class="register-button" type="submit">Register</button>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    @endsection
</body>
</html>
