<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Activity;
use App\Http\Resources\ActivityCollection;
use App\Http\Resources\Activity as ActivityResource;

class ActivityController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];

    public function index()
    {
        return new ActivityCollection(Activity::paginate(10));
    }

    public function show(Test $test, Activity $activity)
    {
        return response()->json(new ActivityResource($activity), 200);
    }

    public function store(Request $request, Test $test)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'string|max:250',
            'score' => 'required'
        ], self::$messages);
        $activity = Activity::create($request->all());
        return response()->json($activity, 201);
    }

    public function update(Request $request, Test $test,Activity $activity)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'string|max:250',
            'score' => 'required'
        ], self::$messages);
        $activity=$test->activity_test()->update($request->all());
        //$activity->update($request->all());
        return response()->json($activity, 200);
    }

    public function delete(Test $test, Activity $activity)
    {
        $activity=$test->activity_test()->delete();
        //$activity->delete();
        return response()->json(null, 204);
    }
}
