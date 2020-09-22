<?php

namespace App\Http\Controllers;

use App\Complete;
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

    public function show( Activity $activity)
    {
        return response()->json(new ActivityResource($activity), 200);
    }

    public function complete(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'complete_text' => 'string|max:1000',
            'hidden_text' => 'string|max:1000',
            'description' => 'string|max:250',
            'score' => 'required'
        ], self::$messages);
        $complete = Complete::create([
            'complete_text'=> $request->get('complete_text'),
            'hidden_text'=> $request->get('hidden_text'),
        ]);
        $complete->activity()->create([
            'title'=> $request->get('title'),
            'description'=>$request->get('description'),
            'score'=> $request->get('score'),
        ]);

        $activity = $complete->activity;
        return response()->json($activity, 201);
    }

    public function update(Request $request,Activity $activity)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'string|max:250',
            'score' => 'required'
        ], self::$messages);
        //$activity=$test->activity_test()->update($request->all());

        $activity->update($request->all());
        return response()->json($activity, 200);
    }

    public function delete( Activity $activity)
    {
        //$activity=$test->activity_test()->delete();
        $activity->delete();
        return response()->json(null, 204);
    }
}
