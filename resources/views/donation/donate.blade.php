@extends('layouts.app')

@section('title', 'Donation Form')

<body>
    @section('content')
        <style>
            .form-container {
                max-width: 600px;
                margin: 20 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #f9f9f9;
            }

            .form-container div {
                margin-bottom: 15px;
            }

            .form-container label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .form-container input[type="number"],
            .form-container input[type="text"],
            .form-container input[type="email"] {
                width: calc(100% - 20px);
                padding: 8px;
                margin: 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            .form-container button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #28a745;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            .form-container button:hover {
                background-color: #218838;
            }

            .success-message {
                margin-bottom: 20px;
                padding: 10px;
                border: 1px solid green;
                border-radius: 5px;
                background-color: #d4edda;
                color: green;
            }
        </style>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-container">
            <form action="{{ route('processDonation') }}" method="POST">
                @csrf
                <div>
                    <label for="amount">Donation Amount:</label>
                    <input type="number" name="amount" id="amount" required>
                </div>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <button type="submit">Donate</button>
            </form>
        </div>
    @endsection
</body>
