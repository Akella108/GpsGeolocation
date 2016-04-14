{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Laravel</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
     {{--<link href="{{ elixir('css/app.css') }}" rel="stylesheet">--}}

    {{--<style>--}}
        {{--body {--}}
            {{--font-family: 'Lato';--}}
        {{--}--}}

        {{--.fa-btn {--}}
            {{--margin-right: 6px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body id="app-layout">--}}
    {{--<nav class="navbar navbar-default navbar-static-top">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}

                {{--<!-- Collapsed Hamburger -->--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<!-- Branding Image -->--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--Laravel--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (Auth::guest())--}}
                        {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        {{--<form action="register" style="display:inline">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--Регистрация--}}
                            {{--</button>--}}
                        {{--</form>--}}
                        {{--<form action="login" style="display:inline">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--Вход--}}
                            {{--</button>--}}
                        {{--</form>--}}
                    {{--@else--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--@yield('content')--}}

    {{--<!-- JavaScripts -->--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
     {{--<script src="{{ elixir('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Geolocation</title>
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>

<body>
<!-- ----- HEAD ----- -->
<div class="head">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1 col-xs-1">
                <a href="http://laravel.local/"><img src="img/mini-logo.png" ></a>
            </div>
            <div class="col-sm-1 col-xs-1">
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" id="head_menu">
                        <li><a href="{{ url('/home') }}">Карта</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10 col-xs-6">
                <ul class="nav navbar-nav navbar-right" id="head_menu">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Вход</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                    @else
                        <li><a href="{{ url('/account') }}">Личный кабинет</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->email }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выйти</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7 col-xs-6">
                <p>Наши контакты: <i class="glyphicon glyphicon-phone-alt"></i>  +380-93-0111-111
                    <i class="glyphicon glyphicon-envelope"></i>  Geolocation@gmail.com</p>
            </div>
            <div class="col-sm-5 col-xs-6">
                <p>© 2016 Geolocation</p>
            </div>
        </div>
    </div>
</div>

<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

