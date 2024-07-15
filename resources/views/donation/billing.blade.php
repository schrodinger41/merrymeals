
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
                  
                      
                      <form class="form-inline text-center mb-4 mb-2">
                      <div class="form-group" style="padding: 0 45px 0 25px ; color: grey; ">
                          <p style="font-size: 10px;">1 <br> DONATION</p>
                        </div>
                        <div class="form-group" style="padding-right:45px ;">
                          <p style="font-size: 10px;color: black;">2 <br> BILLING</p>
                        </div>
                        <div class="form-group" style="padding-right:45px ;color: grey;">
                          <p style="font-size: 10px;">3 <br> PAYMENT</p>
                        </div>
                        <div class="form-group" style="padding-right:45px ;color: grey;">
                          <p style="font-size: 10px;">4 <br> COMPLETION</p>
                        </div>	
                        <h4 class="fw-bold mb-4 pb-3" style="padding: 40px 0 20px 15px; font-size: 12px ;">BILLING INFORMATION</h4>
                      </form>
                      
                      {{-- form billing--}}
                      <form id="form" action="{{ route('saveBilling')}}" method="POST">
                        @csrf
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_first_name">First Name</label>
                            <input name="donor_first_name" type="text" id="donor_first_name" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;" />
                            <div class="error"></div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_last_name">Last Name</label>
                            <input name="donor_last_name" type="text" id="donor_last_name" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;" />
                            <div class="error"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_address">Address</label>
                            <input name="donor_address" type="text" id="donor_address" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;" />
                            <div class="error"></div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_city">City</label>
                            <input name="donor_city" type="text" id="donor_city" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;"  />
                            <div class="error"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_state">State</label>
                            <input name="donor_state" type="text" id="donor_state" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;"  />
                            <div class="error"></div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_country">Country</label>
                            <input name="donor_country" type="text" id="donor_country" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;"  />
                            <div class="error"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_email">Email</label>
                            <input name="donor_email" type="text" id="donor_email" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;"  />
                            <div class="error"></div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="donor_phone">Phone</label>
                            <input name="donor_phone" type="number" id="donor_phone" class="form-control form-control-lg"style="background-color: #F5F5F5;  border-radius:8px;"  />
                            <div class="error"></div>
                          </div>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-light fw-bold " style="margin: 50px 0 0 170px; background-color: #3CB815; font-size: 10px; width: 80px;height: 30px;; color: #F5F5F5;" 
                    data-mdb-ripple-color="dark">NEXT</button>
                      </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
              <img style="height:700px; width: auto; border-radius: 7px; " src="{{url('/images/donation.jpg')}}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
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

  const isValidEmail = donor_email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(donor_email).toLowerCase());
}

  const validateInputs = () => {
    const donor_first_name_value = donor_first_name.value.trim();
    const donor_last_name_value = donor_last_name.value.trim();
    const donor_address_value = donor_address.value.trim();
    const donor_city_value = donor_city.value.trim();
    const donor_state_value = donor_state.value.trim();
    const donor_country_value = donor_country.value.trim();
    const donor_email_value = donor_email.value.trim();
    const donor_phone_value = donor_phone.value.trim();

    if (donor_first_name_value === '') {
      setError(donor_first_name, 'This field is required');
      return false;
    } else {
      setSuccess(donor_first_name);
    }

    if (donor_last_name_value === '') {
      setError(donor_last_name, 'This field is required');
      return false;
    }  else {
      setSuccess(donor_last_name);
    }

    if (donor_address_value === '') {
      setError(donor_address, 'This field is required');
      return false;
    } else {
      setSuccess(donor_address);
    }

    if (donor_city_value === '') {
      setError(donor_city, 'This field is required');
      return false;
    } else {
      setSuccess(donor_city);
    }

    if (donor_state_value === '') {
      setError(donor_state, 'This field is required');
      return false;
    } else {
      setSuccess(donor_state);
    }

    if (donor_country_value === '') {
      setError(donor_country, 'This field is required');
      return false;
    } else {
      setSuccess(donor_country);
    }

    if(donor_email_value === '') {
        setError(donor_email, 'This field is required');
    } else if (!isValidEmail(donor_email_value)) {
        setError(donor_email, 'Provide a valid email address');
        return false;
    } else {
        setSuccess(donor_email);
    }

    if (donor_phone_value === '') {
      setError(donor_phone, 'This field is required');
      return false;
    } else {
      setSuccess(donor_phone);
    }
      form.submit();

  };
</script>
  </body>
@endsection