<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);

Route::post('/saveTask', [TaskController::class, 'saveTask'])->name("saveTask");

Route::get('/getTasks', [TaskController::class, 'getTasks'])->name("getTasks");

Route::post('/deleteTask/{id}', [TaskController::class, 'deleteTask'])->name("deleteTask");
