<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
// use App\Http\Controllers\Auth\RegisterController;



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

Route::get('/todo', [TodoListController::class,'index'])->name('index');
Route::post('/todo', [TodoListController::class,'store'])->name('store');
Route::delete('/todo/{todolist:id}', [TodoListController::class,'destroy'])->name('destroy');




