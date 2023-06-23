<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\API\TasksApiController;

Route::get('tasks', [TasksApiController::class, 'index']);
Route::get('tasks/create', [TasksApiController::class, 'create']);
Route::post('tasks', [TasksApiController::class, 'store']);
Route::get('tasks/{id}', [TasksApiController::class, 'show']);
Route::put('tasks/{id}', [TasksApiController::class, 'update']);
Route::delete('tasks/{id}', [TasksApiController::class, 'destroy']);
