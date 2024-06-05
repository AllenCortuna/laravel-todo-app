<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function saveTask(Request $request)
    {
        $newTask = new Task;
        $newTask->title = $request->title;
        $newTask->description = $request->description;
        $newTask->save();

        return view('welcome');
    }

    public function getTasks(Request $request)
    {
        return view('taskList');
    }
}
