@extends('layouts.app')

@section('content')
    <li><a href="{{ url('/car') }}">Car</a></li>
        {{--{{$cars->model}}--}}
    <li><a href="{{ url('/tracker') }}">tracker</a></li>
@stop