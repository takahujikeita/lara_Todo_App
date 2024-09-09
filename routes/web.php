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

//create.blade.phpを表示する
Route::get('/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task.create');

//とーみ追加：表示用
//edit.blade.phpを表示する
Route::get('/edit', [App\Http\Controllers\TaskController::class, 'edit'])->name('task.edit');

