<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Enable Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Receipt</title>
    <style>

        .content img {
            display: block;
            margin: 0 auto;
            /* Center image horizontally */
            max-width: 10%;
            /* Ensures image scales with container */
            height: auto;
            /* Maintains aspect ratio */
            margin-bottom: 20px;
        }


        .content {
            padding: 20px;
            text-align: center;
        }

        .content .total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            margin: 20px 0;
        }

        .order-details {
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }

        .order-details .item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .order-details .item:last-child {
            border-bottom: none;
        }

        .reciept-footer {
            text-align: center;
            margin-top: 20px;
            color: grey;
            background-color: rgba(0, 0, 0, 0.05);
            padding: 10px;
            border-radius: 8px;
        }

        .btn-cancel {
            border-radius: 20px;
            padding: 5px 15px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            margin-top: 10px;
        }

        .btn-cancel:hover {
            background-color: #f5c6cb;
        }
    </style>
</head>

<body>
    @section('title')
        Receipt
    @endsection

    @extends('Users.Member.layouts.app')

    @section('content')
        <div class="content" style="margin-top: 100px;">
            <a href="#" class="btn btn-light d-flex" >&larr; Back</a>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="my-4">
            <h2>Order is on the way!</h2>
            <div class="total">
                <div>Total</div>
                <div>&#8369;69.69</div>
            </div>
            <div class="order-details">
                <div class="item">
                    <div>
                        <img src="{{ asset('images/driver.png') }}" alt="Driver Image" >
                        Driver Name
                    </div>
                    <div>Location</div>
                </div>
                <div class="item">
                    <div>Meal Name</div>
                    <div>X 1</div>
                    <div>&#8369;69.69</div>
                </div>
            </div>
            <button class="btn btn-cancel">Cancel Order</button>
        </div>
        <div class="reciept-footer">
            We’re glad you ordered from us and hope you love our service.
        </div>
    @endsection
</body>

</html>
