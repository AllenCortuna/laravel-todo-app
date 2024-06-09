<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function index()
    {
        return view('welcome', ['taskList' => Task::all()]);
    }

    public function deleteTask($id)
    {
        // Log::info('This is an info message');
        Log::info('This is the id' . $id);
        $task = Task::find($id);
        if ($task) {
            $task->delete();
        }
        return redirect('/');
    }

    public function saveTask(Request $request)
    {
        $newTask = new Task;
        $newTask->title = $request->title;
        $newTask->description = $request->description;
        $newTask->save();
        return redirect('/');
    }

    public function getTasks(Request $request)
    {
        return view('taskList');
    }
}
