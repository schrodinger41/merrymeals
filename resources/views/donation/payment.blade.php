@section('title', 'Donation')
@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Meals on Wheels - Payment</title>
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
                /* Centers the button horizontally */
                width: 50%;
                background-color:var(--secondary-color);
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
                /* Center image horizontally */
                max-width: 10%;
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
                background-color: #3CB815;
            }
        </style>
    </head>

    <body>
        <div class="container" style="margin-top: 100px;">
            <div class="card">
                <div class="card-body">
                    <div class="image-container">
                        <img src="{{ asset('images/logo.png') }}" alt="Image for Payment Form">
                    </div>
                    <div class="title-text">
                        <div class="title">Payment Information</div>
                        <p>Please fill out the form below</p>
                    </div>
                    <div class="steps-container">
                        <div class="step">1 <br> DONATION</div>
                        <div class="step">2 <br> BILLING</div>
                        <div class="step active">3 <br> PAYMENT</div>
                        <div class="step">4 <br> COMPLETION</div>
                    </div>
                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                        data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <div class="input-control">
                            <label for="card_name">Card Holder's Full Name</label>
                            <input type="text" class="form-control" id="card_name" name="card_name"
                                style="width:600px;" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="card_number">Credit Card Number</label>
                            <input type="text" class="form-control card-number" id="card_number" name="card_number" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="card_type">Card Type</label>
                            <input type="text" class="form-control" id="card_type" name="card_type" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control card-cvc" id="cvc" name="cvc"
                                placeholder='ex. 311' size='4' />
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <div class="row" style="position:static;">
                                <div class="col-md-6">
                                    <label for="exp_month">Expiration Month</label>
                                    <input type="text" class="form-control card-expiry-month" id="exp_month"
                                        name="exp_month" placeholder='MM' />
                                    <div class="error"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exp_year">Expiration Year</label>
                                    <input type="text" class="form-control card-expiry-year" id="exp_year"
                                        name="exp_year" placeholder='YYYY' />
                                    <div class="error"></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-light fw-bold" data-mdb-ripple-color="dark">Pay Now</button>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
            $(function() {
                var $form = $(".require-validation");
                $('form.require-validation').bind('submit', function(e) {
                    var $form = $(".require-validation"),
                        inputSelector = [
                            'input[type=email]',
                            'input[type=password]',
                            'input[type=text]',
                            'input[type=file]',
                            'textarea'
                        ].join(', '),

                        $inputs = $form.find('.required').find(inputSelector),
                        $errorMessage = $form.find('div.error'),
                        valid = true;
                    $errorMessage.addClass('hide');
                    $('.has-error').removeClass('has-error');
                    $inputs.each(function(i, el) {
                        var $input = $(el);
                        if ($input.val() === '') {
                            $input.parent().addClass('has-error');
                            $errorMessage.removeClass('hide');
                            e.preventDefault();
                        }
                    });

                    if (!$form.data('cc-on-file')) {
                        e.preventDefault();
                        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                        Stripe.createToken({
                            number: $('.card-number').val(),
                            cvc: $('.card-cvc').val(),
                            exp_month: $('.card-expiry-month').val(),
                            exp_year: $('.card-expiry-year').val()
                        }, stripeResponseHandler);
                    }
                });

                function stripeResponseHandler(status, response) {
                    if (response.error) {
                        $('.error')
                            .removeClass('hide')
                            .find('.alert')
                            .text(response.error.message);
                    } else {
                        /* token contains id, last4, and card type */
                        var token = response['id'];
                        $form.find('input[type=text]').empty();
                        $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                        $form.get(0).submit();
                    }
                }
            });
        </script>
    </body>
@endsection
