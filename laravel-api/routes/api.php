<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']); // Get all students
Route::get('/students/{id}', [StudentController::class, 'show']); // Get a specific student
Route::post('/students', [StudentController::class, 'store']); // Create a new student
Route::put('/students/{id}', [StudentController::class, 'update']); // Update a specific student
Route::delete('/students/{id}', [StudentController::class, 'destroy']); // Delete a specific student

?>