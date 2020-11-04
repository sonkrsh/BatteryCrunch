<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="skcats">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Dashboard</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/icomoon/style.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>
   
      
        <!-- Theme Styles -->
        <link href="{{ asset('css/backend_css/ecaps.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/backend_css/custom.css') }}" rel="stylesheet">

    </head>
    <body>
    <div class="page-container">
    @include('layouts.adminLayout.admin_sidebar')
    <div class="page-content">
     @include('layouts.adminLayout.admin_header')
     @yield('content')
     @include('layouts.adminLayout.admin_right_sidebar')
    </div>
    </div>
    
<!-- Javascripts -->

        <script src="{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}"></script>
        <script src="{{ asset('js/backend_js/all_backend.js') }}"></script> 
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('js/backend_js/ecaps.min.js') }}"></script>
        

    </body>
</html>
