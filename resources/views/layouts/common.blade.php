<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{URL::asset('css/font.css')}}">
    <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/common.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">

    <script src="{{URL::asset('js/canvas/common.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/canvas/default.page.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/canvas/index.entry.js')}}" type="text/javascript"></script>
</head>
<body>
@yield('content')
</body>
</html>
