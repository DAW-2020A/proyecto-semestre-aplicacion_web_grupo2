<?php

namespace App\Http\Controllers;

use App\Test;
use App\Http\Resources\TestCollection;
use App\Http\Resources\Test as TestResource;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return new TestCollection(Test::all());
    }

    public function show(Test $test)
    {
        return response()->json(new TestResource($test), 200);
    }

    public function store(Request $request)
    {
        $test = Test::create($request->all());
        return response()->json($test, 201);
    }

    public function update(Request $request, Test $test)
    {
        $test->update($request->all());
        return response()->json($test, 200);
    }

    public function delete(Test $test)
    {
        $test->delete();
        return response()->json(null, 204);
    }
}
