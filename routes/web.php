<?php

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
// Route::get('tasks', [TaskController::class, 'index'])->name('tasks.taskindex');
// Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
// Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
// Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
// Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
// Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
// Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('tasks', [TaskController::class, 'index']);
Route::get('taskcreate', [TaskController::class, 'create']);
Route::post('taskstore', [TaskController::class, 'store']);
Route::get('tasks/{task}', [TaskController::class, 'show']);
Route::get('taskedit/{id}', [TaskController::class, 'edit']);
Route::put('taskupdate/{id}', [TaskController::class, 'update']);
Route::delete('taskdelete/{id}', [TaskController::class, 'destroy']);