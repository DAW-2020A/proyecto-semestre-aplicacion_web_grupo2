<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Resources\CourseCollection;
use App\Http\Resources\Course as CourseResource;
use Illuminate\Support\Facades\Auth;
use JWTAuth;

class CourseController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];

    public function index()
    {
        return new CourseCollection(Course::all());
    }
    public function show(Course $course)
    {
        $this->authorize('view', $course);
        return response()->json(new CourseResource($course), 200);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Course::class);
        $validatedData = $request->validate([
            'name' => 'required|string|max:200',
            'code' => 'required|integer|between:1000,9000'
        ], self::$messages);
        $course = Course::create($validatedData);
        return response()->json(new CourseResource($course), 201);
    }

    public function update(Request $request, Course $course)
    {
        $this->authorize('update', $course);
        $course->update($request->all());
        return response()->json($course, 200);
    }

    public function delete(Course $course)
    {
        $this->authorize('delete', $course);
        $course->delete();
        return response()->json(null, 204);
    }
    public function coursesByUser(){
        $user=Auth::user();
        $courses=$user->courses;

        return response()->json(new CourseCollection($courses),200);
    }
}
