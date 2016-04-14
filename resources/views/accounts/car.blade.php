@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <td>id</td>
                    <td>brend</td>
                    <td>model</td>
                    <td>options</td>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>{{$car->id}}</td>
                        <td>{{$car->brand_name}}</td>
                        <td>{{$car->model}}</td>
                        <td><a href="/car/edit/{{$car->id}}">ref</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3><b>Машина</b></h3></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action='/car'>
                                {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('brand_name') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">brand_name:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="brand_name"
                                               value="{{ old('brand_name') }}">

                                        @if ($errors->has('brand_name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('brand_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">model:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="model" value="{{ old('model') }}">

                                        @if ($errors->has('model'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('model') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('serial_number') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">serial_number:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="serial_number"
                                               value="{{ old('serial_number') }}">

                                        @if ($errors->has('serial_number'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('serial_number') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">color:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="color" value="{{ old('color') }}">

                                        @if ($errors->has('color'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('color') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('engine') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">engine:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="engine"
                                               value="{{ old('engine') }}">

                                        @if ($errors->has('engine'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('engine') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('year_release') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">year_release:</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="year_release"
                                               value="{{ old('year_release') }}">

                                        @if ($errors->has('year_release'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('year_release') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                {{--old('users_id')--}}
                                <div class="form-group{{ $errors->has('users_id') ? ' has-error' : '' }}">
                                    {{--<label class="col-md-4 control-label">users_id:</label>--}}

                                    <div class="col-md-6">
                                        <input type="hidden" class="form-control" name="users_id"
                                               value="{{ Auth::user()->id }}">

                                        @if ($errors->has('users_id'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('users_id') }}</strong>
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