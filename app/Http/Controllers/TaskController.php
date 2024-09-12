<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    //indexメソッドの記述
    function index()
    {
        $tasks = Task::all();


        $tasks = Task::orderByRaw('COALESCE(updated_at, created_at) DESC')->get();
        
        // dd($tasks);
        return view('todo.index', compact('tasks'));
    }


    
    //createメソッドの記述
    function create()
    {
        return view('todo.create');
    }


    //storeメソッドの記述
    function store(Request $request)
    {

        //バリデーションを追加
            $request->validate([
                'title' => 'required|string|max:255',
                'contents' => 'required|string',
                'image_at' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 画像のサイズや拡張子のバリデーション
            ]);
        // dd($request);
        $task = new Task;
        $task->title = $request->title;
        $task->contents = $request->contents;
        $task->user_id = Auth::id();

        // 画像ファイルがアップロードされているか確認
        if ($request->hasFile('image_at')) {
            // 画像を保存し、ファイルパスを取得
            $imagePath = $request->file('image_at')->store('images', 'public');
            $task->image_at = $imagePath; // ファイルパスをデータベースに保存
        }


        $task->save();
        return redirect()->route('task.index');
    }


    //editメソッドの記述
    function edit($id)
    {
        $task = Task::find($id);
        return view('todo.edit', compact('task'));
    }

    function update(Request $request, $id)
    {
        //バリデーションを追加
        $request->validate([
            'title' => 'required|string|max:255',
            'contents' => 'required|string',
            'image_at' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 画像のサイズや拡張子のバリデーション
        ]);

        $task = Task::find($id);

        $task->title = $request->title;
        $task->contents = $request->contents;

        if ($request->hasFile('image_at')) {
            // 画像を保存し、ファイルパスを取得
            $imagePath = $request->file('image_at')->store('images', 'public');
            $task->image_at = $imagePath; // ファイルパスをデータベースに保存
        }

        $task->save();

        return redirect()->route('task.index')->with('success', 'タスクが更新されました。');
    }

    function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('task.index'); //一覧画面へ
    }

    function getUserName(Request $request)
    {
        $userName = $request->user_id()->name;

        return view('layouts.header',['userName' => $userName]);
    }


}
