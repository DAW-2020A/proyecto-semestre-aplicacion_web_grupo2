<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Resources\CourseCollection;
use App\Http\Resources\Course as CourseResource;

class CourseController extends Controller
{
    public function index()
    {
        return new CourseCollection(Course::all());
    }

    public function show(Course $course)
    {
        return response()->json(new CourseResource($course), 200);
    }

    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return response()->json($course, 201);
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return response()->json($course, 200);
    }

    public function delete(Course $course)
    {
        $course->delete();
        return response()->json(null, 204);
    }
}
