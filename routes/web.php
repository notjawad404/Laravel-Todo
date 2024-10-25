<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::post('/save', [TaskController::class, 'save']);
Route::get('/edit/{id}', [TaskController::class, 'edit']);
Route::post('/update/{id}', [TaskController::class, 'update']);
Route::post('/delete/{id}', [TaskController::class, 'delete']);


