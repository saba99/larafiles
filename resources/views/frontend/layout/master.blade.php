<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>دریا </title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lnr-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">

   {{-- <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css" /> --}}
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    @yield('styles')
    
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="assets/image/png" sizes="16x16" href="assets/images/favicon.png">
</head>

<body class="preload home1 mutlti-vendor">

<!-- ================================
START MENU AREA
================================= -->
@include('frontend.partials.header')
<!--================================
END MENU AREA
=================================-->

<!--================================
  <div id="app">
@yield('content')
</div>
<!--================================
START FOOTER AREA
=================================-->
@include('frontend.partials.footer')
<!--================================
END FOOTER AREA
=================================-->

<!--//////////////////// JS GOES HERE ////////////////-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
<!-- inject:js -->
<script src="{{asset('assets/js/vendor/jquery/jquery-1.12.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/captcha.js')}}"></script>

<script src="https://cdn.tiny.cloud/1/xud543epvdhmxg6tsz6yf7iy7f5rk6op35mdchtu9ufrvizo/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
<script src="{{asset('assets/js/vendor/jquery/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery/uikit.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/grid.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.barrating.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.easing1.3.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/custom-frontend.js')}}"></script>
<script src="{{asset('assets/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/tether.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/map.js')}}"></script>
 {{-- <script src="{{asset('admin/bootstrap/js/tinymce.js')}}"></script>  --}}
@yield('scripts')

 
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<textarea name="content" class="form-control my-editor"></textarea>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
  
<!-- endinject -->
</body>

</html>