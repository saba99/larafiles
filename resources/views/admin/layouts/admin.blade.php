<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/admin-custom.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">

  @yield('ionicons')
    <title>laravel Admin Panel</title>
</head>
<body>
    @include('admin.partials.nav')

    
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="pt-4">
<div class="card ">
  <h5 class="card-header">{{isset($panel_title)? $panel_title : ''}}</h5>
  <div class="card-body">
    <h5 class="card-title"> </h5>
    <p class="card-text"></p>
  @yield('content')
  </div>
</div>
</div>



            </div>
        </div>
    </div>


<script src="{{asset('assets/js/vendor/jquery/jquery-1.12.3.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery/uikit.min.js')}}"></script>
 
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script> 
  <script src="{{asset('assets/js/select2.min.js')}}"></script> 
   <script src="{{asset('assets/js/custom-admin.js')}}"></script> 
</body>
</html>