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
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="{{ asset('css/backend_css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/otp.js') }}"></script>
</head>

<body>
    <div class="container">
        <div class="login-box">
        <form id="admin_login" method=""  action="">
            @csrf
            <div class="email">
                <h2>Enter Coupan Code</h2>
                <input type="text" class="form-control" id="coupan_txt" required name="coupan" autocomplete="off"><br>
            </div>
            <button type="submit" style="width: 100%" class="btn btn-primary">Login</button>
            <div class="status"></div>
        </form>
        </div>
    </div>
   
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>