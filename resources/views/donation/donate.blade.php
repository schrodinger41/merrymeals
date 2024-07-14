@section('title')
    Donation Form
@endsection

@extends('layouts.app')

<body>
    @section('content')
        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

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
    @endsection
</body>
