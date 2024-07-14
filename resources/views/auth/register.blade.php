<!DOCTYPE html>
<html lang="en">
 
<head>
    <style type="text/css">
        #form {
            max-width: 500px;
            padding: 20px;
            margin: 50px auto;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,0.1);
        }

        label {
            font-weight: normal;
        }
    </style>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
@section('title')
    Register
    @endsection

    @extends('layouts.app')
    @section('content')
<body>
    

   
    <div class="container-fluid" style="margin-top: 82px;">
        <div class="row" style="display: flex;">
            <div class="col col-sm-8" id="form">
                <h2>Register With Us!</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-4">
                        <label for="name" class="col-md-4 col-form-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>

                    <fieldset class="row mb-3">
                        <label class="col-form-label col-sm-4 pt-0">Gender</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inline_Radio1" value="0" required="">
                                <label class="form-check-label" for="inlineRadio1" name="gender">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inline_Radio2" value="1" required="">
                                <label class="form-check-label" for="inlineRadio2" name="gender">Female</label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="row mb-4">
                        <label for="age" class="col-sm-4 col-form-label">Age</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="age" id="age" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="phone" class="col-sm-4 col-form-label">Phone number</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" maxlength="11" required name="phone" id="phone">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="address" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" required name="address" id="address"></textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="geolocation" class="col-sm-4 col-form-label">Geo Location <span>(To better improve our services)</span></label>
                        <div class="col-sm-8" style="display: flex; height: fit-content;">
                            <input type="text" name="geolocation" id="location" />
                            <input type="button" value="GetLocation" onclick="getlocation()" />
                        </div>
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

                    <div class="row mb-4">
                        <label for="role" class="col-sm-4 col-form-label">Register as:</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="role" required>
                                <option value="">Please select</option>
                                <option value="member">Member</option>
                                <option value="partner">Partner</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                        </div>
                    </div>

                    <!-- Member box -->
                    <div class="member box">
                        <div class="row mb-4">
                            <label for="member_caregiver_name" class="col-sm-4 col-form-label">Care Giver Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="member_caregiver_name" id="member_caregiver_name">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="member_caregiver_relation" class="col-sm-4 col-form-label">Care Giver Relationship</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" maxlength="11" name="member_caregiver_relation" id="member_caregiver_relation">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="member_medical_condition" class="col-sm-4 col-form-label">Requestor Medical Condition</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" maxlength="11" name="member_medical_condition" id="member_medical_condition">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="member_medical_number" class="col-sm-4 col-form-label">Medical Card ID</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" maxlength="11" name="member_medical_number" id="member_medical_number">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="member_meal_duration" class="col-sm-4 col-form-label">Meal Plan Duration (days)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" maxlength="11" name="member_meal_duration" value="30" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Partner box -->
                    <div class="partner box">
                        <div class="row mb-4">
                            <label for="partnership_restaurant" class="col-sm-4 col-form-label">Restaurant Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="partnership_restaurant">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="partnership_duration" class="col-sm-4 col-form-label">Partnership Duration</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="partnership_duration">
                            </div>
                        </div>
                    </div>

                    <!-- Volunteer box -->
                    <div class="volunteer box">
                        <fieldset class="row mb-3">
                            <label class="col-form-label col-sm-4 pt-0">Volunteer Vaccination Status</label>
                            <div class="col-sm-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="volunteer_vaccination" id="inlineRadio1" value="0">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="volunteer_vaccination" id="inlineRadio2" value="1">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row mb-4">
                            <label for="volunteer_duration" class="col-sm-4 col-form-label">Volunteer Duration</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="volunteer_duration">
                            </div>
                        </div>

                        <fieldset class="row mb-3">
                            <label class="col-form-label col-sm-4 pt-0">Available day</label>
                            <div class="col-sm-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="volunteer_available[]" value="Monday" type="checkbox">
                                    <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="volunteer_available[]" value="Tuesday" type="checkbox">
                                    <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="volunteer_available[]" value="Wednesday" type="checkbox">
                                    <label class="form-check-label" for="inlineCheckbox3">Wednesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="volunteer_available[]" value="Thursday" type="checkbox">
                                    <label class="form-check-label" for="inlineCheckbox4">Thursday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="volunteer_available[]" value="Friday" type="checkbox">
                                    <label class="form-check-label" for="inlineCheckbox5">Friday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="volunteer_available[]" value="Saturday" type="checkbox">
                                    <label class="form-check-label" for="inlineCheckbox6">Saturday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="volunteer_available[]" value="Sunday" type="checkbox">
                                    <label class="form-check-label" for="inlineCheckbox7">Sunday</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <button type="submit" class="btn btn-outline-primary" name="button2" style="float: right;">Register</button>
                    <button type="reset" class="btn btn-outline-danger" style="float: right; margin-right: 20px;">Clear</button>
                </form>
            </div>
        </div>
    </div>

</body>
@endsection
</html>
