<?php

namespace App\Http\Controllers;

use App\User;
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

        //$this->authorize('viewAny');
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

        $request->validate([
            'name' => 'required|string|max:200',
            'code' => 'required|integer|between:1000,9000'

        ]);

        $course = Course::create([
            'name' => $request->get('name'),
            'code' => $request->get('code'),

        ]);

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
    public function coursesByTeacher(){
        $user=Auth::user();
        $courses=$user->coursesT;
        return response()->json(CourseResource::collection($courses),200);
    }
    public function coursesByStudent(){
        $user=Auth::user();
        $courses=$user->coursesS;
        return response()->json(CourseResource::collection($courses),200);
    }
    public function joinCourse($code) {
        $course=Course::where("code",$code)->firstOrFail();
        if ($course){
         $findCourse=Auth::user()->coursesS()->find($course);
         if($findCourse){
             return response()->json(["message"=>"Ya esta registrado en este curso"],400);
         }
         else{
             Auth::user()->coursesS()->save($course);
         }
        }
        else{
            return response()->json(null,204);
        }
    }
}
