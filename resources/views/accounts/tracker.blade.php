@extends('layouts.app')

@section('content')
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3><b>Трекер</b></h3></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action='/tracker'>
                                {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">name:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('imei') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">imei:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="imei" value="{{ old('imei') }}">

                                        @if ($errors->has('imei'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('imei') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('users_id') ? ' has-error' : '' }}">
                                    {{--<label class="col-md-4 control-label">users_id:</label>--}}

                                    <div class="col-md-6">
                                        <input type="hidden" class="form-control" name="users_id" value="{{ Auth::user()->id }}">

                                        @if ($errors->has('users_id'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('users_id') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('car_id') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">car_id:</label>

                                    <div class="col-md-6">
                                        <select name="car_id">

                                            @foreach($cars as $car)

                                                <option value="{{$car->id}}">
                                                    {{$car->model}}
                                                </option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('car_id'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('car_id') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Зарегестриваться
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection