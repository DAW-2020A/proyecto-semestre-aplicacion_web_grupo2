<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Http\Resources\ActivityCollection;
use App\Http\Resources\Activity as ActivityResource;

class ActivityController extends Controller
{
    public function index()
    {
        return new ActivityCollection(Activity::all());
    }

    public function show(Activity $activity)
    {
        return response()->json(new ActivityResource($activity), 200);
    }

    public function store(Request $request)
    {
        $activity = Activity::create($request->all());
        return response()->json($activity, 201);
    }

    public function update(Request $request, Activity $activity)
    {
        $activity->update($request->all());
        return response()->json($activity, 200);
    }

    public function delete(Activity $search)
    {
        $search->delete();
        return response()->json(null, 204);
    }
}
