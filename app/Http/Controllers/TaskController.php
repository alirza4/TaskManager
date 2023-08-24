<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('Task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = [
            [
                'label' => 'Backlog',
                'value' => 'Backlog',
            ],
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'InProgress',
                'value' => 'InProgress',
            ],
            [
                'label' => 'Qa',
                'value' => 'Qa',
            ],
            [
                'label' => 'Test',
                'value' => 'Test',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ],
            [
                'label' => 'Rejected',
                'value' => 'Rejected',
            ]
        ];
        return view('Task.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $statuses = [
            [
                'label' => 'Backlog',
                'value' => 'Backlog',
            ],
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'InProgress',
                'value' => 'InProgress',
            ],
            [
                'label' => 'Qa',
                'value' => 'Qa',
            ],
            [
                'label' => 'Test',
                'value' => 'Test',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ],
            [
                'label' => 'Rejected',
                'value' => 'Rejected',
            ]

        ];
        return view('Task.edit', compact('statuses', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $request->validate([
            'title' => 'required'
        ]);

        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('index');
    }
}
