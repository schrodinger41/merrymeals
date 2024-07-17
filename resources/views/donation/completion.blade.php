@section('title', 'Completion')
@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meals on Wheels - Completion</title>
    <!--  Enable Bootstrap -->
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
            max-width: 10%;
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
    <div class="container" style="margin-top: 100px;">
        <div class="card">
            <div class="card-body">
                <div class="image-container">
                    <img src="{{ asset('images/logo.png') }}" alt="Image for Completion Form">
                </div>
                <div class="title-text">
                    <div class="title">Completion</div>
                    <p>Thank you for your donation!</p>
                </div>
                <div class="steps-container">
                    <div class="step">1 <br> DONATION</div>
                    <div class="step">2 <br> BILLING</div>
                    <div class="step">3 <br> PAYMENT</div>
                    <div class="step active">4 <br> COMPLETION</div>
                </div>
                <div class="text-center mb-4 pb-2" style="padding-top:50px;">
                    <div class="form-outline form-white" style="color: #3CB815;">
                        <i class="bi bi-check-circle-fill" style="font-size: 50px;"></i>
                        <h6>SUCCESS!</h6>
                    </div>
                </div>
                <div class="mb-4 pb-2" style="padding-top:50px; padding-bottom:35px;">
                    <div class="form-outline form-white" style="text-align: center;">
                        <p class="fw-normal" style="font-size: 12px; margin: 0 15px;">
                            Thank you for your gift! Together, we are helping to provide nutritious meals to seniors around the world! An email acknowledging that you have donated will be sent to the email address you provided.
                        </p>
                    </div>
                </div>
                <a href="/" class="btn btn-light fw-bold" style="background-color: #3CB815; color: #F5F5F5; font-size: 10px; width: 80px; height: 30px;">DONE</a>
            </div>
        </div>
    </div>
</body>
@endsection
