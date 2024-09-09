<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', function () {
    return view('todo.index');
});
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


>>>>>>> 95e245ab182288afbde7dbd0edf8a12fad65c43e
Route::get('/create', function () {
    return view('todo.create');
});


//とーみ追加：表示用
Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

