<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    function index()
    {
        return view('todo.index');
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
