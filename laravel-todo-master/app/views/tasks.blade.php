@extends('layout')

@section('content')
	<h1>Laravel To-do</h1>
	{{ link_to_route('tasks.create',
		'New',
		[],
		['class' => 'pure-button pure-button-primary'])
	}}

	<h2>To do</h2>
	<ul class="tasks">
	@foreach($unfinished as $task)
		<li>
			<span class="task-name">{{ link_to_route('tasks.show', $task->name, $task->id) }}</span>

			{{ Form::open([
				'route' => [
					'tasks.update',
					$task->id
				],
				'method' => 'put'
			])}}
				{{ Form::button('done',
					['class' => 'pure-button button-success', 'type' => 'submit']
				) }}
			{{ Form::close() }}

			{{ Form::open([
				'route' => [
					'tasks.destroy',
					$task->id
				],
				'method' => 'delete'
			])}}
				{{ Form::button('delete',
				['class' => 'pure-button button-danger', 'type' => 'submit']) }}
			{{ Form::close() }}
		</li>
	@endforeach
	</ul>

	<h3>Finished</h3>
	<ul class="tasks finished">
	@foreach($finished as $task)
		<li>
			{{ link_to_route('tasks.show', $task->name, $task->id) }}
		</li>
	@endforeach
	</ul>
@stop
