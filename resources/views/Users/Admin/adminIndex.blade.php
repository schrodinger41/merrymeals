<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Home - Meals on Wheels</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .heading-section {
            padding: 50px 0;
        }

        .heading-section h3 {
            font-size: 2em;
            margin: 0;
            color: #333;
        }

        .heading-section p {
            font-size: 1.2em;
            color: #666;
        }

        .fh5co-hero {
            position: relative;
        }

        .fh5co-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .fh5co-cover {
            height: 100vh;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 0;
            background-image: url("{{ asset('images/img2.jpg') }}");
        }

        .fh5co-cover .desc {
            z-index: 2;
            color: #fff;
            text-align: center;
        }

        .fh5co-cover .desc h2 {
            font-size: 3em;
            margin: 0;
        }

        .animate-box {
            animation: fadeInUp 1s ease-out;
        }


        @keyframes fadeInUp {
            from {
                opacity: 1;
                transform: translate3d(0, 40px, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }
    </style>
</head>

<body>
    @extends('Users.Admin.layouts.app')

    @section('title')
    Welcome
    @endsection

    @section('content')
    <div id="fh5co-services-section" style="margin-top: 200px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Hello The Administrator</h3>
                    <p>Please manage this website!!!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-page">
        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5">
                <div class="desc animate-box">
                    <h2 ><strong>Aim to</strong> Give Meals <strong> To Those in Need</strong></h2>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>
