<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(Student::all(), 200);
        
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:students,email',
            'age' => 'required|integer|min:0',
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201); // 201 Created
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|email|unique:students,email,' . $student->id,
            'age' => 'integer|min:0',
        ]);

        $student->update($request->all());
        return response()->json($student, 200); // 200 OK
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        
        return response()->json(null, 204); // 204 No Content
    }
}
