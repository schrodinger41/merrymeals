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
    <title>Menu</title>
</head>
<body>
    @section('title')
        THIS WEEK'S MENU!
    @endsection

    @extends('layouts.app')
    
    @section('content')
        <div class="container">
            <div class="row p-3 mt-3 mb-5">
			    <div class="col-12 text-center">
					<h3 style="font-weight: var(--weight-700);"> <span style="color: var(--primary-color);"> MEALS </span> FOR THIS <span style="color: var(--primary-color);"> WEEK! </span> </h3>
                    <hr>
			    </div>
		    </div>

		<!-- MENU -->
		    <div class="row" style="gap: 60px;">
				<div class="card mb-2 mt-2" style="width: 335px; background-color: var(--primary-color); color: white; border: 2px #344d3b solid;
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
        
        <!-- MODAL -->
		    <div class="modal fade" id="exampleModal" tabindex="-1"
			aria-labelledby="exampleModalLabel" aria-hidden="true"
			role="dialog">
				<div class="modal-dialog">
					<div class="modal-content" style="background-color: var(--accent-color); color: rgb(31, 31, 31);">

						<div class="modal-header align-items-center justify-content-center">
							<h5 class="modal-title text-center" id="exampleModalLabel"> <b> ADD MEAL </b> </h5>
						</div>
								
                        <div class="modal-body">
                            <!-- FORM -->
							<form class="was-validated">
								<div class="mb-3 mt-3">
									<label for="name" class="d-flex form-label">Name:</label>
									<input type="text" class="form-control"
								    placeholder="Enter meal name" name="name"
									required="true" />
								    <div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this
									field.</div>
								</div>

								<div class="mb-3">
									<label for="description" class="d-flex form-label">Description:</label>
									<input type="text" class="form-control"
									placeholder="Enter description" name="description"
									required="true" />
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this
									field.</div>
								</div>
										
                                <div class="mb-3">
									<label for="ingredients" class="d-flex form-label">Ingredients:</label>
									<input type="text" class="form-control"
									placeholder="List down the ingredients" name="ingredients"
									required="true" />
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this
									field.</div>
								</div>

								<div class="mb-3">
									<label class="d-flex form-label">Upload Photo:</label> 
                                    <input type="file" class="form-control" name="fileImage"
                                    required="true" />
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this
									field.</div>
								</div>

								<div class="holder" style="height: 300px; width: 300px; margin: auto;">
								    <img src="https://store-images.s-microsoft.com/image/apps.38456.9007199267003607.4d66cde1-46fd-42b7-93c7-e05d782f5e5d.cfdf91f5-dc2a-4178-96fa-d2c156ae62cd" alt="image preview"
									style="width: inherit;" />
								</div>
							</form>
									
						</div>
								
                        <div class="modal-footer">
                            <div class="d-flex justify-content-start">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 24vw">Cancel</button>
								<button type="submit" class="btn btn-outline-dark">Save</button>
							</div>
                        </div>

					</div>
				</div>
            </div>

        <!-- Shortcut for ADD MEAL BUTTON. Only can be accessed by PARTNERS. -->
			<div class="col col-lg-3" style="text-align: end; margin: auto; position: fixed; top: 9vw; right: 1vw;">
				<span class="p-2"> <!-- Button trigger modal -->
					<button type="button" class="btn" data-bs-toggle="modal"
						data-bs-target="#exampleModal" style="background-color: var(--accent-color); color: #474747;">
						<b> Add a Meal Now! </b></button>
				</span>
			</div>
        </div>
    @endsection
</body>
</html>