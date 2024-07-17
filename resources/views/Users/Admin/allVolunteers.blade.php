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
				<h3 style="font-weight: var(--weight-700); color: var(--primary-color); font-size: var(--h1-font-size)"> VOLUNTEER MANAGEMENT </h3>
                <hr>
			</div>
		</div>

        

        <!-- USER MANAGEMENT -->
		<div class="row">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Name </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Address </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Email </b> </h4> </th>
                            <th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Phone </b> </h4> </th>
							<th scope="col" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);"> <h4> <b> Actions </b> </h4> </th>
						</tr>
					</thead>
                     @foreach ($volunteerData as $volunteer)
					<tbody>
							<tr>
								<td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ DB::table('users')->where('id',$volunteer->user_id)->value('name')}}</td>
                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ DB::table('users')->where('id',$volunteer->user_id)->value('address')}}</td>
                                <td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ DB::table('users')->where('id',$volunteer->user_id)->value('email')}}</td>
								<td class="text-center" scope="row" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">{{ DB::table('users')->where('id',$volunteer->user_id)->value('phone')}}</td>
                                <td class="text-center" scope="row" class="text-center" style="border: var(--primary-color) solid 1px; color: var(--primary-color);">
                                    
                                    {{-- <!-- VIEW USER -->
                                    <a type="button" class="btn" style="color: var(-primary-color);" href=""> <i class="far fa-eye"></i> </a>  --}}
                                    
                                    <!-- Button trigger modal for EDIT -->
									<button type="button" class="btn" style="color: var(-primary-color);"
                                    href="{{ route('admin#updateVolunteer', $volunteer->user_id) }}">
										<i class="fas fa-edit"></i>
									</button>
					</div>
				</div>
            </div>
                                    
                                    <!-- DELETE BUTTON -->
                                    <a type="button" class="btn" style="color: var(-primary-color);"
									href="{{ route('admin#deleteVolunteer', $volunteer->user_id) }}"> <i class="far fa-trash-alt"></i>
								    </a></td>
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