<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    //indexメソッドの記述
    function index()
    {
        $tasks = Task::all();
        // dd($tasks);
        return view('todo.index', compact('tasks'));
    }
    //createメソッドの記述
    function create()
    {
        return view('todo.create');
    }

    //editメソッドの記述
    function edit()
    {
        return view('todo.edit');
    }
}
