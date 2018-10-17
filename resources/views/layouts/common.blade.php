<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{URL::asset('css/font.css')}}">
    <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/common.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
</head>
<body>
<div id="head">
    <div class="center">
        <div id="logo_box">
            <a href="{{url('/')}}">
                <img src="{{URL::asset('img/jinono.png')}}" style="vertical-align: bottom">
                <h1>
                    jinono
                </h1>
            </a>
        </div>

        <ul id="login">
            <li><a href="#"><img src="{{URL::asset('img/github.png')}}"></a></li>
        </ul>
        <div class="clear_both"></div>
    </div>
</div>

<div id="nav">

    <ul class="nav_title">
        <div class="center">
            <li><a href="/menu">分享资源</a></li>
            <li><a href="/menu">技术帖子</a></li>
            <li><a href="/menu">关于网站</a></li>
        </div>
    </ul>
    <ul class="nav_list">
        <div class="center">
            <li><a href="/menu">前端</a></li>
            <li><a href="/menu">PHP</a></li>
            <li><a href="/menu">JAVA</a></li>
            <li><a href="/menu">IOS</a></li>
        </div>
    </ul>
</div>
@yield('content')
</body>
</html>
