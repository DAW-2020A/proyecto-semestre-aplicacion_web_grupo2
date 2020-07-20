<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Http\Resources\TeacherCollection;
use App\Http\Resources\Teacher as TeacherResource;

class TeacherController extends Controller
{
    public function index()
    {
        return Teacher::all();
    }

    public function show(Teacher $teacher)
    {
        return $teacher;
    }

    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return response()->json($teacher, 201);
    }

    public function update(Request $request, Teacher $teacher){
        $teacher->update($request->all());
        return response()->json($teacher, 200);
    }

    public function delete(Request $request, Teacher $teacher){
        $teacher->delete();
        return response()->json(null, 204);
    }
}
