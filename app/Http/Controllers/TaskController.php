<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view ('tasks.index')->with('tasks', $tasks);
    }
    
    public function create()
    {
        return view('tasks.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        task::create($input);
        return redirect('tasks')->with('flash_message', 'Tasks Addedd!');  
    }
    
    public function show($id)
    {
        $tasks = task::find($id);
        return view('tasks.show')->with('tasks', $tasks);
    }
    
    public function edit($id)
    {
        $tasks = task::find($id);
        return view('tasks.edit')->with('tasks', $tasks);
    }
  
    public function update(Request $request, $id)
    {
        $tasks = task::find($id);
        $input = $request->all();
        $tasks->update($input);
        return redirect('tasks')->with('flash_message', 'tasks Updated!');  
    }
  
    public function destroy($id)
    {
        task::destroy($id);
        return redirect('task')->with('flash_message', 'tasks deleted!');  
    }
}
