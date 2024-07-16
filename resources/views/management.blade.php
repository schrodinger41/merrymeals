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
    <!--Hi Jia, You can start designing here. | Gotcha! --> 

    <div class="container" style="margin-top: 120px">
		<div class="row p-3 mt-3 mb-5">
			<div class="col-12">
				<h3 style="font-weight: var(--weight-700); color: var(--primary-color)"> USER MANAGEMENT </h3>
                <hr>
			</div>
		</div>

        <!-- ADD USER BTN . -->
        <div class="row justify-content-end">
            <div class="col-lg-3 text-end mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="background-color: var(--accent-color); color: #474747;">
                    <b>Add a User</b>
                </button>
            </div>
        </div>

        <!-- USER MANAGEMENT -->
		<div class="row">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Name </b> </h4> </th>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> User Roles </b> </h4> </th>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Actions </b> </h4> </th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">NAME</td>
								<td scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">MEMBER</td>
								<td scope="row" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                    
                                    <!-- VIEW USER -->
                                    <a type="button" class="btn" style="color: var(-primary-color);" href=""> <i class="far fa-eye"></i> </a> 
                                    
                                    <!-- Button trigger modal for EDIT -->
									<button type="button" class="btn" style="color: var(-primary-color);"
										data-bs-toggle="modal"
										data-bs-target="#exampleModal">
										<i class="fas fa-edit"></i>
									</button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
			                        aria-labelledby="exampleModalLabel" aria-hidden="true"
			                        role="dialog">
				                        <div class="modal-dialog" style="margin-top: 120px">
					                    <div class="modal-content" style="background-color: var(--accent-color); color: rgb(31, 31, 31); margin-top: 120px">
                        
						                <div class="modal-header align-items-center justify-content-center">
							                <h5 class="modal-title text-center" id="exampleModalLabel"style="font-size: var(--h3-font-size);font-weight: 900"> <b> EDIT USER </b> </h5>
						                </div>

						                <form action="" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <!-- FORM -->
                                            <div class="was-validated">
                                                <div class="mb-3 mt-3">
                                                    <label for="name" class="d-flex form-label" style="font-weight: 900;">Name:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter full name" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="age" class="d-flex form-label" style="font-weight: 900;">Age:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter age" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="gender" class="d-flex form-label" style="font-weight: 900;">Gender:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter gender" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>
                                    
                                                <div class="mb-3 mt-3">
                                                    <label for="caregiversname" class="d-flex form-label" style="font-weight: 900;">Caregiver's Name:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Write N/A if none" name="" 
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="address" class="d-flex form-label" style="font-weight: 900;">Address:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter your address" name="" 
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="email" class="d-flex form-label" style="font-weight: 900;">Email:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter email" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>
    
                                                <div class="mb-3">
                                                    <label for="number" class="d-flex form-label" style="font-weight: 900;">Phone Number:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter phone number" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>
                                                
                                        </div>
                                        
                                    </div>

                            <div class="d-flex justify-content-center pb-2">
								<button type="submit" class="btn btn-outline-dark" style="font-weight: 900;">Edit</button>
							</div>
                        </form>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    
					</div>
				</div>
            </div>
                                    
                                    <!-- DELETE BUTTON -->
                                    <a type="button" class="btn" style="color: var(-primary-color);"
									href="/delete?uid=${u.id}"> <i class="far fa-trash-alt"></i>
								    </a></td>
							</tr>

					</tbody>
				</table>
			</div>
		</div>

        <!-- MODAL -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" style="margin-top: 82px">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: var(--accent-color); color: rgb(31, 31, 31);">
                        <div class="modal-header align-items-center justify-content-center">
                            <h5 class="modal-title text-center" id="exampleModalLabel" style="font-size: var(--h3-font-size);font-weight: 900"><b>ADD USER</b></h5>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="modal-body">
                                <!-- FORM -->
                                <div class="was-validated">
                                    <label class="form-label" style="font-weight: 900" for="role">Choose a role:</label>
                                    <br>
                                    <select class="form-select" name="role" id="roles" style="width: 100%" required>
                                        <option value="">PLEASE SELECT</option>
                                        <option value="member"> MEMBER </option>
                                        <option value="partner"> PARTNER </option>
                                        <option value="volunteer"> VOLUNTEER </option>
                                        <option value=""> ADMIN </option>
                                    </select>

                                    <div class="mb-3 mt-3">
                                        <label for="name" class="d-flex form-label" style="font-weight: 900;">Name:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Enter full name" name="name" id="name"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="age" class="d-flex form-label" style="font-weight: 900;">Age:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Enter age" name="age" id="age"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="gender" class="d-flex form-label" style="font-weight: 900;">Gender:</label>
                                        <select class="form-select" name="gender" id="" style="width: 100%" required>
                                            <option value="">PLEASE SELECT</option>
                                            <option value="0"> MALE </option>
                                            <option value="1"> FEMALE </option>
                                        </select>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="address" class="d-flex form-label" style="font-weight: 900;">Address:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Enter your address" name="address" id="address" 
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="email" class="d-flex form-label" style="font-weight: 900;">Email:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Enter email" name="email" id="email"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="password" class="d-flex form-label" style="font-weight: 900;">Password:</label>
                                        <input type="password" class="form-control"
                                        placeholder="Enter password" name="password" id="password"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="phone" class="d-flex form-label" style="font-weight: 900;">Phone Number:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Enter phone number" name="phone" id="phone" maxlength="11"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>
                                    
                                    <!-- MEMBERS -->
                                    <div class="mb-3 mt-3 member box">
                                        <label for="member_caregiver_name" class="d-flex form-label" style="font-weight: 900;">Caregiver's Name:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Write N/A if none" name="member_caregiver_name" id="member_caregiver_name" 
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3 member box">
                                        <label for="member_caregiver_relation" class="d-flex form-label" style="font-weight: 900;">Caregiver Relationship:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Write N/A if none" name="member_caregiver_relation" id="member_caregiver_relation" maxlength="11"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3 member box">
                                        <label for="member_medical_condition" class="d-flex form-label" style="font-weight: 900;">Requestor Medical Condition:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Write N/A if none" name="member_medical_condition" id="member_medical_condition" maxlength="11"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3 member box">
                                        <label for="member_medical_number" class="d-flex form-label" style="font-weight: 900;">Medical Card ID:</label>
                                        <input type="number" class="form-control"
                                        placeholder="Write N/A if none" name="member_medical_number" id="member_medical_number" maxlength="11"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3 member box">
                                        <label for="member_meal_duration" class="d-flex form-label" style="font-weight: 900;">Duration of Meal Plan:</label>
                                        <input type="number" class="form-control"
                                        placeholder="Write the duration (days)" name="member_meal_duration" id="member_meal_duration" maxlength="11"
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <!-- PARTNER -->
                                    <div class="mb-3 mt-3 partner box">
                                        <label for="partnership_restaurant" class="d-flex form-label" style="font-weight: 900;">Restaurant Name:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Enter the name of your restaurant/business" name="partnership_restaurant" 
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <div class="mb-3 mt-3 partner box">
                                        <label for="partnership_duration" class="d-flex form-label" style="font-weight: 900;">Partnership Duration:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Input the duration of the partnership" name="partnership_duration" 
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <!-- VOLUNTEER -->
                                    <div class="mb-3 mt-3 volunteer box">
                                        <label for="caregiversname" class="d-flex form-label" style="font-weight: 900;">Are you vaccinated?</label>
                                        <select class="form-select" name="volunteer_vaccination" id="" style="width: 100%" required>
                                            <option value="">PLEASE SELECT</option>
                                            <option value="0"> YES </option>
                                            <option value="1"> NO </option>
                                        </select>
                                    </div>

                                    <div class="mb-3 mt-3 volunteer box">
                                        <label for="volunteer_duration" class="d-flex form-label" style="font-weight: 900;">Volunteer Duration:</label>
                                        <input type="text" class="form-control"
                                        placeholder="Enter the duration" name="volunteer_duration" 
                                        required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this
                                        field.</div>
                                    </div>

                                    <fieldset class="mb-3 mt-3 volunteer box">
                                        <label for="caregiversname" class="d-flex form-label" style="font-weight: 900;">When are you available?</label>
                                        <div class="volunteer box" required>
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
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <button type="submit" class="btn btn-success" style="font-weight: 900;">Add</button>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-weight: 800;">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- DONATIONS TABLE -->
        <div class="row p-3 mt-3 mb-5">
			<div class="col-12">
				<h3 style="font-weight: var(--weight-700); color: var(--primary-color)"> DONATIONS </h3>
                <hr>
			</div>
		</div>

        <div class="row">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Name </b> </h4> </th>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Email </b> </h4> </th>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Number </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Donation </b> </h4> </th>
                        </tr>
					</thead>
					<tbody>
							<tr>
								<td scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">NAME</td>
								<td scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">EMAIL</td>
								<td scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">NUMBER</td>
                                <td scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">DONATION</td>
							</tr>

					</tbody>
				</table>
			</div>
		</div>

	</div>
    @endsection
</body>
</html>
