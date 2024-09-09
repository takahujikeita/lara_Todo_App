<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index()
    {
        return view('todo.index');
    }
    function create()
    {
        return view('todo.create');
    }

    function edit()
    {
        return view('todo.edit');
    }
}
