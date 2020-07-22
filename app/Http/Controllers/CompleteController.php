<?php

namespace App\Http\Controllers;

use App\Complete;
use App\Http\Resources\Complete as CompleteResource;
use App\Http\Resources\CompleteCollection;
use Illuminate\Http\Request;

class CompleteController extends Controller
{
    public function index()
    {
        return new CompleteCollection(Complete::all());
    }

    public function show(Complete $complete)
    {
        return response()->json(new CompleteResource($complete), 200);
    }

    public function store(Request $request)
    {
        $complete = Complete::create($request->all());
        return response()->json($complete, 201);
    }

    public function update(Request $request, Complete $complete)
    {
        $complete->update($request->all());
        return response()->json($complete, 200);
    }

    public function delete(Complete $complete)
    {
        $complete->delete();
        return response()->json(null, 204);
    }
}
