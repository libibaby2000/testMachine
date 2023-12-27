<?php

namespace App\Http\Controllers;
use App\Models\Taskmodel;

use Illuminate\Http\Request;

class TaskController extends Controller
{ 
    public function index()
{
    $tasks = Taskmodel::all();
    return view('tasks.taskindex', compact('tasks'));
}

public function show(Taskmodel $task)
{
    return view('tasks.show', compact('task'));
}

public function create()
{
    return view('tasks.create');
}

public function store(Request $request)
{
    // Validation
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'due_date' => 'required|date',
    ]);

    Taskmodel::create($request->all());
    return redirect('tasks');
}

public function edit($id)
{

    $task=Taskmodel::find($id);
    return view('tasks.edit',compact('task'));
}

public function update(Request $request, $id)
{
    // Validation
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'due_date' => 'required|date',
    ]);

    $update=Taskmodel::find($id);
        $req=$request->all();
        $update->update($req);
        return redirect('tasks');
}

public function destroy($id)
{
    Taskmodel::destroy($id);
    return back();
}
}
