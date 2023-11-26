@extends('layout')

@section('content')
	<h1>New to-do</h1>
	{{ Form::open([
		'route' => 'tasks.store',
		'class' => 'pure-form'
	]) }}
		{{ Form::text('name', null, ['placeholder' => 'e.g. Buy some video games']) }}
		{{ $errors->first('name') }}
		{{ Form::button('Add', [
			'class' => 'pure-button pure-button-primary'
		]) }}
	{{ Form::close() }}
@stop
