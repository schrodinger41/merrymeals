<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--  Enable Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
.receive-button {
  background-color: var(--accent-color);
  color: white;
  font-weight: 800;
  margin-left: 10px;
}
.receive-button:hover {
  background-color: var(--primary-color);
  color: white;
}
</style>
</head>
<body>

@section('title')
    Order Status - Member
@endsection

@extends('Users.Member.layouts.app')

@section('content')
<body>
    <!-- main  -->
    <div class="fh5co-services-section" style="margin-top: 62px; min-height: 70vh">
      <div class="container-fluid pt-4">
          <div class="row">
              <div class="delivery-status">
                  <div class="col-md-12 offset-md-0">
                      <div class="mt-5 p-4">
                          <h1 class="text-secondary text-center mb-5 display-5" style="font-weight: 900">
                              Order Status - <span style="color: var(--primary-color)">Member</span>
                          </h1>
                <div class="row">
                 
                  <table class="table table-responsive table-hover">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">No.</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Partner Name</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Meal Name</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Order Date</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Order Time</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Menu Preparation Status</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Assigned Rider</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Delivery Status</th>
                        <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">Confirm Receive</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $orderData ->id }}</td>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $orderData -> order_menu_restaurant }}</td>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $orderData -> order_menu_name }}</td>
                        <?php 
                            $str = $orderData -> created_at;
                            $newstr = explode(" ", $str);
                            $date = $newstr[0];
                            $time = $newstr[1];
                        ?>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"><?php echo $date;  ?></td>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"><?php echo $time;  ?></td>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $orderData -> order_cooking_status }}</td>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $deliverData -> volunteer_name }}</td>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $deliverData -> delivery_status }}</td>
                        <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                          <form action="{{ route('member#updateMemberOrder', $orderData ->id) }}" method="GET" >
                            <input type="text" name="order_received_status" value="{{ $orderData -> order_received_status}}" readonly/>
                            <button  type="submit" class="btn receive-button" style="">Received?</button>
                            </form>
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>


@endsection
</body>