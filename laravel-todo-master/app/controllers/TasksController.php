<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$unfinishedTasks = Task::where('completed', 0)
			->orderBy('created_at', 'desc')
			->get();

		$finishedTasks = Task::where('completed', 1)
			->orderBy('updated_at', 'desc')
			->get();

		return View::make('tasks')
			->with('unfinished', $unfinishedTasks)
			->with('finished', $finishedTasks);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(),
			['name' => 'required']);

		if ($validator->fails()) {
			return Redirect::back()
				->withInput()
				->withErrors($validator->messages());
		}
		$task = new Task;
		$task->name = Input::get('name');
		$task->save();
		return Redirect::route('tasks.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$task = Task::find($id);
		return View::make('task')->with('task', $task);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// currently update = mark as completed
		$task = Task::find($id);
		$task->completed = 1;
		$task->save();
		return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$task = Task::find($id);
		$task->delete();
		return Redirect::back();
	}


}
