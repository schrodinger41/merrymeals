@section('title')
    Donation
@endsection
@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Meals on Wheels - Donation</title>
        <!--  Enable Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            .background {
                background-size: cover;
                height: 160vh;
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .container {
                max-width: 600px;
                /* Reduced width to make it smaller */
                margin-top: 82px;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                background: rgba(255, 255, 255, 0.1);
                /* Increased opacity for better readability */
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                backdrop-filter: blur(30px);
                text-align: center;
                color: black;
            }


            .card {
                width: 100%;
                border-radius: 15px;
                border: none;
                overflow: hidden;
                display: flex;
                background: rgba(255, 255, 255, 0.1);
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
                /* Centers the button horizontally */
                width: 50%;
                background-color: var(--secondary-color);
                color: #ffffff;
                padding: 10px 20px;
                border: none;
                border-radius: 30px;
                cursor: pointer;
                font-size: 14px;
            }

            .btn:hover {
                background-color: var(--primary-color);
                color: #ffffff;
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
                border-color: #3cb815;
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
                /* Center image horizontally */
                max-width: 20%;
                /* Ensures image scales with container */
                height: auto;
                /* Maintains aspect ratio */
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
                background-color: var(--secondary-color);
            }

            
        </style>
    </head>

    <body>
        
        <div class="background" style="background-image: url('{{ asset('images/login_img.jpg') }}');">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="image-container">
                            <img src="{{ asset('images/logo.png') }}" alt="Image for Donation Form">
                        </div>
                        <div class="title-text">
                            <div class="title">Donation Form</div>
                            <p>Thank you for donating to our charity</p>
                        </div>
                        <div class="steps-container">
                            <div class="step active">1 <br> DONATION</div>
                            <div class="step">2 <br> BILLING</div>
                            <div class="step">3 <br> PAYMENT</div>
                            <div class="step">4 <br> COMPLETION</div>
                        </div>
                        <form id="form" action="{{ route('saveDonationFee') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-control">
                                <label for="donor_fee">Donation Amount</label>
                                <input type="number" id="donor_fee" name="donor_fee" class="form-control"
                                    style="width:450px;" placeholder="Enter amount">
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_tribute">Tribute Type</label>
                                <input type="text" id="donor_tribute" name="donor_tribute" class="form-control">
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_honoree_name">Honoree Name</label>
                                <input type="text" id="donor_honoree_name" name="donor_honoree_name"
                                    class="form-control">
                                <div class="error"></div>
                            </div>
                            <button type="submit" class="btn btn-light fw-bold" data-mdb-ripple-color="dark">NEXT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

        <script>
            const form = document.getElementById('form');
            const donor_fee = document.getElementById('donor_fee');
            const donor_tribute = document.getElementById('donor_tribute');
            const donor_honoree_name = document.getElementById('donor_honoree_name');

            form.addEventListener('submit', (e) => {
                e.preventDefault();

                validateInputs();
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
                const donor_fee_value = donor_fee.value.trim();
                const donor_tribute_value = donor_tribute.value.trim();
                const donor_honoree_name_value = donor_honoree_name.value.trim();

                if (donor_fee_value === '') {
                    setError(donor_fee, 'This field is required');
                    return false;
                } else {
                    setSuccess(donor_fee);
                }

                if (donor_tribute_value === '') {
                    setError(donor_tribute, 'This field is required');
                    return false;
                } else {
                    setSuccess(donor_tribute);
                }

                if (donor_honoree_name_value === '') {
                    setError(donor_honoree_name, 'This field is required');
                    return false;
                } else {
                    setSuccess(donor_honoree_name);
                }
                form.submit();
            };
        </script>
    </body>
@endsection
