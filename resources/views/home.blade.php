@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
        <!-- ----- MIDDLE ----- -->
<div class="middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 col-xs-6">

            </div>
            <div class="col-sm-8 col-xs-6">
                <div>
                    <div id="map"></div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" onclick="startListening()">Начать прослушивание</button>
                    <button type="button" class="btn btn-primary" onclick="stopListening()">Остановить прослушивание</button>
                </div>
            </div>
            <div class="col-sm-2 col-xs-6">

            </div>
        </div>
    </div>
</div>
@endsection
