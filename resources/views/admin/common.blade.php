<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>jinono后台</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/dist/css/skins/skin-blue.min.css')}}">
</head>
<body>
@yield('content')
</body>
</html>
