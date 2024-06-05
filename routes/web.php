<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/saveTask', [TaskController::class, 'saveTask'])->name("saveTask");
Route::get('/getTasks', [TaskController::class, 'getTasks'])->name("getTasks");