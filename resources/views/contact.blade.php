<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Meals on Wheels</title>
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Include Boxicons library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css">
</head>
<body>
    @extends('layouts.app')

    @section('title')
    Contact Us
    @endsection

    @section('content')
    <main>

        <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>If you have any questions or would like to get involved, please feel free to reach out to us.</p>
                
                <div class="contact-info">
                    <div class="contact-info-item">
                        <i class='bx bx-mail-send'></i>
                        <h3>Email</h3>
                        <p>info@mealsonwheels.org</p>
                    </div>
                    <div class="contact-info-item">
                        <i class='bx bx-phone-call'></i>
                        <h3>Phone</h3>
                        <p>(123) 456-7890</p>
                    </div>
                    <div class="contact-info-item">
                        <i class='bx bx-map'></i>
                        <h3>Address</h3>
                        <p>123 Main Street, City, Country</p>
                    </div>
                </div>

                <div class="map-container">
                    <iframe
                        width="100%"
                        height="400"
                        frameborder="0" style="border:0;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.137310677664!2d123.90469107588069!3d10.330894617251893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999218ad96ccd%3A0x73cd2c6cb520d2c!2sCebu%20IT%20Park%2C%20Cebu%20City%2C%206000%20Cebu!5e0!3m2!1sen!2sph!4v1720986086565!5m2!1sen!2sph" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        

    </main>

    <script src="{{ asset('js/about.js') }}"></script>
    @endsection
</body>
</html>
