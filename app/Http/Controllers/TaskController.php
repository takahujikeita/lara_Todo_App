<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function create()
    {
        return view('todo.create');
    }

    function edit()
    {
        return view('todo.edit');
    }
}
