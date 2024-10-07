<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Get all employees
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees, 200);
    }

    // Get a specific employee by ID
    public function show($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }
        return response()->json($employee, 200);
    }

    // Create a new employee
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees,email',
            'age' => 'required|integer|min:0',
            'position' => 'nullable|string',
        ]);

        // Create new employee record
        $employee = Employee::create($request->only('name', 'email', 'age', 'position'));

        // Return success response
        return response()->json($employee, 201); // 201 Created
    }

    // Update an existing employee
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }

        // Validate inputs
        $request->validate([
            'name' => 'sometimes|string',
            'email' => 'sometimes|email|unique:employees,email,' . $id,
            'age' => 'sometimes|integer|min:0',
            'position' => 'sometimes|string',
        ]);

        // Update employee record
        $employee->update($request->only('name', 'email', 'age', 'position'));

        return response()->json($employee, 200); // 200 OK
    }

    // Delete an employee
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }

        // Store the employee details to return after deletion
        $employeeDetails = $employee;

        $employee->delete();

        // Return the details of the deleted employee
        return response()->json([
            'message' => 'Employee deleted',
            'employee' => $employeeDetails
        ], 200); // 200 OK
    }
}
