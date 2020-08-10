<?php

namespace App\Http\Controllers;

use App\Course;
use App\Test;
use App\Http\Resources\TestCollection;
use App\Http\Resources\Test as TestResource;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];

    public function index(Course $course)
    {
        $test = $course->tests;
        return response()->json(TestResource::collection($course->tests),200);
        //return new TestCollection(Test::all());
    }

    public function show(Course $course, Test $test)
    {
        $test = $course->tests()->where('id',$test->id)->firstOrFail();
        return response()->json(new TestResource($test), 200);
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'string|max:100',
            'description' => 'string|max:250',
            'start_time' => 'required',
            'end_time' => 'required'
        ], self::$messages);
        $test = $course->tests()->save(new Test($request->all()));

        return response()->json(new TestResource($test), 201);
        //return response()->json($test, 201);
    }

    public function update(Request $request, Course $course,Test $test)
    {
        $request->validate([
            'name' => 'string|max:100',
            'description' => 'string|max:250',
            'start_time' => 'required',
            'end_time' => 'required'
        ], self::$messages);
        $test=$course->tests()->update($request->all());
        //$test->update($request->all());
        //return response()->json(new TestResource($test), 200);
        return response()->json($test, 200);
    }

    public function delete(Course $course, Test $test)
    {
        $test=$course->tests()->delete();
        //$test->delete();
        return response()->json(null, 204);
    }
}
