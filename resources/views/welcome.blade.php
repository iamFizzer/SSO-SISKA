<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>STMIK BANDUNG SSO</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('temp')}}/css/main.css">
<!--===============================================================================================-->

</head>
<body>     
     @include('login')  
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <!--===============================================================================================-->
   <script src="{{asset('temp')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
   <!--===============================================================================================-->
       <script src="{{asset('temp')}}/vendor/animsition/js/animsition.min.js"></script>
   <!--===============================================================================================-->
       <script src="{{asset('temp')}}/vendor/bootstrap/js/popper.js"></script>
       <script src="{{asset('temp')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
   <!--===============================================================================================-->
       <script src="{{asset('temp')}}/vendor/select2/select2.min.js"></script>
   <!--===============================================================================================-->
       <script src="{{asset('temp')}}/vendor/daterangepicker/moment.min.js"></script>
       <script src="{{asset('temp')}}/vendor/daterangepicker/daterangepicker.js"></script>
   <!--===============================================================================================-->
       <script src="{{asset('temp')}}/vendor/countdowntime/countdowntime.js"></script>
   <!--===============================================================================================-->
       <script src="{{asset('temp')}}/js/main.js"></script>
</body>
</html>
@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    
    <div class="d-flex justify-content-center">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <div class="card">
                <div class="card-body">
                    <h4>Nama: {{auth()->user()->name}}</h4>
                    <a href="{{route('login.logout')}}" class="btn btn-danger">Logout</a>
                </div>
            </div>
            @else
                      
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div> 