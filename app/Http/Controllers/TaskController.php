<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use Illuminate\Support\Facades\Auth; 

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

    //storeメソッドの記述
    function store(Request $request)
    {

        // バリデーションを追加
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
    function edit()
    {
        return view('todo.edit');
    }
}
