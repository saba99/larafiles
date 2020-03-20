<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>larafiles</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/frontend-custom.css')}}">

</head>
<body>
    
@include('frontend.layouts.partials.nav')
<div class="container">
<div class="row">
   @yield('content') 
</div>


</div>





<script src="{{asset('assets/js/vendor/jquery/jquery-1.12.3.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery/uikit.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/custom-frontend.js')}}"></script>
</body>
</html>