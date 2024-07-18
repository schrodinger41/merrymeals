@extends('layouts.app')

@section('title', 'Donation')

@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Meals on Wheels - Donation</title>
        <!-- Enable Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 100%;
                border-radius: 15px;
                border: none;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                display: flex;
            }

            .card-body {
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            .text-center {
                text-align: center;
            }

            .fw-bold {
                font-weight: bold;
            }

            .btn {
                display: block;
                margin: 10px auto;
                width: 50%;
                background-color: #3CB815;
                color: #ffffff;
                padding: 10px 20px;
                border: none;
                border-radius: 30px;
                cursor: pointer;
                font-size: 14px;
            }

            .btn:hover {
                background-color: #32a10e;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                border: 2px solid #f0f0f0;
                border-radius: 4px;
                font-size: 14px;
                margin-bottom: 20px;
            }

            .form-control:focus {
                outline: none;
                border-color: #3CB815;
            }

            .input-control {
                display: flex;
                flex-direction: column;
                width: 100%;
                align-items: flex-start;
                margin-bottom: 20px;
            }

            .input-control .error {
                color: #f65005;
                font-size: 12px;
                height: 13px;
                margin-top: 5px;
            }

            .input-control.success input {
                border-color: #3cb815;
            }

            .input-control.error input {
                border-color: #f65005;
            }

            .input-control label {
                margin-bottom: 5px;
                font-weight: bold;
            }

            .image-container {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }

            .image-container img {
                display: block;
                margin: 0 auto;
                max-width: 20%;
                height: auto;
                margin-bottom: 20px;
            }

            .title-text {
                text-align: center;
                font-size: 15px;
                margin-bottom: 10px;
            }

            .title-text .title {
                text-align: center;
                font-size: 30px;
                font-weight: bold;
                margin-bottom: 0px;
            }

            .steps-container {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
                width: 100%;
                padding: 0 20px;
            }

            .step {
                font-size: 12px;
                color: grey;
                text-align: center;
                width: 23%;
                padding: 10px;
                border-radius: 8px;
                background-color: #f0f0f0;
                transition: background-color 0.3s, color 0.3s;
            }

            .step.active {
                color: #ffffff;
                background-color: #3CB815;
            }
        </style>
    </head>

    <body>
        <div class="background" style="background-image: url('{{ asset('images/login_img.jpg') }}');">
            <div class="container" >
                <div class="card">
                    <div class="card-body">
                        <div class="image-container">
                            <img src="{{ asset('images/logo.png') }}" alt="Image for Donation Form">
                        </div>
                        <div class="title-text">
                            <div class="title">Billing Information</div>
                            <p>Please fill out the form below</p>
                        </div>
                        <div class="steps-container">
                            <div class="step">1 <br> DONATION</div>
                            <div class="step active">2 <br> BILLING</div>
                            <div class="step">3 <br> PAYMENT</div>
                            <div class="step">4 <br> COMPLETION</div>
                        </div>
                        <form id="form" action="{{ route('saveBilling') }}" method="POST">
                            @csrf
                            <div class="input-control">
                                <label for="donor_first_name">First Name</label>
                                <input name="donor_first_name" type="text" id="donor_first_name" class="form-control"
                                    style="width:600px;" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_last_name">Last Name</label>
                                <input name="donor_last_name" type="text" id="donor_last_name" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_address">Address</label>
                                <input name="donor_address" type="text" id="donor_address" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_city">City</label>
                                <input name="donor_city" type="text" id="donor_city" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_state">State</label>
                                <input name="donor_state" type="text" id="donor_state" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_country">Country</label>
                                <input name="donor_country" type="text" id="donor_country" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_email">Email</label>
                                <input name="donor_email" type="text" id="donor_email" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_phone">Phone</label>
                                <input name="donor_phone" type="number" id="donor_phone" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <button type="submit" class="btn btn-light fw-bold" data-mdb-ripple-color="dark">NEXT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const form = document.getElementById('form');
                const donor_first_name = document.getElementById('donor_first_name');
                const donor_last_name = document.getElementById('donor_last_name');
                const donor_address = document.getElementById('donor_address');
                const donor_city = document.getElementById('donor_city');
                const donor_state = document.getElementById('donor_state');
                const donor_country = document.getElementById('donor_country');
                const donor_email = document.getElementById('donor_email');
                const donor_phone = document.getElementById('donor_phone');

                form.addEventListener('submit', (e) => {
                    const isValid = validateInputs();
                    if (!isValid) {
                        e.preventDefault();
                    }
                });

                const setError = (element, message) => {
                    const inputControl = element.parentElement;
                    const errorDisplay = inputControl.querySelector('.error');

                    errorDisplay.innerText = message;
                    inputControl.classList.add('error');
                    inputControl.classList.remove('success');
                };

                const setSuccess = (element) => {
                    const inputControl = element.parentElement;
                    const errorDisplay = inputControl.querySelector('.error');

                    errorDisplay.innerText = '';
                    inputControl.classList.add('success');
                    inputControl.classList.remove('error');
                };

                const validateInputs = () => {
                    const donor_first_name_value = donor_first_name.value.trim();
                    const donor_last_name_value = donor_last_name.value.trim();
                    const donor_address_value = donor_address.value.trim();
                    const donor_city_value = donor_city.value.trim();
                    const donor_state_value = donor_state.value.trim();
                    const donor_country_value = donor_country.value.trim();
                    const donor_email_value = donor_email.value.trim();
                    const donor_phone_value = donor_phone.value.trim();

                    let isValid = true;

                    if (donor_first_name_value === '') {
                        setError(donor_first_name, 'First name is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_first_name);
                    }

                    if (donor_last_name_value === '') {
                        setError(donor_last_name, 'Last name is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_last_name);
                    }

                    if (donor_address_value === '') {
                        setError(donor_address, 'Address is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_address);
                    }

                    if (donor_city_value === '') {
                        setError(donor_city, 'City is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_city);
                    }

                    if (donor_state_value === '') {
                        setError(donor_state, 'State is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_state);
                    }

                    if (donor_country_value === '') {
                        setError(donor_country, 'Country is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_country);
                    }

                    if (donor_email_value === '') {
                        setError(donor_email, 'Email is required');
                        isValid = false;
                    } else if (!isValidEmail(donor_email_value)) {
                        setError(donor_email, 'Provide a valid email address');
                        isValid = false;
                    } else {
                        setSuccess(donor_email);
                    }

                    if (donor_phone_value === '') {
                        setError(donor_phone, 'Phone is required');
                        isValid = false;
                    } else if (donor_phone_value.length < 10) {
                        setError(donor_phone, 'Provide a valid phone number');
                        isValid = false;
                    } else {
                        setSuccess(donor_phone);
                    }

                    return isValid;
                };

                const isValidEmail = (email) => {
                    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    return emailPattern.test(email);
                };
            });
        </script>
    </body>
@endsection
