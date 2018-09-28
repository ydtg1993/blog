<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{URL::asset('css/css.css')}}">
    <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/common.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
</head>
<body>
@yield('content')
</body>
</html>
