<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>jinono后台</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/adminle/dist/css/skins/skin-blue.min.css')}}">

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('lib/adminle/dist/js/adminlte.min.js')}}"></script>
    <script src="{{URL::asset('lib/adminle/dist/js/bootstrap.min.js')}}"></script>
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>jinono</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form action="" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group has-feedback">
                <input type="text" name="account" class="form-control" placeholder="account">
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="social-auth-links text-center">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</body>
</html>
