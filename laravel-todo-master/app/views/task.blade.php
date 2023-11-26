@extends('layout')

@section('content')
	{{ link_to_route('tasks.index', 'back') }}
	<h1>{{ $task->name }}</h1>
@stop
