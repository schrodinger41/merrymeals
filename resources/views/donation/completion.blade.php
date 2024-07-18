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
        <!-- Styles -->
        <link href="{{ asset('css/donation.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="background" style="background-image: url('{{ asset('images/login_img.jpg') }}');">
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
                        <div class="text-center mb-4 pb-2" style="padding-top:10px;">
                            <div class="form-outline form-white">
                                <img src="{{ asset('images/success.png') }}" alt="Image for Completion Form"
                                    style="max-width: 10%; height: auto; display: block; margin: 0 auto;">
                                <div class="success" style="color: #3CB815; font-size:50px;">SUCCESS!</div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2" style="padding-top:5px; padding-bottom:10px;">
                            <div class="form-outline form-white" style="text-align: center;">
                                <p class="title-text">
                                    Thank you for your gift! Together, we are helping to provide nutritious meals to seniors
                                    around the world! 
                                </p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-light fw-bold"
                            style="
                                cursor: pointer;  
                                margin: 10px auto;
                                width: 50%;
                                height: 40px;
                                color: #F5F5F5; 
                                font-size: 15px;"
                            data-mdb-ripple-color="dark">
                            <a href="/"
                                style="
                                    width: 100%;
                                    margin: 0 auto;
                                    font-size: 15px; 
                                    height: 100%; 
                                    color: #F5F5F5;
                                    display: block;
                                    text-decoration: none;">DONE</a>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
