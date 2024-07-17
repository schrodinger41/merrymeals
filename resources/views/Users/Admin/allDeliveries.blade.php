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
    <script>
        $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management</title>
</head>

<body>
    @section('title')
        Welcome
    @endsection


    @extends('Users.Admin.layouts.app')

    @section('content')
    <!--Hi Jia, You can start designing here. | Gotcha! --> 

    <div class="container" style="margin-top: 120px; min-height: 60vh">
		<div class="row p-3 mt-3 mb-5">
			<div class="col-12">
				<h3 style="font-weight: var(--weight-700); color: var(--primary-color); font-size: var(--h1-font-size)"> DELIVERY MANAGEMENT </h3>
                <hr>
			</div>
		</div>

        

        <!-- USER MANAGEMENT -->
		<div class="row">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> No. </b> </h4> </th>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Member Name </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Meal Name </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Order Date </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Order Time </b> </h4> </th>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Start Cooking Time </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Menu Status </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Order Received Status </b> </h4> </th>
						</tr>
					</thead>
          @foreach ($orderData as $order)
					<tbody>
							<tr>
								<td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order ->id }}</td>
								<td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order ->member_name }}</td>
                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order ->order_menu_name }}</td>
                                <?php 
                                $str = $order ->created_at;
                                $newstr = explode(" ", $str);
                                $date = $newstr[0];
                                $time = $newstr[1];
                                ?>
                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"><?php echo $date;  ?></td>
                                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"><?php echo $time;  ?></td>
                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order ->start_cooking_time }}</td>
                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order ->order_cooking_status }}</td>
                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ $order ->order_received_status}}</td>
							</tr>

					</tbody>
          @endforeach
				</table>
			</div>
		</div>

	</div>
    @endsection
</body>
</html>