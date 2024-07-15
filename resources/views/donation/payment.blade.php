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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <!--  Enable Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      @media (min-width: 1025px) {
    .h-custom {
        height: 100vh !important;
    }
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: 0.75em;
    padding-right: 0.75em;
}
.card-registration .select-arrow {
    top: 13px;
}

@media (min-width: 992px) {
    .card-registration-2 .bg-indigo {
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }
}
@media (max-width: 1000px) {
    .card-registration-2 .bg-indigo {
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
}
.input-control {
      display: flex;
      flex-direction: column;
    }

    .input-control input {
      border: 2px solid #f0f0f0;
      border-radius: 4px;
      display: block;
      font-size: 12px;
      padding: 10px;
      width: 100%;
    }

    .input-control input:focus {
      outline: 0;
    }

    .input-control.success input {
      border-color: #3CB815;
    }

    .input-control.error input {
      border-color: #F65005;
    }

    .input-control .error {
      color: #F65005;
      height: 13px;
    }

</style>
</head>
<body>
  <section class="h-100 h-custom gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px; border:none;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-6" >
                  <div class="p-5">
                    <div class="p-5">
                      <form class="form-inline text-center mb-2">
                        <div class="form-group" style="padding: 0 45px 0 25px ; color: grey; ">
                            <p style="font-size: 10px;">1 <br> DONATION</p>
                          </div>
                          <div class="form-group" style="padding-right:45px ;color: grey;">
                            <p style="font-size: 10px;">2 <br> BILLING</p>
                          </div>
                          <div class="form-group" style="padding-right:45px ;">
                            <p style="font-size: 10px;color: black;">3 <br> PAYMENT</p>
                          </div>
                          <div class="form-group" style="padding-right:45px ;color: grey;">
                            <p style="font-size: 10px;">4 <br> COMPLETION</p>
                          </div>	
                        </form>
                        <div class="panel-body">
                          @if (Session::has('success'))
                          <div class="alert alert-success text-center" >
                            <a  href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p >{{ Session::get('success') }}</p>
                          </div>
                          @endif
                          <form role="form" action="{{route('stripe.post')}}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            <h4 class="fw-bold mb-4 pb-3" style="padding: 40px 0 20px 15px; font-size: 12px ;">PAYMENT INFORMATION</h4>
                            @csrf
                            <div class="mb-4 pb-2" style="margin:0 0 0 15px; width: 350px;" >
                              <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                  <label class='control-label'>Card Holder's Full Name</label> 
                                  <input class='form-control' size='4' type='text'>
                                </div>
                              </div>
                            </div>
                            <div class="mb-4 pb-2" style="margin:0 0 0 15px; width: 350px;" >
                              <div class='form-row row' >
                                <div class='col-xs-12 form-group card required' style="border: none">
                                  <label class='control-label'>Credit Card Number</label> 
                                  <input autocomplete='off' class='form-control card-number' size='20' type="text">
                                </div>
                              </div>
                            </div>
                            <div class="mb-4 pb-2" style="margin:0 0 0 15px; width: 350px;" >
                              <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                  <label class='control-label'>Card Type</label> 
                                  <input class='form-control' size='4' type='text'>
                                </div>
                              </div>
                            </div>
                            <div class="mb-4 pb-2" style="margin:0 0 0 15px; width: 350px;" >
                              <div class=' form-group cvc required'>
                                <label class='control-label'>CVC</label> 
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type="text">
                                </div>
                            </div>
                            <div class='form-row row'>
                            <div class="row" style="margin: 0 0 0 1px;">
                              <div class="col-md-5 mb-4 pb-2">
                                <div class=' form-group expiration required'>
                                  <label class='control-label'>Expiration Month</label> <input
                                  class='form-control card-expiry-month' placeholder='MM' size='2'
                                  type="text">
                                </div>
                              </div>
                              <div class="col-md-7 mb-4 pb-2">
                                <div class='form-group expiration required'>
                                  <label class='control-label'>Expiration Year</label> <input
                                  class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                  type="text">
                                  </div>
                              </div> 
                            </div>
                          </div>
                          <button type="submit" class="btn btn-light fw-bold " style="margin: 50px 0 0 110px; background-color: #3CB815; font-size: 10px; width: 150px;height: 30px; color: #F5F5F5;" 
                          data-mdb-ripple-color="dark">Pay Now</button>
                          </div>  
                           </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 bg-indigo text-white">
                  <img style="height:750px; width: auto; border-radius: 7px; " src="{{url('/images/donation.jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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