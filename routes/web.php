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

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index');

//create.blade.phpを表示する
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task.create');

//新規投稿保存、一覧表示画面に内容を保存
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');

//edit.blade.phpを表示する
Route::get('/tasks/edit', [App\Http\Controllers\TaskController::class, 'edit'])->name('task.edit');

