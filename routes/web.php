<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// List tasks
Route::get('tasks', [App\Http\Controllers\TasksController::class, 'index'])->name('tasks.index');

// Show task details
Route::get('tasks/{task}', [App\Http\Controllers\TasksController::class, 'show'])->name('tasks.show');

// Create a new task
Route::get('tasks/create', [App\Http\Controllers\TasksController::class, 'create'])->name('tasks.create');
Route::post('tasks', [App\Http\Controllers\TasksController::class, 'store'])->name('tasks.store');


// Edit a task
Route::get('tasks/{task}/edit', [App\Http\Controllers\TasksController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{task}', [App\Http\Controllers\TasksController::class, 'update'])->name('tasks.update');

// Delete a task
Route::get('tasks/{task}/delete', [App\Http\Controllers\TasksController::class, 'delete'])->name('tasks.delete');
Route::delete('tasks/{task}', [App\Http\Controllers\TasksController::class, 'destroy'])->name('tasks.destroy');
