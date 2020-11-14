<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assetts/images/favicon.png">
    <title>Login</title>
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
</head>
<body>
    
    @yield('content')


    <script src="{{ asset('assetts/libs/jquery/dist/jquery.min.js ') }}"></script>
    <script src="{{ asset('assetts/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assetts/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>
</html>
