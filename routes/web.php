<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//index.blade.phpを表示する
//task,indexにアクセスするユーザーにアクセスするユーザーの認証
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index')->middleware('auth');;

//create.blade.phpを表示する
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task.create');

//新規投稿保存、一覧表示画面に内容を保存
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');


//edit.blade.phpを表示する(！後でid取得できるように)
Route::get('/tasks/{id}/edit', [App\Http\Controllers\TaskController::class, 'edit'])->name('task.edit');

//更新処理（！後でid取得できるように）
Route::put('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('task.update');

//削除処理（！後でid取得できるように）
Route::delete('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('task.destroy');




