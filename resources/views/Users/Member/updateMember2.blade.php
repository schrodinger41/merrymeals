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
    <title>Profile</title>
</head>
<body>
    @section('title')
        PROFILE PAGE!
    @endsection

    @extends('Users.Member.layouts.app')
    
    @section('content')
    <div class="container justify-content-center" style="margin-top: 120px">
        <div class="card mt-3 mb-3" style="width: 100%;">
            <div>

                <!-- MODAL -->
		    <div class="modal fade" id="exampleModal" tabindex="-1"
			aria-labelledby="exampleModalLabel" aria-hidden="true"
			role="dialog">
				<div class="modal-dialog" style="margin-top: 120px">
					<div class="modal-content" style="background-color: var(--accent-color); color: rgb(31, 31, 31);">
                        
                       
						<div class="modal-header align-items-center justify-content-center">
							<h5 class="modal-title text-center" id="exampleModalLabel" style="font-size: var(--h3-font-size);font-weight: 900"> <b> EDIT PROFILE </b> </h5>
						</div>
						<form action="{{ route('member.updateProfilePost', $userData->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body" >
                                <!-- FORM -->
                                <div class="was-validated">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="d-flex form-label" style="font-weight: 900">Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter full name" name="name" value="{{ $userData->name }}" required />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                        
                                    <div class="mb-3 mt-3">
                                        <label for="age" class="d-flex form-label" style="font-weight: 900">Age:</label>
                                        <input type="text" class="form-control" placeholder="Enter age" name="age" value="{{ $memberData->age }}" required />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                        
                                    <div class="mb-3 mt-3">
                                        <label for="gender" class="d-flex form-label" style="font-weight: 900">Gender:</label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="inline_Radio1" value="0" required="">
                                                <label class="form-check-label" for="inlineRadio1" name="gender">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="inline_Radio2" value="1" required="">
                                                <label class="form-check-label" for="inlineRadio2" name="gender">Female</label>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="mb-3 mt-3">
                                        <label for="caregiversname" class="d-flex form-label" style="font-weight: 900">Caregiver's Name:</label>
                                        <input type="text" class="form-control" placeholder="Write N/A if none" name="member_caregiver_name" value="{{ $memberData->member_caregiver_name }}" required />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                        
                                    <div class="mb-3 mt-3">
                                        <label for="address" class="d-flex form-label" style="font-weight: 900">Address:</label>
                                        <input type="text" class="form-control" placeholder="Enter your address" name="address" value="{{ $userData->address }}" required />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                        
                                    <div class="mb-3 mt-3">
                                        <label for="email" class="d-flex form-label" style="font-weight: 900">Email:</label>
                                        <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{ $userData->email }}" required />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="number" class="d-flex form-label" style="font-weight: 900">Phone Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter phone number" name="phone" value="{{ $userData->phone }}" required />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="d-flex justify-content-center pb-2">
                                <button type="submit" class="btn btn-outline-dark" style="font-weight: 900">Save</button>
                            </div>
                        </form>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-weight: 900">Cancel</button>
                        </div>
                    
					</div>
				</div>
            </div>

                <!-- TOP PART -->
                <div class="d-flex">
                    <div class="card-body text-left d-flex" style="height: 284px">
                        <img src="data:image/png;base64,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"
                        class="rounded-circle img-fluid border" style="width: 240px">
                        <div class="card-body mt-5">
                            <h1 class="card-title mt-3" style="font-size: var(--h2-font-size); font-weight: 900; padding-left: 10px;"> {{ $userData->name }} </h1>
                            <hr>
                            <button type="button" class="btn btn-outline-dark text-center mt-1" data-bs-toggle="modal"
					        data-bs-target="#exampleModal" style="border-radius: 40px">
					        Edit Profile
				            </button>
                        </div>
                    </div>
                </div>

                <!-- OTHER DETAILS -->
                <div class="d-flex">
                    <div class="card-body mt-3 m-2" style="border: 2px var(--primary-color) solid">
                        <div class="row pb-3 pt-1">
                            <div class="col-4" style="font-weight: 900">AGE:</div>
                            <div class="col-8">{{ $userData->age }}</div>
                        </div>
                        <hr>
                        <div class="row pb-3 pt-3">
                            <div class="col-4" style="font-weight: 900">GENDER:</div>
                            <div class="col-8">
                                @if($userData->gender == 0)
                                    Male
                                @elseif($userData->gender == 1)
                                    Female
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row pb-3 pt-3">
                            <div class="col-4" style="font-weight: 900">CAREGIVER'S NAME:</div>
                            <div class="col-8">{{ $memberData->member_caregiver_name }}</div>
                        </div>
                        <hr>
                        <div class="row pb-3 pt-3">
                            <div class="col-4" style="font-weight: 900">ADDRESS:</div>
                            <div class="col-8">{{ $userData->address }}</div>
                        </div>
                        <hr>
                        <div class="row pb-3 pt-3">
                            <div class="col-4" style="font-weight: 900">EMAIL:</div>
                            <div class="col-8">{{ $userData->email }}</div>
                        </div>
                        <hr>
                        <div class="row pb-1 pt-3">
                            <div class="col-4" style="font-weight: 900">PHONE NUMBER:</div>
                            <div class="col-8">{{ $userData->phone }}</div>
                        </div>
                    </div>
                   

                    <!-- RECENT MEAL FEATURE -->
                    <div class="card mb-3 m-2" style="width: 335px; background-color: var(--primary-color); color: white; border: 2px #344d3b solid; border-radius: 40px;">
                        <div class="card-header align-items-center justify-content-center"> 
                            <h4 class="text-center"> RECENT MEAL </h4>
                        </div>
                        <img class="card-img-top mt-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABEVBMVEVYzAKJ4hn///9LS0v/wgD0gAD/3gCE4QCH4RhAQEBERESB4ACD3xba9cWS5DLk+M/5+fk1NTXE752Q5CDg4OBfzwZ42hKTk5P/xgBp0wu7u7v/2wBTzQL/wABz2BB/3RX5fQDs+t/7/vj6pwBMzwLy/OjJycmenp5SUlJ2dnb/ywC51xKj52Hw++b1/O/r6+vQ0NBwcHBlZWWHvAG2pgHQ8rO77YvX9L2u6nWe5lWV5EC87ZKXl5exsbHm+NmCgoKs2hTUzwzvxwbD1BD2jgD5ngD8sgB0wwHljADAnwHXkQFoxgHL8qmx6nqq6Wy/7pgsLCzyxQag3hbS0A3jywqv2RKI0gmesQGVtgHVlAGprgGjk9SGAAAN+klEQVR4nO2d+1cauxbHy8ObAQZEERSLvA6iVgWrVQqtj/pobRV7az3neM7//4fcGWAeSfZOMg90rbvy/aFrVTE7n+ydx2SSzZs3WlpaWlpaWlpaWlpaWlpaWlpaWlpaAVW29Np1mGhOFSnXTcMw66/PWK7MpyJlMzGRUY275ICqGtOKNOJGTLiqx1xyMNXdehjxFlzxCI3XRKwbXkUqcRZc9hWcSLxeoFb91TDijNNKgtJrebFOVyNGJ9IufLXhpspWIz4nVhOsXgNxnrUwubJfAZEHTJhxlV3my375QGVDdKK4whRovRf34nzr0ABLf1FE0IPWwiam4oFu+MKBigDG1RGx4uPrBjJBA0G0RqYfT+pY+S/lRbyJ/WuPAM9UVebxBCd8GUQBoEc4fbirKNXHATKrzA9AxPkHKrugAgmrJvMDgXxL0Cr3k1fwosiD7tK0yv1EUCBfeyGh5+o5ASIDOcVDtYKsPtTcZ5a5H/Gaa6AKQ9QhLFOtIJlB2KVDWU44z0AVh+iMkJ1LxNVhaezdEHGUJuYYqJIQnRKWuToLi+TarKFAOK9AlYXolJALMWFMATANBcL5BKo0RCeEQB8SDKdlKCoqCoTzCFR5iFqqQ5O1iYcU/Iii0JTCUsMJbG3eLPhTvLllo+YLIqoBIsLHGiVvvQhiJEDBZnGUUmNFjAaYSGDlwt3wFRDDACrtWasMmi+ByM3hgYXNF5ELjmlXIWKIJvChJjphHF6M2gfnTBj9tV70EE2ghHE0XvRAjacScDvHQxgtUOdbh5hKjxKocVVhzoThAzW+GsCEKk8rkQzINO8KKD2tRLIgA4yxAuCUr9aAZCLpx0IgKqwZlUxPxSPKu4BVeKEwGu5ZGo4KhYTYWNCn/rJ4yUhIqTCaGh+NCiUFUm5rWLImJaTwsHycP9tvJy21W4v54597JZGdYIdShBFKyGi8PFg827RtJ3utxcH9p6EhY2SaWLRznyC53F6+NWHzq9c6HuYEkBX1SK3gXYTkyEl+kze+eFzKCSHpjiLqA6T0kOcMuIbu9xJRGcuC5iWFkzxmO9m6H4kGD/9zsKgT5sYDlG/CeDzEERUO2JXruHFSOlkU2bYZBX709RO8E+ZGx0K+qR8FbjTEL7yqFVHj7on5bG2O8Vj1Rjs0SkjpXspnqz0uibpEvQp6slwVDm9kdKxiO3n2gNp2uyJqY4j3AUYDUbRYpir1atV7RVsuV6v1hngCzo1bqsY/lbBC6mIX5h72VW1YPUKMaIWMYZqNRqNSsf4xTUO2viAn6raTA7SbTBoVXQ0GsWH1xo+SOgcRKQyCGcfatyIaZpYD2bCsnOTiQ1TuHjO1kAHdHmyQFzy5nwFtWNpTXTRKFcyDE0TEixXUhZ+CA1pDajyIpaAenKgAG68ijxTjdhgjvVi8mFObJVgtFsDSKuBUQYa9UEaS+zEQ5j6Gs508Bosz4MkwJGAymY8MSD62wxpfBtsXIiThwmSiT1G9ODoLbxwcUAFC8tAOb2R/FA0wF2aIc5RXJCzI17sCDSLNimQUxXbyJ4DIE5IorZhEQkWZMPhM6FcLiCCeMBd6mJkKDBVVwCgdxBbgRI6QSBcz/YP1rfPz89PuQR/6daR5H3Rhsd+1La6edleKkrq1FQgTkrFs5fNhNpO1lMlk358eAJ+A5yUlQfNwf311O+NYPD9dEVfvhENkCaXTUf88k3KUzW6v8n7sDcMCEmi1f5rJpvwWT4V+XJQSJqRzYX/HZzGVTa1zn4BGNCXBQwBlL5XKHEKB46jHPfGzhCP5k/XBEm2Ra9SzkBMGGYL2VrYpe1ajdgW1u5cQkj0pYDJ5SFtMnbIfCOlDMEitgWY1wyBuCxDz7AKcJVRZsK0zFjMsIt/d1QiRQa7LONESHqg9dkpkCHMqq8KDLGMvywxwXKSoabQJ2+uzQZPKHuLDDdsRWcK2AmGfbdPsOW1wMVRHJNhDaXGHbdJUZgutHdu8DGFJARBqUzpO99HtPSEhtjMEEKa20ThlxzmaUGmggQhpJ4abEY37AITZz1ic7osJlVbdK5w9pie2Qw01BrbqLr7nCVOH4JLRNi4mVFradzOcPaZfhJrz0Q2oFS5mbItomIoJlXa5VoGgeR+dsIAZPwVcaIUpVj3hSKNEWORdmEotUR+Bd0xkhMiTN9QN7TDF6scUG4LwM2Twv1THj5XwFGpRK0yx+jEDeXBCYIVh+5Dq+HESroAetMJ0XoQHh6DFJWowjZGwDw2kEx9i00U0wmJ3CbY3L8LuNgI4H8JiFxhG50hYPNjC7MVOeHB6sLL++T3aoPETrqx0twT2YidcX8rYeyW4vdgJV5eE9uInhEfseRIK8TShJtSEmlATakJNqAk1oSbUhPEQgrtBcyQ8kBHGvhMlePadKuZ9mhVk88LzIfXxcPulFCGyw+ZpGyNkilUk7Mvs0buXMewIYxtCrgvPMULxjjD6ghTcQvTE7Oqjp9sMW8jvmF19CWHYXf0x9meSoMlQ753bHyFCw8yVHi8uLh5LRs6EMOnmhXe6XW1jx056QsIEfFYgCb5v8in7ntoQ3uTerhmGRXf1dPnL1uXl0+6jwUPSb9fEw3fmHBtKW2LCHEZYFI/e9JGTFuNCI/G4e5neSPu0kf5yUaIDlnm1h7yucFyIBin7ApolRF6l82c+KBfu0C/z8pQRI3Hx+1ca0NNuyX8niDzQx2nWRUGzitWTG+XUTyps4VGzxJz+8L9KN8zHpzXXcen0mp/x8k9/rJboGyzFc8F2MPZ+lL8xwJ42EbwExl4gpLLssQGfEfPxi4Oz9u7tfyZ6+/ady/n06Lkxx7yfLeIbwviBGu4AJks4bKN/20c6Bv9K3QtS4+LSYXH4ppDvnB//+tP1Ite8yFsg4IySpwF7SoI99SU6INx/D74b3WIBvWPC5q7bAdf8gBai68W1KxexwFpcgbyYXeKP0nniFozc2UThZaDPKe6w0DZvzp0Njd9el6MBLUTvV1+cMTXHv5vZ4S0KT+7x58w5wj3hEeHujv8sZCqbOecnXq8nXHkTxLv/sHLjNL1xNYss4MJa8fSQCpxsdkt4wpQ/ocyfERafY++v7yxNjrPaB1ozqwfAvOuMpOaub9QUEabTTqBC577664euxaXslsiBSejuFU+ILmscFbtb5zs7O+dbXXBZsTk7yk4BSgjTu9MRFTmC3V9f3bEtgkeSKQEHP4GT7BGudNi6nxoxSmsBCNdKUy8O0RWHmoAz5sBthLD3jmaane80v6QDEKa/zJwY9NYjLeh2F3QrKMKloGRyds/SoGIUQHzH/H536kQS5S4E+EwDEUYJlbPZQFp6SrOIb/1iAdNP0/EUf35T0LHiraBgt4xpOa1o/MkSWH3NL/7XF0bUCGoDLDBh2DuOSTdGE7lLHkGip9mfhr52hdzvhO8fhr0i58y3xuOGHInRhhNB0ukK0U8QxYQJJSsbTO51Y/MqMGB6YzYnhu0kyFWdOpJvgIzawW2cufepDW6cUdCT8xwVCjEPny03y1heEzIO7MWedy+vFLwbWo/D3nNP8Kvy3DUL14V40oiPARFbXkc3LsBdC4l+XXhPikEn/gFyV32S+wNLVEgKAdJi0DaMx1A+fPR2NMhDoDn5Hrv+ME39gSUYIuixZEDMZHuxe/X76Zc9B0rB7I/8evp9tXtBGd9Tb9/eCULg5sbDkuCQguqF2d6Y+VN7a7v0+NfNzdc0PL/P4Kxffb25+euxxO2Fk5HqhVl+d9aVk4IHz31ORniKKE/tAZwPq9G5bS40F65v/vi6scH5bWPj6x831wvNZvO6A6auyO2pZKjZ/IQn4/KStuGpqAgZSyf/AbiHb+cV6dwuOLq+sTmnK7e0zWbBObrtwAM6KSzLGHsDUZYqL7WRKBMWKZwIe8TZGEt/U3nT+dFc8OvacucfluOuqZ8u/OigY8FInMbpWJRpjMrYhn4Zz4Qx93ERGdn280M0EZXVyzvfaUJYze8dPEsOISdn8LTVbt0XhBnb6MSCwox0dtK75cEi05q9xeOTEd4H7BCp/a1E+HdNlFyXGHvLeTZaN/P3aOzMxKZRlWW6JonC8OHTYmt/09J+K3/yMCwITdghUjtSAFxYOKqJewohhdFwfD8z3jo7Hu+NxMYT0DdSyJN5E0JyrmSpGSd9oPbtVs63cPutJu0ptnWfbfkrZugrN+LIwezKSXen0BGb32efjS9BK5J6M5Y00zM5nbz2rODD55rSYBBISKK/yFnnHfkSFv4jc2LzH+/DURP7u0IzGcbkRd8wXTuSEroujC1QBV+YIkkEqygqNWtH4sSmNd37FAeiOP1t9K7ADGK1u1sRYvP2rkZ9PnrCa9m3PkZNyMylK689XwsIr59rzOejxpE8K2y0IRUoX9QVm0cs4JuI443a1wOG7gtwF+8cIfN+8/q5A/1B6EY2VFMXhw0ULKVu7egH5MbmD8iDE4XrK40AGbbDWBCUX7v7sMAyNhc+3GGA4RpZnrOYZgwWKYb4CxFqnbsPt9bjvEPXXLj9cNfBASeMgVrZDPE15OIsv7Tk3/9Z63z798MPe8/Cwvvx/d9vYr4JoyBLNMsX0H8BGQ214mu1N3ffjp6fn4++3dn/UVBZrbc04EzMipANsQ2jESDzusU1k/qflOviGpiNQNntQRPVOtYj7AzPUYtXqUEdprRaF8mjHcKGjenL4GyYk8Jf6iudmRpMkkrXX9a+lpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWltb/jf4HN7TI54QTfrAAAAAASUVORK5CYII=" style="width: 100%; height: 250px; border-radius: 40px; padding-bottom: 10px;">
                        <hr style="color: white;">
                        <div class="card-body">
                            <h4 class="card-title">MEAL NAME</h4>
                            <div class="card-text d-flex justify-content-between">
                                <p> <i class="fas fa-user" style="color: #e4e4e4;"></i> USERNAME</p>
                                <a href="" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>