<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}">
    <style>
        html, body {
            font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #e8e8e8;
            color: #636b6f;
            font-weight: 200;
            height: 100%;
            padding: 0;
            margin: 0;
        }

        ul{
            padding: 0;
        }
        ul li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
        }

        p{
            line-height: 1.6;
            color: #353c41;
            font-size: 13px;
            margin: 5px 0 5px 0;
        }
    </style>
</head>
<body>
@yield('content')
</body>
</html>
