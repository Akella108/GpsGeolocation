@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($car as $c)
            <form action="/car/update/{{$c->id}}" method="post">
                {!! csrf_field() !!}

                    <input type="text" class="form-control" name="brand_name" value="{{$c->brand_name}}">
                    <input type="text" class="form-control" name="model" value="{{$c->model}}">
                    {{--<input type="text" class="form-control" name="serial_number" value="{{$c->serial_number}}">--}}
                    {{--<input type="text" class="form-control" name="color" value="{{$c->color}}">--}}
                    {{--<input type="text" class="form-control" name="engine" value="{{$c->engine}}">--}}
                    {{--<input type="text" class="form-control" name="year_release" value="{{$c->year_release}}">--}}
                    {{--<input type="text" class="form-control" name="users_id" value="{{$c->users_id}}">--}}
                    <input type="submit">

            </form>
            @endforeach
        </div>
    </div>
@stop