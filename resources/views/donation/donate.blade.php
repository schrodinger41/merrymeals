<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--  Enable Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layouts.app')

    @section('title', 'Donation Form')


    @section('content')
        <style>
            .form-container {
                max-width: 600px;
                margin: 20px auto;
                /* Center horizontally */
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #ffffff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .form-container .title-text {
                text-align: center;
                font-size: 15px;
                margin-bottom: 10px;
            }

            .form-container .title-text .title {
                text-align: center;
                font-size: 30px;
                font-weight: bold;
                margin-bottom: 0px;
            }

            .form-container label {
                font-weight: bold;
            }

            .form-container .form-group {
                margin-bottom: 20px;
            }

            .form-container button {
                display: block;
                /* Ensures button takes full width */
                margin: 0 auto;
                /* Centers the button horizontally */
                width: 30%;
                /* Adjust width as needed */
                padding: 10px 20px;
                background-color: var(--secondary-color);
                color: white;
                border: none;
                border-radius: 30px;
                cursor: pointer;
                font-size: 16px;
            }

            .form-container button:hover {
                background-color: var(--primary-color);
            }

            .success-message {
                margin-bottom: 50px;
                padding: 20px;
                border: 1px solid green;
                border-radius: 5px;
                background-color: #d4edda;
                color: green;
            }

            .form-container img {
                display: block;
                margin: 0 auto;
                /* Center image horizontally */
                max-width: 10%;
                /* Ensures image scales with container */
                height: auto;
                /* Maintains aspect ratio */
                margin-bottom: 20px;
            }
        </style>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-container" style="margin-top: 140px;">
            <img src="{{ asset('images/donation.png')}}" alt="Image for Donation Form">
            <div class="title-text">
                <div class="title">Donation Form</div>
                <p>Thank you for donating to our charity</p>
            </div>
            <form action="{{ route('processDonation') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="amount">Donation Amount:</label>
                    <input type="number" class="form-control" name="amount" id="amount" required>
                </div>
                <div class="form-group">
                    <label for="donor_first_name">First Name:</label>
                    <input type="text" class="form-control" name="donor_first_name" id="donor_first_name" required>
                </div>
                <div class="form-group">
                    <label for="donor_last_name">Last Name:</label>
                    <input type="text" class="form-control" name="donor_last_name" id="donor_last_name" required>
                </div>
                <div class="form-group">
                    <label for="donor_email">Email:</label>
                    <input type="email" class="form-control" name="donor_email" id="donor_email" required>
                </div>
                <div class="form-group">
                    <label for="donor_phone">Phone:</label>
                    <input type="tel" class="form-control" name="donor_phone" id="donor_phone" required>
                </div>
                <div class="form-group">
                    <label for="donor_address">Address:</label>
                    <input type="text" class="form-control" name="donor_address" id="donor_address" required>
                </div>
                <div class="form-group">
                    <label for="donor_city">City:</label>
                    <input type="text" class="form-control" name="donor_city" id="donor_city" required>
                </div>
                <div class="form-group">
                    <label for="donor_state">State:</label>
                    <input type="text" class="form-control" name="donor_state" id="donor_state" required>
                </div>
                <div class="form-group">
                    <label for="donor_country">Country:</label>
                    <input type="text" class="form-control" name="donor_country" id="donor_country" required>
                </div>
                <button type="submit" class="btn btn-primary">Donate</button>
            </form>
        </div>
    @endsection
</body>
