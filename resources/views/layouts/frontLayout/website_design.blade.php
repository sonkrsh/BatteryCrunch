<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BatteryCrunch</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style.css')}}">

</head>
    <body>
    <div class="page-container">
    @include('layouts.frontLayout.website_sidebar')
    <div class="page-content">
     @include('layouts.frontLayout.website_header')
     @yield('website_content')
     @include('layouts.frontLayout.website_right_sidebar')
    </div>
    </div>
    
<!-- Javascripts -->

<script src="https://www.gstatic.com/firebasejs/7.14.3/firebase.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAaTpkRTlINbUCFGT3q2kTZYijScjjUv9I",
    authDomain: "sms-verification-a42ee.firebaseapp.com",
    databaseURL: "https://sms-verification-a42ee.firebaseio.com",
    projectId: "sms-verification-a42ee",
    storageBucket: "sms-verification-a42ee.appspot.com",
    messagingSenderId: "839148235703",
    appId: "1:839148235703:web:33414c4b79a9dee8bf9632",
    measurementId: "G-9DS1J7NENT"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
  <script type="text/javascript" src="{{ asset('js/frontend_js/NumberAuthentication.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend_js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend_js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend_js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend_js/search_filter.js') }}"></script>
</body>
</html>
