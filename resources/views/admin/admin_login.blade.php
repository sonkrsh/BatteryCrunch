<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="skcats">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="{{ asset('css/backend_css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="login-box">
        

        <form id=admin_login method="POST" action="{{ url('admin') }}">
        @if(Session::has('login_error'))
       
       <div class="alert alert-error alert-block">
           <button type="button" class="close" data-dismiss="alert">×</button>	
           <strong> {!! session('login_error') !!}</strong>
       </div>
       @endif
            @csrf
            <div class="company-name">
                <h1>BatteryCrunch</h1>
            </div>
            <div class="heading">
                <h3>Admin Login</h3>
            </div>
            <div class="email">
                <label>Email</label>
                <input type="email" class="form-control" required name="email" autocomplete="off"><br>
            </div>
            <div class="password">
                <label>Password</label>
                <input type="password" class="form-control" required name="password" autocomplete="off"><br>
            </div>
            
            <button type="submit" style="width: 100%" class="btn btn-primary">Login</button>
        </form>
        </div>
    </div>
    <script src="{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>