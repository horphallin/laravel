@extends('layout')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@stop
@section('content')
    <p>This is my body content.</p>
	@{{ This will not be processed by Blade }}
	
@stop