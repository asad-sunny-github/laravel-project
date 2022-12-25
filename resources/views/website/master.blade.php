<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/ecom.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/style.css">
</head>
<body>

    @include('website.includes.header')
    <!--header-->
    @yield('content')
    <!--content-->
    @include('website.includes.footer')
    <!--footer-->
<script src="{{ asset('/') }}website/js/jquery-3.6.0.js"></script>
<script src="{{ asset('/') }}website/js/bootstrap.js"></script>
</body>
</html>
