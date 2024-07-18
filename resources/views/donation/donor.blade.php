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
       <!-- Styles -->
       <link href="{{ asset('css/donation.css') }}" rel="stylesheet"> 
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
