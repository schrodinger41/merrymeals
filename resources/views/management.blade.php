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
    <!--Hi Jia, You can start designing here. | Gotcha! --> 

    <div class="container" style="margin-top: 120px">
		<div class="row p-3 mt-3 mb-5">
			<div class="col-12">
				<h3 style="font-weight: var(--weight-700); color: var(--primary-color)"> USER MANAGEMENT </h3>
                <hr>
			</div>
		</div>

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
				                        <div class="modal-dialog">
					                    <div class="modal-content" style="background-color: var(--accent-color); color: rgb(31, 31, 31); margin-top: 120px">
                        
						                <div class="modal-header align-items-center justify-content-center">
							                <h5 class="modal-title text-center" id="exampleModalLabel"> <b> EDIT USER </b> </h5>
						                </div>

						                <form action="{{ route('partner#saveMenu') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <!-- FORM -->
                                            <div class="was-validated">
                                                <div class="mb-3 mt-3">
                                                    <label for="name" class="d-flex form-label">Name:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter full name" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="age" class="d-flex form-label">Age:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter age" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="gender" class="d-flex form-label">Gender:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter gender" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>
                                    
                                                <div class="mb-3 mt-3">
                                                    <label for="caregiversname" class="d-flex form-label">Caregiver's Name:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Write N/A if none" name="" 
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="address" class="d-flex form-label">Address:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter your address" name="" 
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="email" class="d-flex form-label">Email:</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Enter email" name=""
                                                    required="true" />
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this
                                                    field.</div>
                                                </div>
    
                                                <div class="mb-3">
                                                    <label for="number" class="d-flex form-label">Phone Number:</label>
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
								<button type="submit" class="btn btn-outline-dark">Edit</button>
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
