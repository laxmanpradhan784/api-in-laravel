<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

// -----------------------------
// Student Routes
// -----------------------------

// Get all students
Route::get('/students', [StudentController::class, 'index']); // Retrieve all students

// Get a specific student
Route::get('/students/{id}', [StudentController::class, 'show']); // Retrieve a specific student by ID

// Create a new student
Route::post('/students', [StudentController::class, 'store']); // Add a new student

// Update a specific student
Route::put('/students/{id}', [StudentController::class, 'update']); // Update an existing student by ID

// Delete a specific student
Route::delete('/students/{id}', [StudentController::class, 'destroy']); // Remove a student by ID


// -----------------------------
// Employee Routes
// -----------------------------

// Get all employees
Route::get('/employees', [EmployeeController::class, 'index']); // Retrieve all employees

// Get a specific employee
Route::get('/employees/{id}', [EmployeeController::class, 'show']); // Retrieve a specific employee by ID

// Create a new employee
Route::post('/employees', [EmployeeController::class, 'store']); // Add a new employee

// Update a specific employee
Route::put('/employees/{id}', [EmployeeController::class, 'update']); // Update an existing employee by ID

// Delete a specific employee
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']); // Remove an employee by ID

?>
