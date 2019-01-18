<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }} | @yield('title')</title>
        <link rel="shortcut icon" href="./favicon.ico">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ secure_asset('/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ secure_asset('/gentelella/vendors/font-awesome/css/font-awesome.min.css') }}">
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ secure_asset('/gentelella/vendors/animate.css/animate.min.css') }}">
        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="{{ secure_asset('/gentelella/build/css/custom.min.css') }}">
    </head>
    <body class="login">
        @yield('content')
        <div class="clearfix"></div>
        
        <div class="login_content">
            <h1><a href="{{ env('APP_URL') }}"><i class="fa fa-book"></i> {{ env('APP_NAME') }}</a>   </h1>
        </div>
        <!-- jQuery -->
        <script src="{{ secure_asset('/gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ secure_asset('/js/sign_up.js') }}"></script>
    </body>
</html>
