@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Welcome</div>--}}

                {{--<div class="panel-body">--}}
                    {{--Your Application's Landing Page.--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="second-head">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-xs-6">
                <div class="hero-unit">
                    <h1>Добро пожаловать!</h1>
                    <p>На этом сайте вы можете в режиме онлайн отслеживать текущее месторасположение транспортных средств.</p>
                    <p>
                        <a class="btn btn-primary btn-large">
                            Узнать больше
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <img src="img/logo.png">
            </div>
        </div>
    </div>
</div>
<div class="middle">
    <div class="title-slide">
        <h2>На слайдах продемонстрированы некоторые возможности</h2>
    </div>
    <div class="position">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/a1.png" alt="firs">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="img/a2.png" alt="second">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="img/a3.png" alt="third">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <div class="title-slide">
        <h2>Отслеживайте транспорт на любом устройстве</h2>
    </div>
    <div class="position">
        <img src="img/all_devaices.jpg" alt="">
    </div>

</div>

@endsection
