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
        <!-- Styles -->
        <link href="{{ asset('css/donation.css') }}" rel="stylesheet">
        <style>
            .background {
                background-size: cover;
                height: 190vh;
                display: flex;
                justify-content: center;
                align-items: center;

            }

        </style>
    </head>

    <body>
        <div class="background" style="background-image: url('{{ asset('images/login_img.jpg') }}');">
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
                                    style="width:450px;" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="card_number">Credit Card Number</label>
                                <input type="text" class="form-control card-number" id="card_number"
                                    name="card_number" />
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
                            <div class="input-control2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exp_month" style="text-align:left; "><b>Expiration Month</b></label>
                                        <input type="text" class="form-control card-expiry-month" id="exp_month"
                                            name="exp_month" placeholder='MM' />
                                        <div class="error"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exp_year"><b> Year</b></label>
                                        <input type="text" class="form-control card-expiry-year" id="exp_year"
                                            name="exp_year" placeholder='YYYY' />
                                        <div class="error"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-light fw-bold" data-mdb-ripple-color="dark">Pay
                                Now</button>
                        </form>
                    </div>
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
