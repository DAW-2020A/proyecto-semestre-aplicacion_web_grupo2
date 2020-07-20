<?php

namespace App\Http\Controllers;

use App\Student;
use App\Http\Resources\StudentCollection;
use App\Http\Resources\Student as StudentResource;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return new StudentCollection(Student::all());
    }

    public function show(Student $student)
    {
        return response()->json(new StudentResource($student), 200);
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json($student, 200);
    }

    public function delete(Student $student)
    {
        $student->delete();
        return response()->json(null, 204);
    }
}